<?php
//3) dado el siguiente arreglo llamado numeros y que contenga los numeros 1 9 3 8 5 y 7 mostrar el doble de cada numero y cual es el mayor y el menor


$numeros = array(1,9,3,8,5,7);
array_pop($numeros);
"<br>";
echo "el array es: \n <br>";
print_r($numeros);
echo $numeros.*2;
echo max($numeros);
echo min($numeros);

?>