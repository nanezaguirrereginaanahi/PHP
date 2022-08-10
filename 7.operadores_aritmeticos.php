<?php 
if($_POST){
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$signo = $_POST['signo'];
    $resultado = $_POST['resultado'];
	
	if($signo == "+"){
		$resultado = $n1 + $n2;
	}else if($signo == "-"){
		$resultado = $n1 - $n2;
	}else if($signo == "*"){
		$resultado = $n1 * $n2;
	}else if($signo == "/"){
		$resultado = $n1 / $n2;
	}
	echo "El resultado es:".$resultado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos </title>
</head>
<body>
    

<form method="get" action="7.operadores_aritmeticos.php">
		<input type="text" name="n1">
		<select name="signo">
			<option value="+">+</option>
			<option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
		</select>
		<input type="text" name="n2">
		<input type="submit" value="calcular">
	</form>
    <!--<form action="7.operadores_aritmeticos.php" method="">

    Valor A:
    <input type="text" name="valora">
    <br>

    Valor B:
    <input type="text" name="valorb">
    <br>

    <input type="submit" value="CALCULAR" >

    </form> -->

</body>
</html>
