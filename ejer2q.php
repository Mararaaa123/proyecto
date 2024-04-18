<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edades</title>
</head>
<body>
<nav>
      <ul class="menu">
        <li>
          <a href="indexquiz.html"> Ir pagina Principal </a>
        </li>
      </ul>
    </nav> 
    <h1>Edades</h1>
</body>
</html>

<?php
$edades = array(25, 30, 35, 40, 45);
$suma_edades = array_sum($edades);
$cantidad_personas = count($edades);
if ($cantidad_personas > 0) {
    $promedio_edades = $suma_edades / $cantidad_personas;
} else {
    $promedio_edades = 0;
}

echo "El promedio de edad de las personas es: $promedio_edades";
?>
