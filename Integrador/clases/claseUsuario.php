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


 public function cargarUsuario(){
 
  
 }

public function elegirMetodoPago(){


}






 }







 ?>
