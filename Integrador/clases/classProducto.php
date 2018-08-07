<?php


class Producto {

   private $nombreProducto;
   private $idProducto;
   private $precioProducto;
   private $fotoProducto;
   private $stockProducto;


  public function __construct($nombreProducto,$idProducto,$precioProducto,$fotoProducto,$stockProducto){


 $this->nombreProducto = $nombreProducto;
 $this->idProducto = $idProducto;
 $this->precioProducto = $precioProducto;
 $this->fotoProducto = $fotoProducto;
 $this->stockProducto= $stockProducto;
  }

   public function getnombreProducto(){
  return $this->nombreProducto;
 }
 public function setnombreProducto($nombreProducto){
  $this->nombreProducto = $nombreProducto;
 }

public function getidProducto(){
  return $this->idProducto;
 }


 public function setidProducto($idProducto){
  $this->idProducto= $idProducto;
 }


 public function getprecioProducto(){
  return $this->precioProducto;
 }


 public function setprecioProducto($precioProducto){
    $this->precioProducto = $precioProducto;
 }

 public function getfotoProducto(){
  return $this->fotoProducto;
 }


 public function setfotoProducto($fotoProducto){
    $this->fotoProducto = $fotoProducto;
 }

 public function getstockProducto(){
  return $this->fotoProducto;
 }


 public function setstockProducto($stockProducto){
    $this->stockProducto = $stockProducto;
 }


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
