<!DOCTYPE html>
<html>
<head>
<title>Lista de Tareas</title>
</head>
<body>

<h2>Lista de Tareas Pendientes</h2>

<?php
$tareas = array("Estudiar para el examen de matemáticas", "Terminar el proyecto de historia", "Comprar víveres", "Llamar al técnico para arreglar la computadora", "Hacer ejercicio");

function mostrarTareas($tareas) {
foreach ($tareas as $key => $tarea) {
echo "<p>" . ($key + 1) . ". $tarea</p>";
}
}



mostrarTareas($tareas);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tarea_completada'])) {
$tareaCompletada = $_POST['tarea_completada'];
if (isset($tareas[$tareaCompletada])) {
unset($tareas[$tareaCompletada]);
echo "<h3>Lista de Tareas Actualizada:</h3>";
mostrarTareas($tareas);
}
}
?>
<hr>
<h3>Marcar Tarea como Completada</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<label for="tarea_completada">Seleccione el número de la tarea completada:</label><br>
<input type="number" id="tarea_completada" name="tarea_completada" min="1" max="<?php echo count($tareas); ?>" required><br><br>
<input type="submit" value="Marcar como Completada">

</form>
</body>
</html>