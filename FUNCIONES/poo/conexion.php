<?php

$servidor="localhost";//127.0.0.1
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$servidor; dbname=album",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexion establecida";

   //$sql="INSERT INTO `foto`(`id`, `nombre`, `ruta`) VALUES (NULL,'promo22','foto.jpg')";

   // $conexion->exec($sql);//ejecuta el codigo sql para insertar el registro

   $sql="SELECT * FROM `foto`"; //GUARDO LA CONSULTA SQL EN LA VARIABLE

   $setencia=$conexion->prepare($sql);//UTILIZO EL METODP PREPARE DE LA CLASE PDO
   $setencia->execute();//EJECUTO LA CONSULTA SQL
   $resultado=$setencia->fetchAll();//EL RESULTdp de la consulta guardo en array
   print_r($resultado);//muestro el array

   foreach($resultado as $foto){
    echo $foto['nombre']."<br>";
   }

} catch (PDOException $error) {
    echo "conexión erronea a causa de ".$error;
}


?>