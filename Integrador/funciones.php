<?php
session_start();

function validarInformacion($datos){
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
  if (strlen($datos['telefono']) == 0) {
    $errores['telefono'] = "No ingreso su telefono";
  }
  if(strlen($datos['contrasena']) < 4){
      $errores['contrasena'] = "La contraseña es muy corta";
  } else if ($datos['contrasena'] != $datos['confirContr']){
      $errores['contrasena'] = "La contraseña no coincide";
  }
  return $errores;


}
/*
if ($_POST) {

$query = $db->prepare("INSERT INTO movies (nombre, apellido, email, fecha_nacimiento,contraseña,pais,telefono) VALUES (:nombre, :apellido, :email, :fecha_nacimiento, :contraseña, :pais, :telefono)");

$query->bindParam(':nombre', $_POST['nombre']);
$query->bindParam(':apellido', $_POST['apellido']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':fecha_nacimiento', $_POST['edad']);
$query->bindParam(':fecha', $_POST['contrasena']);
$query->bindParam(':pais', $_POST['pais']);
$query->bindParam(':telefono', $_POST['telefono']);

$query->execute();
}
*/
function crearUsuario($datos){
  $usuario = [
    "nombre" => $datos['nombre'],
    "apellido" => $datos['apellido'],
    "edad" => $datos['edad'],
    "email" => $datos['email'],
    "pais" => $datos['pais'],
    "telefono" => $datos['telefono'],
    "password" => password_hash($datos["contrasena"], PASSWORD_DEFAULT)
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
