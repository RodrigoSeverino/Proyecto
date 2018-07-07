<?php
require_once 'funciones.php';
require_once 'conexion.php';

if($_POST){
$errores = validarInformacion($_POST);
if(count($errores) == 0){
  crearUsuario($_POST);
 header('Location:login.php');
}else{
  foreach ($errores as $error) {
    echo $error . "<br>";
  }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>SignIn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="estiloscss/signin.css">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
   <div class="container">
     <?php
       include_once('header.php');
       ?>
  <div class="login">
  <a href="login.php">Login</a>
  <a href="signin.php">Sign In</a>
  </div>


<main >
  <form action="" method="POST">
    <div class="columna1">
    <label for="nombre" class="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ingresá tu nombre" required>
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
    <br>
    <label for="email">E-mail</label>
    <input type="text" name="email"  placeholder="ingresa tu e-mail" required>
    <br>
    <label for="edad">Fecha de Nacimiento</label>
    <input type="date" name="edad" placeholder="XX/XX/XXXX">
    <br>
  </div>
    <div class="columna2">
    <label for="contrasena">Contraseña</label>
    <input type="password" name="contrasena" placeholder="ingresa su contraseña" required>
    <br>
    <label for="confirContr">Confirmar Contraseña</label>
    <input type="password" name="confirContr" placeholder="ingresa tu contraseña" required>
    <br>
   <label for="pais">Pais</label>
    <input type="text" name="pais" placeholder="ingresa tu pais" required>
    <br>
    <label for="telefono/celular">telefono/Celular</label>
    <input type="number" name="telefono" placeholder="ingrese su numero" required>
    <br>
  </div>
  <div class="botonenviar">
     <label for="condiciones">Acepto condiciones</label>
    <input type="checkbox" name="condiciones" required>
    <br>
    <button href="home.html" type="submit">ENVIAR!</button>
  </div>
  </form>
</main>


 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
