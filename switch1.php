<?php 
if($_POST){
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];

    $suma=$n1+$n2;

  switch (true) { //CUANDO LA CONDICIÖN ES VERDADERA

    case $suma >0:
        echo "la suma es positiva;";
        break;

        case $suma == 0:
            echo "la suma es NULA";
            break;
    
    default:
    echo "la suma es negativa";
        break;
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

    <br><br>
    <input type="submit" value="calcular">
    <br><br>
    
    
    </form>


</body>
</html>
