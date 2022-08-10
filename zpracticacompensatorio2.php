<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <h1>DIA DE LA SEMANA</h1>
        <h4>DIA DE LA SEMANA</h4>

        <h4>1</h4>
        <input type="number" name="n1">

        <h4>2</h4>
        <input type="number" name="n2">

        <h4>3</h4>
        <input type="number" name="n3">




        <br><br>
        <input type="submit" value="calcular">
        <br><br>


    </form>


</body>

</html>


<?php

if ($_POST) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
   
    if ($n1==$n2 && $n2==$n3) {
    echo "Es un triangulo equilatero";
  }  else
    if ($n1!=$n2 && $n1!=$n3) {
    echo "TRIANGULO ESCALENO";
  }
  else{
    echo "TRIANGULO ISOCELES";
}


}

?>


//ejercicio 3 de la prueba


for($i=400;$i>=0;$i--){
    echo $i
    if($i==100){
        echo "llegamos";

    }
}