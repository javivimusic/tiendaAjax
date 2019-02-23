<?php
/* Smarty version 3.1.33, created on 2019-02-21 10:35:58
  from '/var/www/tiendPayPal/templates/pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6e70fe9eede1_16716051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d16c8ec04ee10f162c77e4b5da71548b493c697' => 
    array (
      0 => '/var/www/tiendPayPal/templates/pagar.tpl',
      1 => 1550741748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6e70fe9eede1_16716051 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>Factura</h1>
        <?php echo $_smarty_tpl->tpl_vars['factura']->value;?>

        <table>
            <tr><th>TOTAL</th><th>IVA</th><th>TOTAL IVA</th></tr>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['total']->value*0.21;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['total']->value*0.21);?>
</td></tr>
        </table>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
               <!--
                Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                -->
        <input name="business" type="hidden" value="javivi_music_zgz-facilitator@hotmail.com" />
 
        <input name="shopping_url" type="hidden" value="http://tienda/pagar.php" />
        <input name="currency_code" type="hidden" value="EUR" />
        <input name="return" type="hidden" value="http://tienda/pago_realizado.php" />
        <input name="notify_url" type="hidden" value="http://tienda/pagar.php" />
        <input name="rm" type="hidden" value="1" />
        <input name="upload" type="hidden" value="1" />
        <?php $_smarty_tpl->_assignInScope('n', 1);?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
        
        <input name="item_number_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cod'];?>
" />
        <input name="item_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
" />
        <input name="amount_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
" />
        <input name="quantity_<?php echo $_smarty_tpl->tpl_vars['n']->value++;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cantidad'];?>
" />
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
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
