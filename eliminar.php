<?php
require_once "../config/conexion.php";
$id = $_GET['id'];
$conexion->query("DELETE FROM productos WHERE id=$id");
header("Location: listar.php");
?>