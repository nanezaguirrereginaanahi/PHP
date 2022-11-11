<?php
session_start(); //sesion se utiliza para loguarte una vez y utilizar en varias páginas

echo "Usuario: ".$_SESSION["usuario"]." Estado".$_SESSION["estado"];//muestro el usuario y estado

?>