
una funcion es un bloque de codigo que realiza alguna operacion independentemente del programa

una funcion tiene tres omponentes importantes 
los parametros o argumentos que recibe la información de entrada.
el codigo de la función, que son las operaciones que realiza la misma
el resultado o valor de retorno que es valor final que entrega la funcion.

tenemos 2 clases de funciones 
las que crea el usuario.
las propias del lenguaje

una funcion que devuelva el promedio

una funcion que cambie de divisa dolar blue oficial y euro 




<?php
function mostrar_nombre ($nombre="",$apellido=""){

    echo "Soy ".$nombre. " ".$apellido. "<br>";
}

function firma(){//no necesariamente debe tener parametros o argumentos
echo "Soy FULANO MENGANO <br> esc llano <br> alumno";
}

function preparar_cafe($tipo="capucchino"){//puedo darle un valor inicial y lueg cambiarlo
    echo "hacer una taa de $tipo. <br>";

}


function suma($n1,$n2){
    $resultado=$n1 + $n2;
    return $resultado;
}




//llamamos a la funcion 
//mostrar_nombre($nombre)
//firma()
?>