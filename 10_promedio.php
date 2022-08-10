<?php 
if($_POST){
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
    $n3=$_POST['n3'];

    $promedio=($n1+$n2+$n3)/3
    
    if ($promedio<=3){
        echo "Aplazado";}

        if($promedio>=4)&&( <= 6 ){
            echo "Desaprobado";}
        if($promedio){
                echo "Aprobado";}
                if{
                    echo "Sobresaliente";
                }
}
?>

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
    <h1>CALCULADORA DE PROMEDIO</h1>
    <h4>1ra nota</h4>
    <input type="number" name="n1">

    <h4>2da nota</h4>
    <input type="number" name="n2">

    <h4>3ra nota</h4>
    <input type="number" name="n3">

    <br><br>
    <input type="submit" value="calcular">
    <br><br>
    
    
    </form>


</body>
</html>
