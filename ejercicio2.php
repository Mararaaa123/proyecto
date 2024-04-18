<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>determinar si el punto es positivo o negativo</title>
</head>
<body>
    <form method="post">
        <label for="numero">ingrese un numero: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="determinar">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $numero=$_POST["numero"];
        if ($numero>0){
            echo "el $numero es positivo";
        } elseif ($numero < 0) {
            echo "el $numero es negativo ";
        } else {
            echo "el $numero es cero";
        }
    }
     ?>
</body>
</html>