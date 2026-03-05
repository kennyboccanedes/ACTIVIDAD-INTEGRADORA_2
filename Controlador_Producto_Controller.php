<?php

require_once "modelos_Producto.php";

class ControladorProductoController{

    private $producto;

    public function __construct(){
        $this->producto = new Producto();
    }

    public function listar(){

        $productos = $this->producto->listar();

        include "Vistas.php";
    }

    public function crear(){

        include "views_productos_create.php";
    }

    public function guardar(){

        $nombre = trim($_POST['nombre']);
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        if(empty($nombre)){
            die("Nombre obligatorio");
        }

        if(!is_numeric($precio) || $precio <= 0){
            die("Precio inválido");
        }

        if(!is_numeric($stock) || $stock < 0){
            die("Stock inválido");
        }

        $this->producto->crear($nombre,$precio,$stock);

        header("Location:index.php");
    }

    public function editar($id){

        $producto = $this->producto->obtener($id);

        include "views_productos_create.php";
    }

    public function actualizar(){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $this->producto->actualizar($id,$nombre,$precio,$stock);

        header("Location:index.php");
    }

    public function eliminar($id){

        $this->producto->eliminar($id);

        header("Location:index.php");
    }
}
?>
