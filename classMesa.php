<?php

require_once ("classMueble.php");
class Mesa extends Mueble{
    private $strForma = "";
    protected $strTamaño;

    //añado y modifico propiedad
    public $strStatus ="Activo";

public function __construct(string $descripcion, float $precio, String $marca, string $material, string $tamaño){
    parent::__construct($descripcion,$precio, $marca, $material);
    $this ->strTamaño = $tamaño;
}


//aplicamos refefinicion añadiendo propiedades y metodos
public function getInfoProducto(){
    $arrProducto = array('producto'=>$this-> strDescripcion,
                        'precio' => $this-> fltPrecio,
                        'stock_minimo'=>$this-> intStockMinimo, 
                        'estado' => $this -> strStatus,
                        'material'=>$this->strMaterial,
                        'tamaño'=>$this->strTamaño,
                        'Forma'=>$this->strForma
                        
                    );
    return $arrProducto;
}
//metodo
public function setForma(string $forma){
    $this->strForma = $forma;
}

} //end

?>