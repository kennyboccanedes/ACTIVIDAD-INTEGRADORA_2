<?php
require_once "../config/conexion.php";
if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    if ($nombre == "" || $stock < 0 || $precio <= 0) {
        echo "Datos inválidos";
        exit;
    }

    $conexion->query("INSERT INTO productos (nombre, stock, precio) VALUES ('$nombre', $stock, $precio)");
    header("Location: listar.php");
}
?>
<form method="POST">
<input name="nombre" required placeholder="Nombre">
<input type="number" name="stock" min="0" required>
<input type="number" name="precio" step="0.01" required>
<button>Guardar</button>
</form>