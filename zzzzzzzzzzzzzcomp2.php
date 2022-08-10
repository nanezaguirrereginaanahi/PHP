<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <div>
    <form action="" method="post">
        <h1>.....</h1>


        <h4>p1</h4>
        <input type="number" name="c1">

        <h4>p2</h4>
        <input type="number" name="c2">

        <h4>p3</h4>
        <input type="number" name="c3">




    </form>
    </div>

    <div>
    <form action="" method="post">
        <h1>.....</h1>


        <h4>p1</h4>
        <input type="number" name="n1">

        <h4>p2</h4>
        <input type="number" name="n2">

        <h4>p3</h4>
        <input type="number" name="n3">

        <br><br>
        <input type="submit" value="calcular">
        <br><br>

    </form>
    </div>



</body>

</html>

<?php

if ($_POST) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];

    $vneto=$n1*$c1+$n2*$c2+$n3*$c3;
    
    $iva=round($vneto*0.21,0);
    $dgr=round($vneto*0.03,0);
    $pm=round($vneto*0.015,0);
    
    
    $vbruto=$vneto+$iva+$dgr+$pm;


   
    if ($vbruto==1000000) {
    echo "se aplica un 5% de desc.".$vbruto-($vbruto*0.05);
  }


}

?>

