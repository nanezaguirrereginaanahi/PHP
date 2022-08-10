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


        <h4>Capital</h4>
        <input type="number" name="n1">

        <h4>años</h4>
        <input type="number" name="n2">



        <br><br>
        <input type="submit" value="calcular">
        <br><br>


    </form>


</body>

</html>


<?php

if ($_POST) {

    $ci = $_POST['n1'];
    $años = $_POST['n2'];


    $int =round($ci*0.60,0);



    $i=1;

for ( ;$i<=$años; ) { 

    echo "El capital inicial es de = ".$ci."<br>";

    echo "El interés ganado es = ".$int."<br>";

    echo "El capital con intereses es = ".$int + $ci."<br>";

    $i=$i+1;
    $ci=$int+$ci;
    $int=round($ci*0.60,0);

    echo "<br>";
   
}
}
?>


