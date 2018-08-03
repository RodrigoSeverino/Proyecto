<?php

require_once('classUsuario.php');
abstract class classDB{

  public abstract function guardarUsuario(Usuario $usuario);
  public abstract function buscamePorEmail($email);
  public abstract function traeTodaLaBase();
}


 ?>
