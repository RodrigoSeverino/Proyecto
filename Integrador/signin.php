<?php
if($_POST){
//ACA LLEGAN LOS DATOS DEL FORMULARIO
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

<!--contenido-->
<main >
  <form action="" method="POST">
    <div class="columna1">
    <label for="nombre" class="nombre">Nombre</label>
    <input type="text" id="nombre" placeholder="Ingresá tu nombre" required>
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" placeholder="Ingresa tu apellido" required>
    <br>
    <label for="email">E-mail</label>
    <input type="text" name="email"  placeholder="ingresa tu e-mail" required>
    <br>
    <label for="edad">Edad</label>
    <input type="number" name="edad" placeholder="XX/XX/XXXX">
    <br>
  </div>
    <div class="columna2">
    <label for="localidad">Localidad</label>
    <input type="text" name="localidad" placeholder="ingresa tu localidad" required>
    <br>
    <label for="provincia">provincia</label>
    <input type="text" name="provincia" placeholder="ingresa tu provincia" required>
    <br>
    <label for="pais">Pais</label>
    <input type="text" name="pais" placeholder="ingresa tu pais" required>
    <br>
    <label for="telefono/celular">telefono/Celular</label>
    <input type="number" name="telefono/celular" placeholder="ingrese su numero" required>
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

 <!-- FOOTER -->
 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
