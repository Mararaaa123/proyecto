<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>


    <?php

    $ciudadesColombia = array( 
    array("cali", "valle del cauca"),
    array("Medellín", "Antioquia"), 
    array("manizales", "caldas") 
    );

echo "<h2>Capitales de Colombia</h2>";
echo "<p>Número de ciudades: " .count($ciudadesColombia). "</p>"; 
echo "<table border='1'>";
echo "<tr><th>Ciudad</th><th>Departamento</th></tr>";
foreach ($ciudadesColombia as $ciudad) {echo "<tr>";
    foreach ($ciudad as $detale) 
    {    
        echo "<td>$detale</td>"; 
    }
    echo "</tr>";
}
echo "</table>";?>
</body>
</html>