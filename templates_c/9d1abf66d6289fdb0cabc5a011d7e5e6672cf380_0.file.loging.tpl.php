<?php
/* Smarty version 3.1.33, created on 2019-02-12 21:49:00
  from '/var/www/tiendDesconexion/templates/loging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c63313c7396b6_97908691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1abf66d6289fdb0cabc5a011d7e5e6672cf380' => 
    array (
      0 => '/var/www/tiendDesconexion/templates/loging.tpl',
      1 => 1550002952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c63313c7396b6_97908691 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        <h3><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</h3>
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Loging</legend>
                <spam>Usuario</spam><br>
                <input type="text" name="user"><br>
                <spam>Password</spam><br>
                <input type="text" name="pass"><br>
                <input type="submit" name="submit" value="Enviar">
            </fieldset>
        </form>
    </body>
</html><?php }
}
