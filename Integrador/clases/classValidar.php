<?php
equire_once('conexion.php');
session_start();

class validator {

   public function validarDatosUsuario($datos){


  foreach ($datos as $key => $value) {
    $datos[$key] = trim($value);
  }

  $errores = [];

  if (strlen($datos['email']) == 0) {
    $errores['email'] = "El email es obligatorio";
  }elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = "El mail no es valido";
  }
  if (strlen($datos['nombre']) == 0) {
    $errores['nombre'] = "No ingreso su nombre";
  }
  if (strlen($datos['apellido']) == 0) {
    $errores['apellido'] = "No ingreso su apellido";
  }
  if (strlen($datos['edad']) == 0) {
    $errores['edad'] = "No ingreso su fecha de nacimiento";
  }
  if (strlen($datos['pais']) == 0) {
    $errores['pais'] = "No ingreso su pais";
  }
  if(strlen($datos['contrasena']) < 4){
      $errores['contrasena'] = "La contraseña es muy corta";
  } else if ($datos['contrasena'] != $datos['confirContr']){
      $errores['contrasena'] = "La contraseñas no coinciden";
  }
  return $errores;

   }

  public function validarContactanos{

  }

  }










?>
