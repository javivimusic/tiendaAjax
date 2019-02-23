<?php
/* Smarty version 3.1.33, created on 2019-02-23 09:48:09
  from '/var/www/tiendAjax/templates/loging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7108c930f8d1_09150117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9809810f7651acec553ad3ae47f42d93813620c9' => 
    array (
      0 => '/var/www/tiendAjax/templates/loging.tpl',
      1 => 1550803332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7108c930f8d1_09150117 (Smarty_Internal_Template $_smarty_tpl) {
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
