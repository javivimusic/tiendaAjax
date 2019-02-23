<?php

/**
 * Description of BD
 *
 * @author alumno
 */
class BD {

    //$conexion baldra null o un objeto de mysql
    private static $conexion;
    private static $error = null;
    private static $h = '172.17.0.2';
    private static $u = 'root';
    private static $p = 'root';
    private static $db = 'dwes';

//    public function __construct($h='172.17.0.2', $u='root', $p='root', $db='dwes') {
//        BD::$error = null;
//        BD::$h = $h;
//        BD::$u = $u;
//        BD::$p = $p;
//        BD::$db = $db;
//
//
//    }

    public static function conectar() {
        try {
            //establecemos la conexión y en el que caso de que de error
            //lo guardamos en el atributo $error
            $dsn = "mysql:host=" . BD::$h . ";dbname=" . BD::$db . "";
            $atributos = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => true, PDO::ERRMODE_EXCEPTION => true];
            BD::$conexion = new PDO($dsn, BD::$u, BD::$p, $atributos);
        } catch (PDOException $ex) {
            BD::$error = "Error conectado a la base de datos " . $ex->getMessage();
        }
    }

    //funcion con la que devolvemos el error
    public static function get_error() {
        return BD::$error;
    }

    /**
     *
     * @param string $consulta
     * @return array
     * realizamos una cosulta de tipo selec normal
     * devolvemos un array con las filas encontradas
     */
    public static function select(string $consulta) {
        if (!BD::conectado()) {
            BD::conectar();
        }
        $fila = [];
        $rslt = BD::$conexion->query($consulta);
        while ($f = $rslt->fetch(PDO::FETCH_NUM)) {
            $fila[] = $f;
        }
        return $fila;
    }

    /**
     *
     * @param type $user
     * @param type $pass
     * @return bool
     * hacemos una busqueda del usuairo
     * y si las contraseñas coinciden devuelve true, sino false
     */
    public static function usuario($user, $pass) {
        $sentencia = "select password from usuarios where nombre = '" . $user . "'";

        $dato = BD::select($sentencia);
        foreach ($dato as $info)
            if ($info[0] == $pass) {
                return true;
            }
        return false;
    }

    /**
     *
     * @return boolean si estoy o no conectado a la base de datos
     *
     */
    public static function conectado() {
        if (is_null(BD::$conexion))
            return true;
        return false;
    }

    public static function obtenerProductos($lista) {
        $datos = [];
        $info = "";
        $sentencia = "select cod, nombre_corto, PVP, familia from producto";
        $datos = BD::select($sentencia);
        return $datos;
    }

    /**
     * funcion que nos pemite cerrar la conexion
     */
    public static function cerrarCon() {
        if (is_null(BD::

                        $error))
            BD::$conexion->close();
    }

}

?>