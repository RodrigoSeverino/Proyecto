<?php


 class baseDeDatos{
 	protected $nombreBD;
 	protected $tipoDeBD;
 	protected $BD_user;
 	protected $BD_pass;


   public function Conextion(){
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


  public function listarProductos(){
     $query = $db->query("SELECT * FROM products"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($results as $productos) {
       echo $productos[""] . "<br>"; //adentro de las comillas  van los campos que se quieran mostrar en el foreach;
     }
  }

  public function traerPorNombre(){
  $query = $db->query("SELECT *"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function traerPorId(){
   $query = $db->query("SELECT *"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
  }


 }





?>
