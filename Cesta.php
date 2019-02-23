<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cesta
 *
 * @author alumno
 */
class Cesta {

    /**
     *
     * @param array $lista
     * @return string
     * devolvemos un string con los datos de cesta
     */
    public static function mostrar($lista) {
        $productosCesta = "";
        foreach ($lista as $producto) {
            $productosCesta .= "<form action='producto.php' method='POST'>"
                    . "<span class='cantidad'>" . $producto['cantidad'] . "</span>"
                    . "<span class='codigo'>" . $producto['cod'] . "</span>"
                    . "<span class='precio'>" . $producto['precio'] . "€</span>"
                    . "<input type='hidden' name='producto' value='" . $producto['cod'] . "'>"
                    . "<input type='submit' onclick=borrar('$producto[0]') name='cestaAccion' value='borrar'></form>";
        }

        return $productosCesta;
    }

    /**
     *
     * @param array $lista
     * @return string
     * mostramos el total de la cesta
     */
    public static function mostrarPrecio($total): string {

        return $precio = "<span class='coste'>Total: $total€</span>";
    }

    public static function total($lista) {
        $total = 0;
        foreach ($lista as $prod) {
            $total += ($prod['precio'] * $prod['cantidad']);
        }
        return $total;
    }

    /**
     *
     * @param string $cod
     * @param array $lista
     * @param int $cont
     * @return type
     * evaluamos el resultado de comprobar()
     * si es falso añadimos el producto
     * sino se le suma uno a la cantidad de dicho producto
     */
    public static function add($cod, $lista, $cont) {
        $num = Cesta::comprobar($cod, $lista);

        if ($num !== false) {
            $lista[$num]['cantidad'] += 1;
        } else {
            $sentencia = "select PVP, nombre_corto from producto where cod= $cod";
            var_dump($sentencia);
            $producto = BD::select($sentencia);
            
            $cantidad = 1;
            $listado = ['cod' => $cod, 'precio' => $producto[0][0], 'nombre' => $producto[0][1], 'cantidad' => $cantidad];
            $lista [$cont] = $listado;
            $cont++;
            $_SESSION['cont'] = $cont;
        }
        return $lista;
    }

    /**
     *
     * @param string $cod
     * @param array $lista
     * @return array
     * quitamos el producto seleccionado de la cesta
     * si hay mas de uno, se resta uno a la cantidad
     * si solo hay uno se elimina
     */
    public static function quitar($cod, $lista): array {


        $num = Cesta::comprobar($cod, $lista);
        if ($lista[$num]['cantidad'] > 1) {
            $lista[$num]['cantidad'] -= 1;
        } else {
            unset($lista[$num]);
            $lista = array_values($lista);
        }
        return $lista;
    }

    /**
     *
     * @param string $cod
     * @param array $lista
     * @return boolean|int
     * comprobamos si existe el producto
     * si es asi, devolvemos la posición del producto en la cesta
     * sino false
     */
    public static function comprobar($cod, $lista) {
        $num = 0;
        foreach ($lista as $prod) {
            if ($prod['cod'] == $cod) {
                return $num;
            } else {
                $num++;
            }
        }
        return false;
    }

    /**
     *
     * @param array $lista
     * @param float $total
     * @return type
     * nos muestra lo productos con sus cantidades y el precio de cada producto
     * al final nos muestra el precio total de la compra.
     */
    public static function pagar($lista) {
        $factura = "<table><tr><th>Codigo</th><th>Nombre</th><th>Cantidad</th><th>PVP</th></tr>";
        foreach ($lista as $producto) {
            $factura .= "<tr><td>" . $producto['cod'] . "</td>"
                    . "<td>" . $producto['nombre'] . "</td>"
                    . "<td>" . $producto['cantidad'] . "</td>"
                    . "<td>" . $producto['precio'] . "€</td></tr>";
        }
        $factura .= "</table>";
        return $factura;
    }

}
