<?php
if ($_POST){

$minutos=$_POST['min'];

$iva=($minutos*10.5)/100;

define("PRECIO", 90);
define("PRECIO2", 120);

 echo "Costo de llamada $".PRECIO."por minuto, pasando los cuatro minutos el costo pasa a ser $".PRECIO2."<br>";

 if ($minutos>4){
    $totalllam=($minutos*PRECIO2)+($iva*PRECIO2);
    echo "la llamada tuvo una duracion de ".$minutos."<br>La llamada cuesta $".$totalllam;
    echo "Costo de llamada x minuto fue $".PRECIO."<br>";
    echo "Costo de llamada x minuto fue $".PRECIO."<br>";
 } elseif (($minutos>=1)&&($min<4)) {
     $totalllam=($minutos*PRECIO)+($iva*PRECIO);
    echo "la llamada tuvo una duracion de ".$minutos."<br>La llamada cuesta $".$totalllam;
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
    <form action="LLAMADA.php" method="post">
    <h1>CALCULADORA DE </h1>


    <h4>Ingrese la duración de la llamada en minutos</h4>
    <input type="float" name="min">

   
    <input type="submit" value="calcular">
    <br><br>
    
    
    </form>



</body>

 <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</html>