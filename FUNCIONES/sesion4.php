<?php
session_start(); //sesion se utiliza para loguarte una vez y utilizar en varias páginas

session_destroy();
echo "se destruyó la sesión ";

?>