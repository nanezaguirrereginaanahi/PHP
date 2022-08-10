<?php 
if($_POST){
	$valorA=$_POST['ValorA'];
	$valorB=$_POST['ValorA'];
    
    if(($valorA=$valorB) || ($valorA>$valorB))// || operador logico o
    {//operadodo relacional
        echo "EL VALOR DE A ES DISTINTO DE B Y TAMBIEN ES MAYOR";}
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
    <form action="8_op_logicos.php" method="POST">

    valor A;
    <input type="text" name="valorA">
    <br>
    valor B;
    <input type="text" name="valorB">
    <br>
    <input type="submit" value="calcular">

    </form>
</body>
</html>

