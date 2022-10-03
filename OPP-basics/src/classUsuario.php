<?php

class Usuario {
//Propiedades

    public $strNombre;
    public $strEmail;
    private $strClave;

//constructor
    function __construct(string $nombre, string $email){
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
    echo "Datos del usuario <br>";
    echo "Nombre: ". $this-> strNombre."<br>";
    echo "Email: ". $this-> strEmail."<br>";
    echo "Clave: ". $this-> strClave."<br>";
}


}  //end

?>