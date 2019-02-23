<?php
/* Smarty version 3.1.33, created on 2019-02-16 04:08:30
  from '/var/www/tiendCesta/templates/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c677eae344d96_54515621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7326065a045a6d37ceb2433f031f19c6e2c1f396' => 
    array (
      0 => '/var/www/tiendCesta/templates/cesta.tpl',
      1 => 1550286497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c677eae344d96_54515621 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php echo $_smarty_tpl->tpl_vars['p']->value;?>

                    <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                </div>
            </div>
        </div>

    </body>
</html>
<?php }
}
