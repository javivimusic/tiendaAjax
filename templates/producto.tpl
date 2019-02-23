<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
        {$includeFile = "ajax.php"}
        {$css}
        {$js}
        {$script}
        <script>
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
        </script>
            
            
    </head>
    <body class="pagproductos">
        <div id="encabezado">
            <h1>Listado de procutos</h1>
        </div>
        
        <div id="contenedor">
            {include file="cesta.tpl"}
            <span id="cesta1"></span>
            <div id="cesta"></div>
        </div>
        <div id="contenedor">
            <div id="productos">
                {foreach from=$filas item=producto}
                    <form action='producto.php' method='post' >
                        <input type='hidden' name='cod' id='{$producto[0]}' value='{$producto[0]}' />
                        <button onclick="add({$producto[0]})" value="{$producto[0]}">  Add (ajax)</button>
                        {$producto[1]} : {$producto[2]} euros.</form>
                {/foreach}
            </div>
        </div>
        <div id="pie">
            <form action="logoff.php" method="post">
                <input type="submit" name="desconectar" value="Desconectar usuario {$user}" />
            </form>
        </div>
    </body>
</html>