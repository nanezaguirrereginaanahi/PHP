<?php

//en programación se le denimina vector oo formacio o coleccion  ( en ingles ARRAY, del cual surge la mala traduccion de arreglo) a una zona de almacenamiento que contiene una serie de elementos del mismo tipo.

$a="tomate";

$frutas=array("frutilla","pera","manzana"); //en este caso guardamos varios datos
echo $frutas [0];

//array disociativos

$frutas2=array("f"=>"frutilla", "m"=>"manzana", "p"=>"pera");

print_r($frutas2);

echo $frutas2 ["f"];

//print_r($frutas);



//como se recorrenn los arreglos (con la estructura for)

for($indice=0;$indice<3;$indice++){
    echo $frutas[$indice]."<br>";
}


//recorrer array asociativo con la estructura for each

foreach ($frutas2 as $indice => $valor) {

    echo $valor."<br>"; 

}

//1) dado el siguiente array con los colores red blue y green borra el ultimo elemento


// Output: ['red', 'green', 'blue']

//2)contar la cantidad de elementos y mostrarlo en pantalla
//3) dado el siguiente arreglo llamado numeros y que contenga los numeros 1 9 3 8 5 y 7 mostrar el doble de cada numero y cual es el mayor y el menor

?>


let colors = ['red', 'green', 'blue']
colors.forEach(function(color) {
  console.log(color)


  const colors = ['red', 'green', 'blue', 'yellow']

colors.pop()

console.log(colors)