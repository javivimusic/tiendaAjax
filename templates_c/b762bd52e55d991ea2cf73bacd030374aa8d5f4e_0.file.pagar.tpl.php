<?php
/* Smarty version 3.1.33, created on 2019-02-18 11:04:14
  from '/var/www/tiendOpcionesCesta/templates/pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6a831ebba664_13568614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b762bd52e55d991ea2cf73bacd030374aa8d5f4e' => 
    array (
      0 => '/var/www/tiendOpcionesCesta/templates/pagar.tpl',
      1 => 1550484252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a831ebba664_13568614 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>Factura</h1>
        <?php echo $_smarty_tpl->tpl_vars['factura']->value;?>

        
        <div id="pie">
        <form action="logoff.php" method="post">
            <input type="submit" name="desconectar" value="Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" />
        </form>
        </div>
    </body>
</html>
<?php }
}
