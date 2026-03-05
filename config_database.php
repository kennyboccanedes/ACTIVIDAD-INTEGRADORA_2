<?php

class Database{

    public static function conectar(){

        $conexion = new mysqli(
            "localhost",
            "root",
            "",
            "inventario"
        );

        if($conexion->connect_error){
            die("Error de conexión");
        }

        return $conexion;
    }
}
?>
