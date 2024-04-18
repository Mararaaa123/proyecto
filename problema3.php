<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Problema 3</title>
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="content">
        <h1>Problema 3: Tabla de Multiplicar</h1>

        <form action="" method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="number" id="numero" name="numero" required>
            <input type="submit" value="Mostrar Tabla">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            echo "<h2>Tabla de multiplicar del $numero:</h2>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>

</body>
</html>
