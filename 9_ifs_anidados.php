<?php 
if($_POST){
	$valorA=$_POST['ValorA'];
	$valorB=$_POST['ValorA'];
    
    if($valorA!=$valorB){
        echo "LOS VALORES SON distintos";}

        if($valorA==4){
            echo "EL VALOR A ES IGUA A 4";}
        if($valorB==5){
                echo "EL VALOR B ES IGUAL A 5";}
                else{
                    echo "EL VALOR B ES IGUAL A 5";
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
    <form action="9_ifs_anidados.php" method="POST">

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
