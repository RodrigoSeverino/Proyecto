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

}

public function traerProductosId(){

}


public function traerProductosNombre(){

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









