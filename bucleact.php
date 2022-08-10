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

        <h4>valor a multiplicars</h4>
        <input type="number" name="n1">

        <h4>multiplicar por</h4>
        <input type="number" name="mult">


        <h4>hasta</h4>
        <input type="number" name="l1">


        <br><br>
        <input type="submit" value="calcular">
        <br><br>


    </form>


</body>

</html>



<?php
if ($_POST) {

    $mult = $_POST['n1'];
    $l1 = $_POST['l1'];



    $i=1;
    do {//INICIA EN 0
        echo $mult * $i;
        $i++;
       //incrementa i en 1
    
    }
     while ($i  <= $l1);
    
}
?>