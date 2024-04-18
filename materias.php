<!DOCTYPE html>
<html>
<head>
<title>Registro de Notas Escolares</title>
</head>
<body>
<h2>Registro de Notas Escolares</h2>

<?php
$notas = array(
"Matemáticas" => array("Juan" => 85, "lita" => 92, "lizzie" => 78),
"Ciencias" => array("Juan" => 88, "lita" => 90, "lizzie" => 85),
"Literatura" => array("juan" => 80, "lita" => 87, "lizzie" => 82)
);


function mostrarNotas($notas) {
foreach ($notas as $asignatura => $estudiantes) {
echo "<h3>$asignatura:</h3>";
foreach ($estudiantes as $estudiante => $nota) {
echo "<p>$estudiante: $nota</p>";
}
}
}
mostrarNotas($notas);
?>
</body>
</html>