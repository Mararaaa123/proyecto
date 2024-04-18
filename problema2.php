<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 2</title>
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="content">
        <h1>Problema 2: Descuento por Puntos</h1>

        <form action="" method="post">
            <label for="puntos">Puntos acumulados:</label>
            <input type="number" id="puntos" name="puntos" required>
            <input type="submit" value="Calcular Descuento">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $puntos = $_POST["puntos"];
            $descuento = 0;

            if ($puntos < 100) {
                $descuento = 10;
            } elseif ($puntos >= 100 && $puntos < 150) {
                $descuento = 12;
            } elseif ($puntos == 150) {
                $descuento = 15;
            } else {
                $descuento = 20;
            }

            echo "<p>El descuento aplicado es: $descuento%.</p>";
        }
        ?>
    </div>

</body>
</html>
