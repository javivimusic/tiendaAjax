<?php
/* Smarty version 3.1.33, created on 2019-02-16 04:48:38
  from '/var/www/tiendOpcionesCesta/templates/loging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c678816496989_28642255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe2a52a8162ef41409371766148bd54107a55e8' => 
    array (
      0 => '/var/www/tiendOpcionesCesta/templates/loging.tpl',
      1 => 1550286987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c678816496989_28642255 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        <h3><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</h3>
        <div id="login">
            <form action="login.php" method="POST">
                <fieldset>
                    <legend>Loging</legend>
                    <div class="campo">
                    <label>Usuario</label><br>
                    <input type="text" name="user"><br>
                    </div>
                    <div class="campo">
                    <label>Password</label><br>
                    <input type="text" name="pass"><br>
                    </div>
                    <div class="campo">
                    <input type="submit" name="submit" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html><?php }
}
