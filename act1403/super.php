<!DOCTYPE html>
<html>
<head>
<title>Gestión de Productos</title>
</head>
<body>
<h2>Supermercado XYZ - Gestión de Productos</h2>
<?php

$inventario = array(
array("nombre" => "Leche", "precio" => 2.50, "stock" => 50),
array("nombre" => "Pan", "precio" => 1.20, "stock" => 100),
array("nombre" => "Huevos", "precio" => 3.00, "stock" => 30),
array("nombre" => "Arroz", "precio" => 1.80, "stock" => 80),
array("nombre" => "Manzanas", "precio" => 0.80, "stock" => 60)

);

function mostrarProductos($inventario) {
echo "<h3>Lista de Productos Disponibles:</h3>";
foreach ($inventario as $producto) {
echo "<p>Nombre: " . $producto['nombre'] . " | Precio: $" . $producto['precio'] . " | Stock: " . $producto['stock'] . "</p>";

}

}

// Mostrar la lista de productos disponibles

mostrarProductos($inventario);

// Verificar si se envió el formulario para agregar un nuevo producto

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['stock'])) {

// Obtener los datos del formulario

$nuevoProducto = array(

"nombre" => $_POST['nombre'],

"precio" => floatval($_POST['precio']), // Convertir el precio a float

"stock" => intval($_POST['stock']) // Convertir el stock a entero

);

// Agregar el nuevo producto al inventario

$inventario[] = $nuevoProducto;

// Mostrar la lista de productos actualizada

mostrarProductos($inventario);

}

?>

<hr>

<h3>Agregar Nuevo Producto</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<label for="nombre">Nombre del Producto:</label><br>

<input type="text" id="nombre" name="nombre" required><br>

<label for="precio">Precio:</label><br>

<input type="number" id="precio" name="precio" step="0.01" min="0" required><br>

<label for="stock">Stock:</label><br>

<input type="number" id="stock" name="stock" min="0" required><br><br>

<input type="submit" value="Agregar Producto">

</form>

</body>

</html>