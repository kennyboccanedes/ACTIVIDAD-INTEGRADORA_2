<?php
require_once "../config/conexion.php";
$resultado = $conexion->query("SELECT * FROM productos");
?>
<a href="crear.php">Nuevo</a>
<table border="1">
<tr><th>Nombre</th><th>Stock</th><th>Precio</th><th>Acciones</th></tr>
<?php while ($p = $resultado->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($p['nombre']) ?></td>
<td><?= $p['stock'] ?></td>
<td><?= $p['precio'] ?></td>
<td>
<a href="editar.php?id=<?= $p['id'] ?>">Editar</a>
<a href="eliminar.php?id=<?= $p['id'] ?>">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</table>