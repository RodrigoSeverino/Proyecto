<?php 

 class autenticador{
 
  public function login($usuario){
  	
  $_SESSION["email"]= $usuario['email'];

  setcookie("email", $usuario["email"], time()+3600);
   }


  public function controlarLogin() {

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

  public function logout(){
   session_destroy();
   setcookie("email","", -1);
}  


  public function registrarse{
  	
  }



 }


 ?>