<?php
session_start();

funcion validarInformacion($datos){
  foreach ($datos as $key => $value) {
    $datos[$key] = trim($value);
  }

  $errores = [];

  if (strlen(datos['email']) == 0) {
    $errores['email'] = "El email es obligatorio";
  }elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = "El mail no es valido";
  }elseif (buscamePorMail($datos['email']) !=NULL) {
    $errores['email'] = "El mail ingresado ya existe";
  }
  if (strlen($datos) == 0) {
    $errores[]
  }


}





 ?>
