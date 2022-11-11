
//1) dado el siguiente array con los colores red blue y green borra el ultimo elemento

<?php
//Declare the array

$colors = array(
                "Red",
                "blue",
                "green",
                "yellow");
unset($colors[3]);
echo "el array es: \n <br>";
print_r($colors);
echo count($colors);

"<br>";



$colors = array(
    "Red",
    "blue",
    "green",
    "yellow");
array_pop($colors);
echo "el array es: \n <br>";
print_r($colors);
echo count($colors)


?>