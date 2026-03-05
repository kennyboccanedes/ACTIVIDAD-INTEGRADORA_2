<?php

require_once "config_database.php";

class Producto{

    private $db;

    public function __construct(){
        $this->db = Database::conectar();
    }

    public function listar(){
        return $this->db->query("SELECT * FROM productos");
    }

    public function crear($nombre,$precio,$stock){

        $sql = "INSERT INTO productos(nombre,precio,stock)
                VALUES('$nombre','$precio','$stock')";

        return $this->db->query($sql);
    }

    public function obtener($id){

        $sql = "SELECT * FROM productos WHERE id=$id";
        return $this->db->query($sql)->fetch_assoc();
    }

    public function actualizar($id,$nombre,$precio,$stock){

        $sql = "UPDATE productos
                SET nombre='$nombre',
                    precio='$precio',
                    stock='$stock'
                WHERE id=$id";

        return $this->db->query($sql);
    }

    public function eliminar($id){

        $sql = "DELETE FROM productos WHERE id=$id";
        return $this->db->query($sql);
    }
}
?>
