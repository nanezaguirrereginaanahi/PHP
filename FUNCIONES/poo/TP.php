<?php

class vehiculo{// cuando el comando class creo una clase
    private $color; //es un atributo o propiedad
    private $peso; //atributo privado que solo puede acceder desde la clase y que es una caracteristica de la POO que se llama 
    
    function __construct ($color, $peso){
      $this-> color;
      $this-> peso;
    }

    public function circula(){//es un metodo, parecido a una funcion, tema dado. this-> longitud=+longitud_remolque
        echo "el vehiculo ".$this ->circula();}

     public function añadir_persona($peso_pasajero){
         echo "vehiculo en total pesa".$this->peso + $peso_pasajero;}


     class $cuatro_ruedas extends vehiculo{
      private $numero_puertas; 

      public function repintar($color){
      echo "repintar ".$this->color =$color;
      }}
      class coche extends cuatro_ruedas{
         private $numero_cadenas_nieve;
         public function añadir_cadenas_nieve ($num_cadena) {
            
         }

      }
      class camion extends cuatro_ruedas{
         private $longitud; 
      }
   }



?>
