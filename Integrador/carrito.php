<?php 
include('conexion.php');
include('clases/classProducto.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Carrito</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devise-width, initial-scale=1">
  <link rel="stylesheet"  href="estiloscss/carrito.css">
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
   $db = new PDO('mysql:host=127.0.0.1;dbname=dbproyecto;port=3306','root','');
   $query = $db->query('SELECT * FROM productos');
   $productos = $query->fetchAll(PDO::FETCH_ASSOC);

   foreach ($productos as $producto) {
          $productoObj= new Producto($producto['nombreProducto'],$producto['idProducto'],$producto['precioProducto'],$producto['fotoProducto'],$producto['stockProducto']); 
          echo "<h1>". $productoObj->getnombreProducto(). "</h1>"."</br>";
          echo "<div class= >" . $productoObj->getprecioProducto()."</br>";
     //var_dump($producto);
   }  
  ?>
</main>

 <!-- FOOTER -->
 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
