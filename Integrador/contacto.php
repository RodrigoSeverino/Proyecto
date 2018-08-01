
<!DOCTYPE html>
<html>
<head>
  <title>Servicio Tecnico</title>
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
  <header>
    <img src="imagenes/serviciotecnico.jpg" id="logoserv" alt="logoserv">
  </header>
  <div class="login">
  <a href="Login.php">Login</a>
  <a href="signin.php">Sign In</a>
  </div>

<!--contenido-->
<main class="contacto">
 <form>
   <div class="columna1">
     <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="ingrese su nombre">
     <label for="apellido">Apellido</label>
    <input type="text" name="apellido" placeholder="ingrese su apellido">
     <label for="dni">D.N.I</label>
    <input type="number" name="dni" placeholder="ingrese su dni">
     <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="ingrese su email">
   </div>
   <div class="columna2">
       <label for="telefono">Telefono</label>
    <input type="number" name="telefono" placeholder="ingrese su numero">
      <label for="provincia">Provincia</label>
    <input type="text" name="provincia" placeholder="ingrese su provincia">
      <label for="localidad">Localidad</label>
    <input type="text" name="localidad" placeholder="ingrese su localidad">
      <label for="direccion">Direccion</label>
    <input type="text" name="direccion" placeholder="ingrese su direccion">
   </div>
 </form>
</main>
<div class="botonenviar">
<button type="sumbit" name="enviar">Enviar</button>
</div>

 <!-- FOOTER -->
 <?php
   include_once('footer.php');
   ?>
   </div>
</body>

</html>
