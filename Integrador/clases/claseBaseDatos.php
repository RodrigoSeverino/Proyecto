<?php


 class baseDeDatos{
 	protected $nombreBD;
 	protected $tipoDeBD;
 	protected $BD_user;
 	protected $BD_pass;


   public function Conextion{
   	$dsn= "mysql:host=127.0.0.1;dbname=dbproyecto;port=3306";
    $db_user ='root';
    $db_pass ='';
    $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
    $db = new PDO($dsn, $db_user, $db_pass, $opt);
   } catch (PDOException $Exception) {
    echo $Exception->getMessage();
   }


   }


  public function listarProductos{

  }

  public function traerPorNombre{

  }

  public function traerPorId{

  }


 }





?>
