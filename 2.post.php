<?php
//comentario, se se recepciona lñoq ue se envia por el metodo post
if($_POST){
$nombre=$_POST['nombre']; //se guarda la variable
echo "Mi nombre es ".$nombre; //muestra lo que contiene la 

$apellido=$_GET['apellido'];
echo $apellido;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
<form action="post.php" method="POST">
    Nombre
    <input type="text" name="NOMBRE" id="">
    <br>
    <input type="submit" value="ENVIAR">
</form>
 
<form action="get.php" method="GET">
        Nombre
        <input type="text" name="NOMBRE" id="">
        <br>
        <input type="submit" value="ENVIAR">
    </form>

    <form action="get.php" method="GET">
       apellido
        <input type="text" name="apellido id="">
        <br>
        <input type="submit" value="ENVIAR">
    </form>

    <form action="get.php" method="GET">
        edad
        <input type="text" name="edad" id="">
        <br>
        <input type="submit" value="ENVIAR">
    </form>

    <form action="get.php" method="GET">
        altura
        <input type="text" name="altura" id="">
        <br>
        <input type="submit" value="ENVIAR">
    </form>

</body>
</html>
  