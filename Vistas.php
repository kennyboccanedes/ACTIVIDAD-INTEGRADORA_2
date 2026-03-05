<h2>Lista de Productos</h2>

<a href="index.php?action=crear">Nuevo Producto</a>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>
</tr>

<?php while($p = $productos->fetch_assoc()){ ?>

<tr>

<td><?php echo $p['id']; ?></td>
<td><?php echo $p['nombre']; ?></td>
<td><?php echo $p['precio']; ?></td>
<td><?php echo $p['stock']; ?></td>

<td>

<a href="index.php?action=editar&id=<?php echo $p['id']; ?>">Editar</a>

<a href="index.php?action=eliminar&id=<?php echo $p['id']; ?>">Eliminar</a>

</td>

</tr>

<?php } ?>

</table>
