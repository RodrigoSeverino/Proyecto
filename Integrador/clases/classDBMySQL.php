<?php

require_once('classDB.php');
require_once('classUsuario.php');

 class DBMySQL extends classDB{

 	protected $conexion ;


   public function __construct(){
        $dsn= 'mysql:host=localhost;dbname=dbproyecto;port=3306';
        $username = "root";
        $password = "";

        try {
          $this->conexion = new PDO($dns, $username, $password);
        } catch (Exception $e) {
          echo "La conexion a la base de datos falló: " . $e->getMessage();
        }
      }

      function guardarUsuario(Usuario $usuario){
        $query = $this->conexion->prepare("INSERT INTO usuarios VALUES (:nombre, :apellido, :email, :fecha_nacimiento, :contrasena, :pais)");

        $query->bindValue(':nombre', $usuario->getNombreUsuario());
        $query->bindValue(':apellido', $usuario->getApellidoUsuario());
        $query->bindValue(':email', $usuario->getEmail());
        $query->bindValue(':fecha_nacimiento', $usuario->getFechaNacimiento());
        $query->bindValue(':contrasena', $usuario->getContrasenaUsuario());
        $query->bindValue(':pais', $usuario->getPais());
        $query->execute();

        $idUsuario = $this->conexion->lastInsertId();

        $usuario->setIdUsuario($idUsuario);

        return $usuario;
      }

      function buscamePorEmail($emailUsuario){
        $query = $this->conexion->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->bindValue(":email, $emailUsuario");
        $query->execute();

        $usuarioFormatoArray = $query->fetch(PDO::FETCH_ASSOC);

        if ($usuarioFormatoArray) {
          $usuario = new Usuario($usuarioFormatoArray["nombre"],$usuarioFormatoArray["apellido"],$usuarioFormatoArray['contrasena'], $usuarioFormatoArray['email'],$usuarioFormatoArray['pais'],$usuarioFormatoArray['fechaNacimiento'],$usuarioFormatoArray['idUsuario']);

          return $usuario;
        }else{
          return null;
          }
        }

      function traeTodaLaBase(){
        $query = $this->conexion->prepare("SELECT * FROM usuarios");
        $query->execute();

        $usuariosFormatoArray = $query->fetchAll(PDO::FETCH_ASSOC);

        $usuariosFormatoClase = [];

        foreach ($usuariosFormatoArray as $usuario)
            $usuariosFormatoClase[]= new Usuario($usuario["nombre"],$usuario["apellido"],$usuario['contrasena'], $usuario['email'],$usuario['pais'],$usuario['fechaNacimiento'],$usuario['idUsuario']);
        endforeach;

        return $usuariosFormatoClase;
      }

  // public function listarProductos(){
  //    $query = $db->query("SELECT * FROM products");
  //    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  //
  //    foreach ($results as $productos) {
  //      echo $productos[""] . "<br>"; //adentro de las comillas  van los campos que se quieran mostrar en el foreach;
  //    }
  // }

 }





?>
