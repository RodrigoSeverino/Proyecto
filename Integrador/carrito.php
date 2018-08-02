<?php 
include_once('conexion.php');
include_once('clases/claseProducto.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Carrito</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="estiloscss/contacto.css">
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
 <?php 
 //$productos = Producto::fetchAll();
  ?>
</main>

 <!-- FOOTER -->
 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
