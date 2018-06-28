<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$errores=[];

if (strlen($usuario)== 0) {
  $errores['usuario']= "Ingrese un nombre de usuario.";
}

if (strlen($contrasena)<6) {
  $errores['contrasena']= "Ingrese una contrasena que supere los 6 caracteres";
}


 ?>
