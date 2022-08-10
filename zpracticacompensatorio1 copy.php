<?php

if ($_POST) {

    $ci = $_POST['n1'];
    $años = $_POST['n2'];

    $saldo=$ci;

    $interes =$saldo*0.60;

    $saldo=$saldo+$interes;

   

for ( $i=1;$i<=$años;$i++) { 

    echo "El interés ganado en el año = ".$int."<br>";

    echo "El capital inicial es de = ".$ci."<br>";

    echo "El capital con intereses es = ".$int + $ci."<br>";


    echo "<br>";
   
}
}
?>