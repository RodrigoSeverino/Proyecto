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

public function listarProductos(){
	$query = $db->query("SELECT * FROM products"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $productos) {
      	echo $productos['name','photo'] . "<br>"
      }
} 

public function traerProductosId(){
$query = $db->query("SELECT * FROM products"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $id) {
      	echo $id['id'];
      }
}


public function traerProductosNombre(){

 $query = $db->query("SELECT * FROM products"); 
     $results = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $nombre) {
      	echo $nombre['name'];
      }
}

public function traerStock(){
   
}

public function comprarse(){

}


public function descuento(){

}


public function promociones(){

}

}















?>









