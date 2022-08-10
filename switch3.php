<?php
if ($_POST) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $prom = ($n1 + $n2) / 2;

    switch (true) { //CUANDO LA CONDICIÖN ES VERDADERA

        case ($prom >= 1 && $prom < 4):
            echo "APLAZADO";
            break;

        case ($prom >= 4 && $prom < 7):
            echo "REPROBADO";
            break;

        case ($prom >= 7 && $prom < 9):
            echo "APROBADO";
            break;

        case ($prom >= 9 && $prom <= 10):
            echo "SOBREASALIENTE";
            break;


        default:
            echo "EL PROMEDIO ESTA MAL CALCULADO";
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