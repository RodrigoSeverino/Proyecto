<?php


class Producto {

   protected $nombreProducto = [];
   protected $idProducto = [];
   protected $precioProducto = [];
   protected $fotoProducto = [];
   protected $stockProducto = [];


  public function __construct(array $nombreProducto,array $idProducto,array $precioProducto,array $fotoProducto,array $stockProducto){


 $this->nombreProducto = $nombreProducto;
 $this->idProducto = $idProducto;
 $this->precioProducto = $precioProducto;
 $this->fotoProducto = $fotoProducto;
 $this->stockProducto= $stockProducto;
  }

//public function traerProductos(){
	//$query = $db->query("SELECT * FROM products");
    // $results = $query->fetchAll(PDO::FETCH_ASSOC);
      //foreach ($results as $productos) {
      	//echo $productos['nombreProducto','fotoProducto','idProducto','stockProducto','precioProducto'] . "<br>"
     // }
//}

public function traerProductosId(){
$query = $db->query("SELECT * FROM products");
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $id) {
      	echo $id['idProducto'];
      }
}


public function traerProductosNombre(){

 $query = $db->query("SELECT * FROM products");
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $nombre) {
      	echo $nombre['nombreProducto'];
      }
}

public function traerStock(){
  $query = $db->query("SELECT * FROM products");
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $nombre) {
        echo $nombre['stockProducto'];
      }

}

public function comprarse(){

}


public function descuento(){

}


public function promociones(){

}

}















?>
