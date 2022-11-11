
<?php
//la programacionn orintada a objetos (poo) es un modelo o paradigma de programavion que permite desarrollar aplicaciones complejas manteniendo un codigo claro y manejable que paradigmas anteriores
//en este tipo de programacion se organiza el codigo en unidades determinadas CLASES, de las cuales se crean OBJETOS

//$nombre"LAUTARO";

class persona{// cuando el comando class creo una clase
    public $nombre; //es un atributo o propiedad

    private $edad; //atributo privado que solo puede acceder desde la clase y que es una caracteristica de la POO que se llama encapsulamiento

    public function asignanombre($nuevonombre){//es un metodo, parecido a una funcion, tema dado.
        $this ->nombre=$nuevonombre;}

     public function imprimenombre(){
        echo "mi edads es ".$this->edad;
     } 


     public function asignaedad($nuevaedad){//es un metodo, parecido a una funcion, tema dado.
        $this ->edad=$nuevaedad;}
        public function imprimeedad(){
            echo "mi nombre es ".$this->nombre;
         } 
    

}
class trabajador extends persona { //creo una clase hija d e la madre.  con el comando "extends"En POO se llama HERENCIA 
   public $puesto;//atributo propio de la clase hija
   public function presentarse (){ //metodo propio de la clase hija 
      echo "Hola sooy ".$this->nombre."Y soy ".$this->puesto;

   }} 

$objetotrabajador=new trabajador(); //instancio una clase trabajador 
$objetotrabajador->puesto="administrativo "; //Doy valor al atributo propio de la clasetrebajadora
$objetotrabajador -> presentarse();//llamo al metodo de la clase hija 
$objetotrabajador->asignanombre("PEDRO");



//$objpersona1= new persona();
// Con el comando "new" crea un objeto de la clase persona. crear un objeto en la variable se llamaa "INSTANCIAR".
//$objpersona1->asignanombre("OMAR"); 
//en estaa linea llamo al metodo de "asignanombre"y le paso el parametro OMAR
//echo $objpersona1->nombre;

//$objpersona1->asignaedad(30);
//$objpersona1->imprimeedad()

//$objpersona2=new persona();
//$objpersona2 ->asignanombre("BEATRIZ");
//$objpersona2->imprimenombre();
//$objpersona1->imprimenombre();




?>