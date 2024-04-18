<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro de Usuarios</title>
</head>
<body>
<nav>
      <ul class="menu">
        <li>
          <a href="indexquiz.html"> Ir pagina Principal </a>
        </li>
      </ul>
    </nav>
    <h1>Registro  Usuarios</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_usuario = $_POST["nombre_usuario"];
        $correo_electronico = $_POST["correo_electronico"];
        $contrasena = $_POST["contrasena"];

        echo "<p>Usuario registrado:</p>";
        echo "<p>Nombre de usuario: $nombre_usuario</p>";
        echo "<p>Correo electrónico: $correo_electronico</p>";

        $usuario_registrado = array(
            'nombre_usuario' => $nombre_usuario,
            'correo_electronico' => $correo_electronico,
            'contrasena' => $contrasena
        );

        echo "<h2>Lista de Usuarios Registrados</h2>";
        echo "<ul>";
        echo "<li>$nombre_usuario - $correo_electronico</li>";
        echo "</ul>";
    }
    ?>

    <h2>Registrarse</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre_usuario">Nombre de usuario:</label><br>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required><br><br>
        <label for="correo_electronico">Correo electrónico:</label><br>
        <input type="email" id="correo_electronico" name="correo_electronico" required><br><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>