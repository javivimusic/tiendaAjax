<?php
/* Smarty version 3.1.33, created on 2019-02-16 16:37:46
  from '/var/www/tiendOpcionesCesta/templates/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c682e4ac25e92_69812040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb547efc5f4aa5343ae41d490e9b46d13b4a52a' => 
    array (
      0 => '/var/www/tiendOpcionesCesta/templates/cesta.tpl',
      1 => 1550331458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c682e4ac25e92_69812040 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="contendor">
            <div id="cesta">
                <div id="pagcesta">
                    <h3>Cesta</h3>
                    <?php if (empty($_smarty_tpl->tpl_vars['p']->value)) {?>
                        <p>Cesta vacía</p>
                        <form action="producto.php" method="POST">
                            <input type="submit" name="cestaAccion" value="pagar" disabled>
                            <input type="submit" name="cestaAccion" value="vaciar">
                        </form>
                    <?php } else { ?>
                        <hr />
                        <?php echo $_smarty_tpl->tpl_vars['p']->value;?>

                        <hr />
                        <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                        <hr />
                        <form action="producto.php" method="POST">
                            <input type="submit" name="cestaAccion" value="pagar">
                            <input type="submit" name="cestaAccion" value="vaciar">
                        </form>
                    <?php }?>
                    
                    
                </div>
            </div>
        </div>

    </body>
</html>
<?php }
}
