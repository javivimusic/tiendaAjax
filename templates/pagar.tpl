<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" type="text/css" href="tabla.css">
    </head>
    <body>
        <h1>Factura</h1>
        {$factura}
        <table>
            <tr><th>TOTAL</th><th>IVA</th><th>TOTAL IVA</th></tr>
            <tr><td>{$total}</td><td>{$total*0.21}</td><td>{$total+($total*0.21)}</td></tr>
        </table>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
               <!--
                Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                -->
        <input name="business" type="hidden" value="javivi_music_zgz-facilitator@hotmail.com" />
 
        <input name="shopping_url" type="hidden" value="http://localhost/tiendPDF/pagar.php" />
        <input name="currency_code" type="hidden" value="EUR" />
        <input name="return" type="hidden" value="http://localhost/tiendPDF/pagar.php" />
        <input name="notify_url" type="hidden" value="http://localhost/tiendPDF/pagar.php" />
        <input name="rm" type="hidden" value="1" />
        <input name="upload" type="hidden" value="1" />
        {$n=1}
   {foreach from=$lista item=producto}
        
        <input name="item_number_{$n}" type="hidden" value="{$producto['cod']}" />
        <input name="item_name_{$n}" type="hidden" value="{$producto['nombre']}" />
        <input name="amount_{$n}" type="hidden" value="{$producto['precio']}" />
        <input name="quantity_{$n++}" type="hidden" value="{$producto['cantidad']}" />
   {/foreach}
        <input name="item_number_{$n}" type="hidden" value="IVA" />
        <input name="item_name_{$n}" type="hidden" value="IVA 21%" />
        <input name="amount_{$n}" type="hidden" value="{$total*0.21}" />
        <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
        <div id="pie">
        <form action="pago_realizado.php" method="post">
            <input type="submit" name="pdf" value="Mostrar PDF" />
        </form>
        <form action="logoff.php" method="post">
            <input type="submit" name="desconectar" value="Desconectar usuario {$user}" />
        </form>
        </div>
    </body>
</html>
