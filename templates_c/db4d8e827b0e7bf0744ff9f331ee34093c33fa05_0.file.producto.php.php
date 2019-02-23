<?php
/* Smarty version 3.1.33, created on 2019-02-12 21:08:49
  from '/var/www/tiendProducto/producto.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6327d15cf175_35754120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4d8e827b0e7bf0744ff9f331ee34093c33fa05' => 
    array (
      0 => '/var/www/tiendProducto/producto.php',
      1 => 1550002127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6327d15cf175_35754120 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>session_start();
require('/usr/local/share/smarty/libs/Smarty.class.php');

spl_autoload_register(function($clase) {
    require ("$clase.php");
});

$plantilla = new Smarty();
$plantilla->template_dir="./templates/";
$plantilla->compile_dir='./templates_c/';

if(isset($_SESSION['usuario'])){
    $user=$_SESSION['usuario']['user'];
}else{
     $plantilla->display('login.tpl');
}

BD::conectar();

$filas=BD::obtenerProductos();
$plantilla->assign('filas', $filas);
$plantilla->display('producto.tpl');

<?php echo '?>';
}
}
