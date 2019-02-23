<?php
/* Smarty version 3.1.33, created on 2019-02-16 05:36:06
  from '/var/www/tiendOpcionesCesta/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c679336a79c47_63329825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '123b04aa30337935d39036fb366cc7c8517c9522' => 
    array (
      0 => '/var/www/tiendOpcionesCesta/templates/producto.tpl',
      1 => 1550291762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c679336a79c47_63329825 (Smarty_Internal_Template $_smarty_tpl) {
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
