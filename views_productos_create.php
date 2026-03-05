<h2>Crear Producto</h2>

<form method="POST" action="index.php?action=guardar">

Nombre:
<input type="text" name="nombre" required>

Precio:
<input type="number" step="0.01" name="precio" min="1" required>

Stock:
<input type="number" name="stock" min="0" required>

<button type="submit">Guardar</button>

</form>
