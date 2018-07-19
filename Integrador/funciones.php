<?php
require_once('conexion.php');
session_start();


function validarInformacion($datos){
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
  //if (strlen($datos['telefono']) == 0) {
  //  $errores['telefono'] = "No ingreso su telefono";
  //}
  if(strlen($datos['contrasena']) < 4){
      $errores['contrasena'] = "La contraseña es muy corta";
  } else if ($datos['contrasena'] != $datos['confirContr']){
      $errores['contrasena'] = "La contraseñas no coinciden";
  }
  return $errores;


}

function crearUsuario($datos){
  $dsn= "mysql:host=127.0.0.1;dbname=dbproyecto;port=3306";
  $db_user ='root';
  $db_pass ='';
  $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  try {
    $db = new PDO($dsn, $db_user, $db_pass, $opt);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $Exception) {
    echo $Exception->getMessage();
  }


  $stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento, contrasena, pais) VALUES (:nombre, :apellido, :email, :fecha_nacimiento, :contrasena, :pais)");

  $stmt->bindParam(':nombre', $datos['nombre']);
  $stmt->bindParam(':apellido', $datos['apellido']);
  $stmt->bindParam(':email', $datos['email']);
  $stmt->bindParam(':fecha_nacimiento', $datos['edad']);
  $stmt->bindParam(':contrasena', $datos['contrasena']);
  $stmt->bindParam(':pais', $datos['pais']);


  $stmt->execute();

  //echo "Usuario Registrado";

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
