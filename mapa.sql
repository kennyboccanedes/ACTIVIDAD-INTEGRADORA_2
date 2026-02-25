CREATE DATABASE IF NOT EXISTS inventario_db;
USE inventario_db;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Datos de prueba (opcional)
INSERT INTO productos (nombre, descripcion, precio, stock) VALUES
('Laptop Gamer', 'Laptop con RTX 3060', 1200.00, 10),
('Mouse Inalámbrico', 'Mouse ergonómico', 25.50, 50),
('Teclado Mecánico', 'Switch rojo', 85.00, 30);