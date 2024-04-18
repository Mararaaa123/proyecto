<!DOCTYPE html>

<html>

<head>

    <title>Calculadora de Suma</title>

</head>

<body>

    <h1>Calculadora de Nota</h1>

    <form method="post">

        <label for="numero1">Nota 1:</label>

        <input type="number" name="numero1" required><br><br>

       

        <label for="numero2">Nota 2:</label>

        <input type="number" name="numero2" required><br><br>


        <label for="numero3">Nota 3:</label>       
         <input type="number" name="numero3" required><br><br>               
          
         <input type="submit" name="calcular" value="Calcular notas">   
         </form>
    <?php 
       if (isset($_POST['calcular'])) 
       {               
         $numero1 = $_POST['numero1'];       
          $numero2 = $_POST['numero2'];       
           $numero3 = $_POST['numero3'];
        $Nota = ($numero1 + $numero2 + $numero3)/3 ;
              echo "<h2>Resultado de la definitiva</h2>";      
                    echo "Nota: $Nota"; 
                       }    ?>
                       </body>
                       </html>

