<?php
session_start();
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

require_once 'Smarty.class.php';

$plantilla = new Smarty();
$plantilla->template_dir = "./templates/";
$plantilla->compile_dir = './templates_c/';

if (isset($_SESSION['usuario'])) {
    header('Location:producto.php');
    exit();
}

BD::conectar();

if (!BD::conectado()) {
    $error = BD::get_error();
    $plantilla->assign('error', $error);
    $plantilla->display('loging.tpl');
}

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $esta = BD::usuario($user, $pass);
    if ($esta) {
        $usuario = ['user' => $user, 'pass' => $pass];
        $_SESSION['usuario'] = $usuario;
        header('Location:producto.php');
    } else {
        $msj = "El usuario o la contraseña no son validos";
        $plantilla->assign('msj', $msj);
        $plantilla->display('loging.tpl');
    }
}
?>