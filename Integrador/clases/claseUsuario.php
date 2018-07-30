<?php

class Usuario{

 protected $nombreUsuario = [];
 protected $apellidoUsuario = [];
 private $contrasenaUsuario = [];
 protected $emailUsuario = [];
 protected $pais = [];
 protected $fechaNacimiento = [];
 protected $tarjeta = [];
 protected $idUsuario = [];

public function __construct(array $nombreUsuario,array $apellidoUsuario,array $contrasenaUsuario,array $emailUsuario,array $pais,array $fechaNacimiento,array $tarjeta,array $idUsuario) {

 $this->nombreUsuario = $nombreUsuario;
 $this->apellidoUsuario = $apellidoUsuario;
 $this->contrasenaUsuario = $contrasenaUsuario;
 $this->emailUsuario = $emailUsuario;
 $this->pais = $pais;
 $this->fechaNacimiento = $fechaNacimiento;
 $this->tarjeta = $tarjeta;
}


 public function setNombreUsuario($nombre){
 	$this->nombreUsuario = $nombre;
 }

 public function getNombreUsuario(){
 	return $nombreUsuario;
 }

 public function setApellidoUsuario($apellido){
 	$this->nombreUsuario = $apellido;
 }

 public function getApellidoUsuario(){
 	return $apellidoUsuario;
 }

  public function setEmail($emailUsuario){
 	$this->emailUsuario = $emailUsuario;
 }

 public function getEmail(){
 	return $emailUsuario;
 }
public function setPais($pais){
 	$this->pais = $pais;
 }

 public function getPais(){
 	return $pais;
 }
public function setFechaNacimiento($fechaNacimiento){
 	$this->fechaNacimiento = $fechaNacimiento;
 }

 public function getFechaNacimiento(){
 	return $fechaNacimiento;
 }
 public function setTarjeta($tarjeta){
 	$this->tarjeta= $tarjeta;
 }

 public function getTarjeta(){
 	return $tarjeta;
 }

 public function setIdUsuario($idUsuario){
 	$this->idUsuario= $idUsuario;
 }


 public function getIdUsuario(){
 	return $idUsuario;
 }


 public function crearUsuario($datos){
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
  
 }

public function elegirMetodoPago(){


}






 }







 ?>
