<?php

require_once "config_database.php";
require_once "modelos_Producto.php";
require_once "Controlador_Producto_Controller.php";

$controller = new ControladorProductoController();

$action = $_GET['action'] ?? 'listar';

switch($action){

    case "crear":
        $controller->crear();
    break;

    case "guardar":
        $controller->guardar();
    break;

    case "editar":
        $controller->editar($_GET['id']);
    break;

    case "actualizar":
        $controller->actualizar();
    break;

    case "eliminar":
        $controller->eliminar($_GET['id']);
    break;

    default:
        $controller->listar();
    break;
}
?>
