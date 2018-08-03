<?php


include_once('funciones.php');

// if ($_POST) {
//   buscarPorMail($_POST['email']);
//
// }

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="estiloscss/login.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">
    <?php
      include_once('header.php');
      ?>
  <div class="login">
  <a href="Login.php">Login</a>
  <a href="signin.php">Sign In</a>
  </div>

<!--contenido-->
<main>
  <form action="" method="POST">
    <label for="nombre" class="nombre">Email</label><br>
    <input type="text" id="nombre" name="emailLogin" placeholder="Ingresá tu Email">
    <br>
    <div><?php
    if(isset($errores['emailLogin'])){
    echo($errores['emailLogin']);
    }
    ?></div>
    <label for="contrasena">Contraseña</label>
    <br>
    <input type="password" id="contrasena" name="contrasenaLogin"placeholder="Ingresa la contraseña">
    <br>
    <div><?php
    if(isset($errores['contrasena'])){
    echo($errores['contrasena']);
    }
    ?></div>
    <button href="home.php" type="submit">ENVIAR!</button>
  </form>
</main>

 <!-- FOOTER -->
 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
