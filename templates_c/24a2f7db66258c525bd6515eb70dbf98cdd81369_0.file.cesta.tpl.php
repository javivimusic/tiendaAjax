<?php
/* Smarty version 3.1.33, created on 2019-02-23 22:27:34
  from '/var/www/tiendAjax/templates/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c71bac628f771_60278117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24a2f7db66258c525bd6515eb70dbf98cdd81369' => 
    array (
      0 => '/var/www/tiendAjax/templates/cesta.tpl',
      1 => 1550955689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c71bac628f771_60278117 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div id="contendor">
            <div id="cesta">
                <div id="pagcesta">
                    <h3>Cesta</h3>
                        <p>Cesta vacía</p>
                        <hr />
                        <span id="cesta1"></span>
                        <hr />
                        <span id="total"></span>
                        <hr />
                        <form action="producto.php" method="POST">
                            <input type="submit" name="cestaAccion" value="pagar">
                            <input type="submit" name="cestaAccion" value="vaciar">
                        </form>
                </div>
            </div>
        </div>

<?php }
}
