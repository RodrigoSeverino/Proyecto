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
  } /*elseif (buscamePorMail($datos['email']) !=NULL) {
    $errores['email'] = "El mail ingresado ya existe";
  }*/
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
  if (strlen($datos['provincia']) == 0) {
    $errores['provincia'] = "No ingreso su provincia";
  }
  if (strlen($datos['localidad']) == 0) {
    $errores['localidad'] = "No ingreso su localidad";
  }
  if (strlen($datos['telefono']) == 0) {
    $errores['telefono'] = "No ingreso su telefono";
  }
  /*
  if(strlen($datos['password']) < 4){
      $errores['password'] = "La contraseña es muy corta";
  } else if ($datos['password'] != $datos['cpassword']){
      $errores['password'] = "La contraseña no coincide";
  }*/
  return $errores;
}

function crearUsuario($datos){
  $usuario = [
    "nombre" => $datos['nombre'],
    "apellido" => $datos['apellido'],
    "edad" => $datos['edad'],
    "email" => $datos['email'],
    "pais" => $datos['pais'],
    "provincia" => $datos['provincia'],
    "localidad" => $datos['localidad'],
    "telefono" => $datos['telefono']
    /*"password" => password_hash($datos["password"], PASSWORD_DEFAULT), */
  ];
  return $usuario;
}

function login($usuario){
  $_SESSION["email"]= $usuario['email'];

  setcookie("email", $usuario["email"], time()+3600);
}

function controlarLogin() {

  if (isset($_SESSION["email"])) {
      return true;
  } else {
      if (isset($_COOKIE["email"])) {
          $_SESSION["email"] = $_COOKIE["email"];

          return true;
      } else {
          return false;
      }
  }
}

function logout(){
  session_destroy();
  setcookie("email","", -1);
}



 ?>
