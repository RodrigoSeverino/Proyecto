<?php

 class autenticador{

   public function __construct()
   {
       session_start();
       if (!isset($_SESSION["estoyLogueado"]) && isset($_COOKIE["estoyLogueado"])) {
           $_SESSION["estoyLogueado"] = $_COOKIE["estoyLogueado"];
       }
   }


  public function login($usuario){
        $_SESSION["estoyLogueado"] = $email;
    }


  public function controlarLogin() {

  if (isset($_SESSION["email"])) {
    return isset($_SESSION["estoyLogueado"]);
}

  public function logout(){
   session_destroy();
   setcookie("estoyLogueado","", -1);
}


  public function usuarioLogueado(DB $db){
      if ($this->controlarLogin()) {
          $email = $_SESSION["estoyLogueado"];
          return $db->buscamePorEmail($email);
      } else {
          return NULL;
      }
  }




 }


 ?>
