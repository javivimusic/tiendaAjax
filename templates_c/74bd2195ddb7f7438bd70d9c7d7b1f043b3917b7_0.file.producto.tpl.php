<?php
/* Smarty version 3.1.33, created on 2019-02-16 04:06:59
  from '/var/www/tiendCesta/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c677e532f8b98_44614583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74bd2195ddb7f7438bd70d9c7d7b1f043b3917b7' => 
    array (
      0 => '/var/www/tiendCesta/templates/producto.tpl',
      1 => 1550286283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c677e532f8b98_44614583 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="encabezado">
            <h1>Listado de procutos</h1>
        </div>
        
        <div id="contenedor">
            
        </div>
        <div id="contenedor">
            <div id="productos">
                <?php echo $_smarty_tpl->tpl_vars['filas']->value;?>

            </div>
        </div>
        <div id="pie">
            <form action="logoff.php" method="post">
                <input type="submit" name="desconectar" value="Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" />
            </form>
        </div>
    </body>
</html><?php }
}
