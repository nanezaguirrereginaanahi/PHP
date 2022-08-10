<?php

if ($_POST) {

  $peso = $_POST['peso'];
  $estatura = $_POST['estatura'];

  // $pesof= $peso/100;
  $pesoideal = 24 * ($estatura * $estatura);
  $pesobajar = $peso - $pesoideal;
  $pesosubir = $peso - $pesoideal;
  $pesoobj = $peso - $pesobajar;

  // $IMC=$peso/($altura*$altura);
  $IMC = $peso / ($estatura * $estatura);


  $diagnostico = ($IMC);

  
  echo "Su peso saludable  sería: " . $pesoobj;

  echo "<br>Su peso a bajar: " . $pesobajar;

  echo "<br> Su peso es de $peso", "<br> y estatura $estatura", "<br> Le dan un IMC: ".round($IMC). "<br> El catalogado como:";



  switch (true) { //CUANDO LA CONDICIÖN ES VERDADERA

    case ($IMC < 18.5):
      echo "Su peso es bajo";
        break;

    case ($IMC >= 18.5):
        echo "Su peso es Normal";
        break;

    case ($IMC >= 25):
        echo "REPROBADO";
        break;

    case ($IMC >= 30):
        echo "APROBADO";
        break;

    case ($IMC<= 39.9):
        echo "SOBREASALIENTE";
        break;


    default:
        echo "UNA DE LAS NOTAS ESTA MAL";
        break;
}

 
    if ($IMC >= 18.5 && $IMC <= 24.9) {
    echo "Su peso es Normal";
  } else

    if ($IMC >= 25 && $IMC <= 29.9) {
    echo "Usted tiene Sobrepeso";
  } else
    if ($IMC >= 30 && $IMC <= 34.9) {
    echo "Tiene un problema de Obesidad tipo 1";
  } else
    if ($IMC >= 35 && $IMC <= 39.9) {
    echo "Tiene un problema de Obesidad tipo 2";
  } else
    if ($IMC >= 40) {
    echo "obesidad severa tipo 3";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Document</title>
</head>

<body>

  <div class="container bg-dark">

    <div class="row">

      <form action="PROMEDIO.php" method="post">
        <h1 class="text text-light">CALCULADORA DE IMC</h1>


        <h4 class="text text-light">Ingrese su peso en kilos</h4>
        <input type="float" name="peso">

        <h4 class="text text-light">Ingrese su estatura en metros</h4>
        <input type="float" name="estatura">
        <br><br>

        <input type="submit" value="calcular">
        <br><br>


      </form>
    </div>

    <div class="row">


      <table class="table bg-dark border border-dark">
        <thead>
          <tr class="border border-dark">
            <th scope="col">DIAGNÓSTICO</th>
            <th>IMCs </th>

          </tr>
        </thead>
        <tbody>
          <tr class="bg-info">
            <th scope="row">Bajo Peso</th>
            <td> < 18.5 </td>

          </tr>

          <tr class="bg-success">
            <th scope="row">Peso Normal</th>
            <td> 18.5 - 24.9 </td>

          </tr>

          <tr class="bg-warning">
            <th scope="row">Sobrepeso</th>
            <td>25-29.9</td>

          </tr>

         
            <tr class="bg-danger">
              <th scope="row">Obsesidad Tipo 1</th>
              <td>30 - 34.9</td>

            </tr>

            <tr class="bg-danger">
              <th scope="row">Obsesidad Tipo 2</th>
              <td>35 - 39.9</td>

            </tr>

            <tr class="bg-danger">
              <th scope="row">Obsesidad Tipo 3</th>
              <td>>= 40</td>

            </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>