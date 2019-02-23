<?php
/* Smarty version 3.1.33, created on 2019-02-12 21:07:35
  from '/var/www/tiendProducto/templates/loging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6327870ea858_47384464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe54321332ff4bd77b4366c0b4cafe02eb704144' => 
    array (
      0 => '/var/www/tiendProducto/templates/loging.tpl',
      1 => 1550000247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6327870ea858_47384464 (Smarty_Internal_Template $_smarty_tpl) {
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
