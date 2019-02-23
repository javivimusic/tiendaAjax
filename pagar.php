<?php

session_start();
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

require_once 'Smarty.class.php';

$plantilla = new Smarty();
$plantilla->template_dir = "./templates/";
$plantilla->compile_dir = './templates_c/';
if (isset($_SESSION['cesta'])) {
    $user = $_SESSION['usuario']['user'];
    $cesta = $_SESSION['cesta'];
    $total = $_SESSION['total'];
    $factura = Cesta::pagar($cesta);
    $plantilla->assign(array('factura' => $factura, 'user' => $user, 'total' => $total, 'lista' => $cesta));
    $plantilla->display('pagar.tpl');
} else {
    header("Location:login.php");
}

