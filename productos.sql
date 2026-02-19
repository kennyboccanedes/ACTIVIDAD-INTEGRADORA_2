CREATE DATABASE inventario;
USE inventario;
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    stock INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);
INSERT INTO productos (nombre, stock, precio) VALUES ('Producto ejemplo', 5, 10.00);