<?php

$numeros = array();
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

$pares = array();
$impares = array();

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

echo "Números pares: ";
print_r($pares);
echo "<br>";
echo "Números impares: ";
print_r($impares);
?>