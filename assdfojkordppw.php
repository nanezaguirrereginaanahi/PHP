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
    <h1>CALCULADORA DE IMC</h1>
    <h4>Ingrese su nombre</h4>
    <input type="text" name="nombre">

    <h4>Ingrese su peso en Kg</h4>
    <input type="float" name="peso">

    <h4>Ingrese su estatura en mts</h4>
    <input type="float" name="estatura">

    <input type="radio" name="t_persona" value="niño" id="niño">
    <label for="Niño">Niño</label>

    <input type="radio" name="t_persona" value="adulto" id="adulto">
    <label for="Adulto">Adulto</label>
    <br><br>
    <input type="submit" value="calcular">
    <br><br>
    
    
    </form>



</body>
</html>

<?php

if($_POST){

	$nombre=$_POST['nombre'];
	$peso=$_POST['peso'];
    $estatura=$_POST['estatura'];
	$t_persona=$_POST['t_persona'];


    $imc=$peso/($estatura * $estatura);

    if ($t_persona == 'Niño'){
        echo 'tipo de persona:'.$t_persona .'<br>';
        if ($imc <= 3) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Está bajo de peso<h3>';
        }  if ($imc > 3 && $imc <= 85) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Peso normal<h3>';
        } if ($imc > 85 && $imc <= 95) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Sobrepeso<h3>';
        } if ($imc > 97 ) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>OBESIDAD<h3>';
        } 

    } else if ($t_persona == 'Adulto'){
        echo 'tipo de persona:'.$t_persona .'<br>';

        if ($imc <= 18) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Está bajo de peso<h3>';
        } else if ($imc > 18 && $imc <= 25) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Peso normal<h3>';
        } else if ($imc > 25 && $imc <= 30) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>Sobrepeso<h3>';
        } else if ($imc > 30 ) {
            echo 'Hola'.$nombre. ' su IMC es: '. $imc . '<br>';
            echo '<h3>OBESIDAD<h3>';
        } 
    }


}

?>