
<?php

use persona as GlobalPersona;

class persona{
    public $nombre; 
    private $edad; 
    public $domicilio;

    function __construct ($nuevonombre, $edad,$domicilio){
        $this->nombre;
        $this->edad;
        $this->domicilio;

    }

     public function imprimeedad(){
        echo "mi edads es ".$this->edad;
     } 
     public function imprimenombre(){
            echo "mi nombre es ".$this->nombre;
      } 
}
$objpersona =new persona("OMAR", 45,"PAYSANDU 3400");
?>
