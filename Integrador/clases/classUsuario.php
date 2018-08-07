<?php

class Usuario{

 private $nombreUsuario;
 private $apellidoUsuario;
 private $contrasenaUsuario;
 private $emailUsuario;
 private $pais;
 private $fechaNacimiento;
 private $idUsuario;

public function __construct($nombreUsuario, $apellidoUsuario, $contrasenaUsuario, $emailUsuario, $pais, $fechaNacimiento, $idUsuario) {

 $this->idUsuario = $idUsuario;
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
 }


 public function setNombreUsuario($nombreUsuario){
 	$this->nombreUsuario = $nombreUsuario;
 }

 public function getNombreUsuario(){
 	return $this->nombreUsuario;
 }

 public function setApellidoUsuario($apellidoUsuario){
 	$this->apellidoUsuario = $apellidoUsuario;
 }

 public function getApellidoUsuario(){
 	return $this->apellidoUsuario;
 }

  public function setEmail($emailUsuario){
 	$this->emailUsuario = $emailUsuario;
 }

 public function getEmail(){
 	return $this->emailUsuario;
 }
 public function setPais($pais){
 	$this->pais = $pais;
 }

 public function getPais(){
 	return $this->pais;
 }
 public function setFechaNacimiento(){
 	$this->fechaNacimiento = $fechaNacimiento;
 }

public function getFechaNacimiento(){
 	return $this->fechaNacimiento;
 }


 public function setIdUsuario($idUsuario){
 	$this->idUsuario= $idUsuario;
 }


 public function getIdUsuario(){
 	return $this->idUsuario;
 }

 public function getContrasenaUsuario(){
   return $this->contrasenaUsuario;
 }

 public function setContrasenaUsuario(){
    $this->contrasenaUsuario = $contrasenaUsuario;
 }

 }

 ?>
