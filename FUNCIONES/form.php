<?php
$txtnombre="";//decllaro lla variable vacia

$radio="";

if ($_POST){//pregunto si hubo envión
    $txtnombre=(isset($_POST["txtnombre"]))?$_POST["txtnombre"]:" sin dato "; //pregunto si no es null y si no lo es lo guardo en la variablr lo que trajo la caja y di no lo guarda la leyenda sin dato

    $radio=(isset($_POST["lenguaje"]))?$_POST["lenguaje"]:" sin dato "; //s

    $scratch=(isset($_POST["scratch"])=="si") ? "checked" : "";
    $lightbot=(isset($_POST["lightbot"])=="si") ?"checked" : "";
    $pseint=(isset($_POST["pseint"])=="si") ?"checked" : "";//captura los valores que ingresa el usuario en el checkbox
    $anime=(isset($_POST["anime"])=="si")?$_POST["anime"]:" sin dato ";

    $comentario=(isset($_POST["comentario"])=="si")?$_POST["comentario"]:"";

    print_r($_POST);

 

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
    

    <form action="form.php" method="POST">
    <strong>Nombre</strong><?php echo $txtnombre;?>

    <input type="text" name="txtnombre" id="">

    ¿Estudiarias?

  <br/>php:<input type="radio" <?php echo ($radio=="php")?"checked":"";?>
  name="lenguaje" value="php" id="">
  <br/>html5:<input type="radio" <?php echo ($radio=="html5")?"checked":"";?> name="lenguaje" value="html5" id="">
  <br/>css:<input type="radio" <?php echo ($radio=="css")?"checked":"";?> name="lenguaje" value="css" id=""><br>

  <br>
  <br>

¿Que lenguajes has estudiados?
    

<br/>scratch:<input type="checkbox" <?php echo $scratch;?>
  name="scratch" value="si" id="">
  <br/>lightbot:<input type="checkbox" <?php echo $lightbot;?> name="lightbot" value="si" id="">
  <br/>pseint:<input type="checkbox" <?php echo $pseint;?> name="pseint" value="si" id=""><br>

<br>
  ¿que anime te gusta?

  <select name="anime" id="">
    <option value="">Ninguno</option>
    <option value="naruto">Naruto</option>
    <option value="espiritudelucha">Espiritu de lucha </option>
    <option value="dragon">DRAGONBALL </option>
  </select>
  <br>
  <br>
  <br>

  comentarios
  <br>
  <textarea name=""id="" cols="30" rows="10">
    <php echo "comentario">
  </textarea>
    <input type="submit" value="enviar información">

    </form>

</body>
</html>