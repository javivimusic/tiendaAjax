<?php
/* Smarty version 3.1.33, created on 2019-02-22 00:25:27
  from '/var/www/tiendPDF/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6f3367ab1d51_20119904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eeb6db79e430be900c04087ae80c0c6db3420ec' => 
    array (
      0 => '/var/www/tiendPDF/templates/producto.tpl',
      1 => 1550719220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c6f3367ab1d51_20119904 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
