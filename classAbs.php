<?php


abstract class otrasCosas {
    private $strForma = "";
    protected $strTamaño;


public function __construct(string $descripcion, float $precio, String $marca, string $material, string $tamaño){
    parent::__construct($descripcion,$precio, $marca, $material);
    $this ->strTamaño = $tamaño;
}

//metodos que rescatamos de superclase

abstract function setStock();

abstract function setPrice();

}

?>