<?php

class Usuario{

 private $nombreUsuario;
 private $apellidoUsuario;
 private $contrasenaUsuario;
 private $emailUsuario;
 private $pais;
 private $fechaNacimiento;
 private $idUsuario;

public function __construct( $nombreUsuario, $apellidoUsuario, $contrasenaUsuario, $emailUsuario, $pais, $fechaNacimiento, $idUsuario) {

 $this->nombreUsuario = $nombreUsuario;
 $this->apellidoUsuario = $apellidoUsuario;
 if ($idUsuario == null) {
     $this->contrasenaUsuario = password_hash($contrasenaUsuario, PASSWORD_DEFAULT);
 } else {
     $this->contrasenaUsuario = $contrasenaUsuario;
 }
 $this->emailUsuario = $emailUsuario;
 $this->pais = $pais;
 $this->fechaNacimiento = $fechaNacimiento;
 $this->idUsuario = $idUsuario;
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


 public function setIdUsuario($idUsuario){
 	$this->idUsuario= $idUsuario;
 }


 public function getIdUsuario(){
 	return $idUsuario;
 }

 public function getContrasenaUsuario(){
   return $contrasenaUsuario;
 }

 public function setContrasenaUsuario(){
    $this->contrasenaUsuario = $contrasenaUsuario;
 }

 }

 ?>
