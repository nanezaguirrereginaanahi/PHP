<?php
session_start(); //sesion se utiliza para loguarte una vez y utilizar en varias páginas

$_SESSION['usuario']="GUSTAVO";//los datos deberian sacarrlos de la BD
$_SESSION['estado']="LOGUEADO";//los datos deberian sacarrlos de la BD

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." Estado".$_SESSION["estado"];//muestro el usuario y estado


?>