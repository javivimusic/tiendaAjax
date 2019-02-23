<?php
/* Smarty version 3.1.33, created on 2019-02-12 21:07:35
  from '/var/www/tiendProducto/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6327870aa697_88993875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d51a3ececfd4785155b8b73fd65723f15e5615' => 
    array (
      0 => '/var/www/tiendProducto/templates/producto.tpl',
      1 => 1550001872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6327870aa697_88993875 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Listado de procutos</h1>
        <div id="productos">
            <?php echo $_smarty_tpl->tpl_vars['filas']->value;?>

        </div>
    </body>
</html><?php }
}
