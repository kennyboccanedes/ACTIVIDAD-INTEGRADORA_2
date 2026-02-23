<?php
require_once "../config/conexion.php";
$id = $_GET['id'];
$producto = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    if ($nombre == "" || $stock < 0 || $precio <= 0) {
        die("Datos inválidos");
    }

    $conexion->query("UPDATE productos SET nombre='$nombre', stock=$stock, precio=$precio WHERE id=$id");
    header("Location: listar.php");
}
?>
<form method="POST">
<input name="nombre" value="<?= $producto['nombre'] ?>" required>
<input type="number" name="stock" min="0" value="<?= $producto['stock'] ?>" required>
<input type="number" name="precio" step="0.01" value="<?= $producto['precio'] ?>" required>
<button>Actualizar</button>
</form>