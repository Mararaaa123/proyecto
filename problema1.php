<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 1</title>
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="content">
        <h1>Problema 1: Calcular Precio de Entrada</h1>

        <form action="" method="post">
            <label for="edad">Edad del cliente:</label>
            <input type="number" id="edad" name="edad" required>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $edad = $_POST["edad"];
            $precio = 0;

            if ($edad < 4) {
                $precio = 0;
            } elseif ($edad >= 4 && $edad <= 18) {
                $precio = 5000;
            } else {
                $precio = 10000;
            }

            echo "<p>El precio de entrada es: $precio pesos.</p>";
        }
        ?>
    </div>

</body>
</html>
