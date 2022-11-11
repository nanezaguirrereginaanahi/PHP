<?php
//echo rand(1,21);
//$n=7.9;
//echo round($n);
$v1= strtolower($_POST['v1']);
$v2=strtolower($_POST['v2']);

echo $v1."<br>".$v2;


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
        <h1>String</h1>


        <h4>nombre de usuarios</h4>
        <input type="string" name="v1">

        <h4>correo</h4>
        <input type="string" name="v2"

        <br><br>
        <input type="submit" value="calcular">
        <br><br>


    </form>


</body>

</html>