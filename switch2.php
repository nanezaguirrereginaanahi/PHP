<?php
if ($_POST) {

    $n1 = $_POST['n1'];



    switch ($n1) { //CUANDO LA CONDICIÖN ES VERDADERA

        case 1:
            echo "DOMINGO";
            break;

        case 2:
            echo "LUNES";
            break;

        case 3:
            echo "MARTES";
            break;

        case 4:
            echo "MIERCOLES";
            break;

        case 5:
            echo "JUEVES";
            break;

        case 6:
            echo "VIERNES";
            break;
        case 7:
            echo "SABADO";
            break;

        default:
            echo "NO CORRESPONDE A UN DIA DE LA SEMANA";
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
        <h1>DIA DE LA SEMANA</h1>
        <h4>DIA DE LA SEMANA</h4>
        <input type="number" name="n1">


        <br><br>
        <input type="submit" value="calcular">
        <br><br>


    </form>


</body>

</html>