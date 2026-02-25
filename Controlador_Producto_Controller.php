<?php
// controllers/ProductoController.php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    private $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    // Listar productos
    public function index() {
        $stmt = $this->producto->read();
        include __DIR__ . '/../views/productos/index.php';
    }

    // Mostrar formulario de creación
    public function create() {
        include __DIR__ . '/../views/productos/create.php';
    }

    // Guardar nuevo producto
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errores = [];

            // Validaciones
            $nombre = trim($_POST['nombre'] ?? '');
            if (empty($nombre)) {
                $errores[] = "El nombre no puede estar vacío.";
            }

            $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);
            if ($precio === false || $precio <= 0) {
                $errores[] = "El precio debe ser un número mayor que 0.";
            }

            $stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);
            if ($stock === false || $stock < 0) {
                $errores[] = "El stock debe ser un número entero mayor o igual a 0.";
            }

            if (empty($errores)) {
                $this->producto->nombre = $nombre;
                $this->producto->descripcion = trim($_POST['descripcion'] ?? '');
                $this->producto->precio = $precio;
                $this->producto->stock = $stock;

                if ($this->producto->create()) {
                    header("Location: index.php?action=index&mensaje=Producto creado con éxito");
                    exit;
                } else {
                    $errores[] = "Error al guardar el producto en la base de datos.";
                }
            }

            // Si hay errores, volver al formulario con los datos y mensajes
            include __DIR__ . '/../views/productos/create.php';
        }
    }

    // Mostrar formulario de edición
    public function edit() {
        if (isset($_GET['id'])) {
            $this->producto->id = $_GET['id'];
            if ($this->producto->readOne()) {
                include __DIR__ . '/../views/productos/edit.php';
            } else {
                header("Location: index.php?action=index&error=Producto no encontrado");
            }
        }
    }

    // Actualizar producto
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errores = [];

            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            if (!$id) {
                $errores[] = "ID inválido.";
            }

            $nombre = trim($_POST['nombre'] ?? '');
            if (empty($nombre)) {
                $errores[] = "El nombre no puede estar vacío.";
            }

            $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);
            if ($precio === false || $precio <= 0) {
                $errores[] = "El precio debe ser un número mayor que 0.";
            }

            $stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);
            if ($stock === false || $stock < 0) {
                $errores[] = "El stock debe ser un número entero mayor o igual a 0.";
            }

            if (empty($errores)) {
                $this->producto->id = $id;
                $this->producto->nombre = $nombre;
                $this->producto->descripcion = trim($_POST['descripcion'] ?? '');
                $this->producto->precio = $precio;
                $this->producto->stock = $stock;

                if ($this->producto->update()) {
                    header("Location: index.php?action=index&mensaje=Producto actualizado con éxito");
                    exit;
                } else {
                    $errores[] = "Error al actualizar el producto.";
                }
            }

            // Recargar el producto para mostrarlo en el formulario
            $this->producto->id = $id;
            $this->producto->readOne();
            include __DIR__ . '/../views/productos/edit.php';
        }
    }

    // Eliminar producto
    public function delete() {
        if (isset($_GET['id'])) {
            $this->producto->id = $_GET['id'];
            if ($this->producto->delete()) {
                header("Location: index.php?action=index&mensaje=Producto eliminado");
            } else {
                header("Location: index.php?action=index&error=No se pudo eliminar");
            }
        }
    }
}
?>