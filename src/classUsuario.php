<?php

class Usuario {
//Propiedades
    public $intDpi;
    public $strNombre;
    public $strEmail;
    private $strClave;

//constructor
    function __construct(int $dpi, string $nombre, string $email){
        $this-> intDpi = $dpi;
        $this-> strNombre = $nombre;
        $this-> strEmail = $email;
        $this-> strClave = rand();
    }


//3 metodos

public function getNombre():string{
    return $this-> strNombre;
}

public function getEmail():string{
    return $this-> strEmail;
}

public function getPerfil(){

    $datos = "
    <h2>Datos personales</h2>
    DPI: {$this->intDpi}<br>
    Nombre: {$this->strNombre}<br>
    Edad:{$this->strEmail}<br>
    ";
    
    return $datos;
}


}  //end

?>