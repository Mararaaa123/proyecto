<!DOCTYPE html>
<html>
<head>
<title>Gestión de Productos</title>
</head>
<body>
<h2>Supermercado </h2>
<?php

$inventario = array(
array("nombre" => "fresas", "precio" => 2.50, "stock" => 50),
array("nombre" => "leche", "precio" => 1.20, "stock" => 100),
array("nombre" => "tomate", "precio" => 3.00, "stock" => 30),
array("nombre" => "Arroz", "precio" => 1.80, "stock" => 80),
array("nombre" => "uvas", "precio" => 0.80, "stock" => 60)

);

function mostrarProductos($inventario) {
echo "<h3>Lista de Productos Disponibles:</h3>";
foreach ($inventario as $producto) {
echo "<p>Nombre: " . $producto['nombre'] . " | Precio: $" . $producto['precio'] . " | Stock: " . $producto['stock'] . "</p>";

}

}

mostrarProductos($inventario);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['stock'])) {


$nuevoProducto = array(

"nombre" => $_POST['nombre'],

"precio" => floatval($_POST['precio']), 

"stock" => intval($_POST['stock']) 

);


$inventario[] = $nuevoProducto;


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