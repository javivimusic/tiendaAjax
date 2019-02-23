<?php
/* Smarty version 3.1.33, created on 2019-02-24 00:04:54
  from '/var/www/tiendAjax/templates/producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c71d196ba01e0_52616451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb845cfe517cd47ed846e1fac6b6aa39fc8aeb7' => 
    array (
      0 => '/var/www/tiendAjax/templates/producto.tpl',
      1 => 1550963088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
  ),
),false)) {
function content_5c71d196ba01e0_52616451 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
        <?php $_smarty_tpl->_assignInScope('includeFile', "ajax.php");?>
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

        <?php echo '<script'; ?>
>
            function add(cod){
                alert(cod.value);
                try{
                    JaxonactualizarCesta.add(cod.value);
                    alert("ok");
                }catch(err){
                    alert(err);
                }
                
                return false;
            }
        <?php echo '</script'; ?>
>
            
            
    </head>
    <body class="pagproductos">
        <div id="encabezado">
            <h1>Listado de procutos</h1>
        </div>
        
        <div id="contenedor">
            <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <span id="cesta1"></span>
            <div id="cesta"></div>
        </div>
        <div id="contenedor">
            <div id="productos">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filas']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                    <form action='producto.php' method='post' >
                        <input type='hidden' name='cod' id='<?php echo $_smarty_tpl->tpl_vars['producto']->value[0];?>
' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value[0];?>
' />
                        <button onclick="add(<?php echo $_smarty_tpl->tpl_vars['producto']->value[0];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value[0];?>
">  Add (ajax)</button>
                        <?php echo $_smarty_tpl->tpl_vars['producto']->value[1];?>
 : <?php echo $_smarty_tpl->tpl_vars['producto']->value[2];?>
 euros.</form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
