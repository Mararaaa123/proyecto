<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punto 2</title>
</head>

<body>
<center>
    <?php
for ($i = 0; $i < 5; $i++) { $numero[] = rand(0,10);
}
foreach ($numero as $elemento) {
$cuadrado[] = $elemento * $elemento;
$cubo[] = $elemento * $elemento * $elemento;
}
?>

<table>
<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>

<?php
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>".$numero[$i]."</td>";
    echo "<td>".$cuadrado[$i]."</td>";
    echo "<td>".$cubo[$i]."</td></tr>";
}

?>
</center>
</table>
</body>
</html>

