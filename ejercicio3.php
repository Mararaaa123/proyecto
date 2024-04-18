<!DOCTYPE html>
<html>
<head>
<title>Calculadora de Descuento</title>
</head>
<body>
<h1>Calculadora de Descuento</h1>
<form method="post" action="">
<label for="monto_total">Monto Total de la Compra:</label>
<input type="number" step="0.01" name="monto_total" id="monto_total" required>
<input type="submit" value="Calcular Descuento">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$monto_total = $_POST["monto_total"];
$descuento = 0;
$porcentaje_descuento = 0;

if ($monto_total >= 100) {
$descuento = $monto_total * 0.10;
$porcentaje_descuento = 10;

} elseif ($monto_total >= 50 && $monto_total < 100) {
$descuento = $monto_total * 0.05;
$porcentaje_descuento = 5;
}
$monto_final = $monto_total - $descuento;
echo "Monto fina: $" . $monto_final;
}
?>
</body>
</html>