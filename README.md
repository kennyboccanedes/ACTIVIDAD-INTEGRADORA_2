 Sistema Web de Inventario y Ventas

 Descripción

Este proyecto es un sistema web desarrollado en **PHP y MySQL** que permite gestionar productos mediante un sistema CRUD (Crear, Leer, Actualizar y Eliminar).

El sistema permite registrar productos, visualizar el inventario disponible, modificar información de productos y eliminarlos del sistema.

Este proyecto fue desarrollado como parte de una práctica académica aplicando buenas prácticas como:

* Programación estructurada
* Separación por capas (modelo, controlador, vista)
* Validación de datos
* Uso de base de datos MySQL
* Control de versiones con GitHub


 Funcionalidades

El sistema permite realizar las siguientes operaciones:

* Crear productos
* Listar productos
* Editar productos
* Eliminar productos

Cada producto contiene la siguiente información:

* ID
* Nombre del producto
* Precio
* Stock disponible



 Validaciones implementadas

Para garantizar la integridad de los datos se implementaron las siguientes validaciones:

* El **nombre del producto no puede estar vacío**
* El **precio debe ser mayor a 0**
* El **stock no puede ser negativo**
* Los campos numéricos solo aceptan números

Las validaciones se realizan tanto en el formulario como en el backend en PHP.



 Tecnologías utilizadas

* PHP
* MySQL
* HTML
* XAMPP
* GitHub



 Requisitos del sistema

Para ejecutar el proyecto se requiere:

* XAMPP o servidor Apache con PHP
* MySQL
* Navegador web



 Instalación del proyecto

1. Clonar el repositorio desde GitHub


git clone https://github.com/kennyboccanedes/ACTIVIDAD-INTEGRADORA_2


2. Copiar la carpeta del proyecto dentro de:

htdocs


3. Abrir **phpMyAdmin**

4. Crear una base de datos llamada:


inventario


5. Importar el archivo SQL ubicado en el proyecto:


mapa.sql


6. Ejecutar el sistema en el navegador:


http://localhost/integradora




 Base de Datos

El sistema utiliza una tabla llamada **productos** con la siguiente estructura:

| Campo  | Tipo    | Descripción                |
| ------ | ------- | -------------------------- |
| id     | INT     | Identificador del producto |
| nombre | VARCHAR | Nombre del producto        |
| precio | DECIMAL | Precio del producto        |
| stock  | INT     | Cantidad disponible        |



 Estructura del proyecto


integradora
│
├── index.php
├── config_database.php
├── modelos_Producto.php
├── Controlador_Producto_Controller.php
├── Vistas.php
├── views_productos_create.php
├── mapa.sql
└── README.md




 Autor

Proyecto desarrollado por:

**Kenny Boccanedes**



 Notas

Este proyecto fue desarrollado con fines educativos para demostrar la implementación de un sistema CRUD en PHP conectado a una base de datos MySQL.

