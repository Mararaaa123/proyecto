<?php

function paroimpar ($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}

$resultado = paroimpar(7);

echo "el resultado es: ", $resultado;

?>

