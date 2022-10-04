<?php

require_once("classProducto.php"); // interfaz
require_once("classAbs.php"); 

class Mueble extends otrasCosas implements Producto{
    
    public $strMaterial;
    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";
//falta una que sea estatica 

    //metodo contructor
    public function __construct(string $descripcion, float $precio, String $marca, string $material){
        parent::__construct($descripcion,$precio);

        $this ->strDescripcion = $description;
        $this ->fltPrecio = $precio;
        $this->strMaterial = $material;
        $this ->strColor = $color;
    }

    //metodo
    public function getInfoProducto(){
        $arrProducto = array('producto'=>$this-> strDescripcion,
                            'precio' => $this-> fltPrecio,
                            'stock_minimo'=>$this-> intStockMinimo, 
                            'estado' => $this -> strStatus,
                            'material'=>$this->strMaterial
                        );
        return $arrProducto;
    }

    //prueba con teoria
    public function setStock(){
        $this->intStockMinimo = $intStockMinimo;
    }

    public function setPrice(){
        return "Price: {$this-> price}€";
    }

//destructor 

    function __destruct(){ 
        echo "<br>destruido: " . $this->fltPrecio; 
    }
}


?>