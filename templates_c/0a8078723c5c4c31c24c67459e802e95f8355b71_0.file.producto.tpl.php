<?php
/* Smarty version 3.1.33, created on 2019-02-12 21:49:04
  from '/var/www/tiendDesconexion/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c633140d693e7_20193070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a8078723c5c4c31c24c67459e802e95f8355b71' => 
    array (
      0 => '/var/www/tiendDesconexion/templates/producto.tpl',
      1 => 1550004489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c633140d693e7_20193070 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="logoff.php" method="post">
            <input type="submit" name="desconectar" value="Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" />
        </form>
    </body>
</html><?php }
}
