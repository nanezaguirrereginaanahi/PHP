<?php
class unaclase{
   // public function unmetodo(){

        public static function unmetodo (){ //con Static puedo usar el metodo sin instanciar la clases
        echo "hola soy un metodo estatico";
    }
}

unaclase::unmetodo();

//$obj=new unaclase();
//$obj=new unmetodo();
?>