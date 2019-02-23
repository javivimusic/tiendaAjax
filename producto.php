<?php

session_start();
require_once './vendor/autoload.php';
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});




class actualizarCesta {

/**
 * 
 * @param string $cod
 * @return Response
 */
    public function add($cod) {
        $respuesta = new Response();
        
        $lista = $_SESSION['lista'];
        $cont = $_SESSION['cont'];
        $lista = Cesta::add($cod, $lista, $cont);
        $total = Cesta::total($lista);
        $html = Cesta::mostrar($lista);
        $_SESSION['cesta'] = $lista;
        $_SESSION['total'] = $total;
        
        $respuesta->assign('cesta1', 'innerHTML', $html);
        $respuesta->assign('total', 'innerHTML', $total);
        
        return $respuesta;
    }

    public function borrar() {
        $cod = $_POST['producto'];
        $lista = $_SESSION['cesta'];
        $actualizado = Cesta::quitar($cod, $lista);
        $total = Cesta::total($actualizado);
        $_SESSION['cesta'] = $actualizado;
        $_SESSION['total'] = $total;
    }
    

}


//Ecosistema ajax
use Jaxon\Jaxon;
use Jaxon\Response\Response;

$ajax = jaxon();



$ajax->register(Jaxon::CALLABLE_OBJECT, new actualizarCesta());

require_once 'Smarty.class.php';

$plantilla = new Smarty();
$plantilla->template_dir = "./templates/";
$plantilla->compile_dir = './templates_c/';

//Confirmo estar logueado
if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario']['user'];
} else {
    header("Location:login.php");
    exit();
}



BD::conectar();

$list = $_SESSION['cesta'];
$total = $_SESSION['total'];
$filas = BD::obtenerProductos($list);

$plantilla->assign(array('filas' => $filas, 'user' => $user));


//si no existe la sesion de cesta, la creamos

if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [];
    $_SESSION['cont'] = 0;
    $_SESSION['total'] = 0;
}


$css = $ajax->getCss();
$js = $ajax->getJs();
$script = $ajax->getScript();

$plantilla->assign("css", $css);
$plantilla->assign("js", $js);
$plantilla->assign("script", $script);

$plantilla->display('producto.tpl');
?>