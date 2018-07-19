<?php

class Usuario{

 protected $nombreUsuario = [];
 protected $apellidoUsuario = [];
 private $contrasenaUsuario = [];
 protected $emailUsuario = [];

public function __construct(array $nombreUsuario,array $apellidoUsuario,array $contrasenaUsuario,array $emailUsuario){

 $this->nombreUsuario = $nombreUsuario;
 $this->apellidoUsuario = $apellidoUsuario;
 $this->contrasenaUsuario = $contrasenaUsuario;
 $this->emailUsuario = $emailUsuario;
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


 }







 ?>
