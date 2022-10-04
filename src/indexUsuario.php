<?php
require_once("./src/classUsuario.php");


$objUsuarioUno = new usuario ("Lidia Frias", "lidia@gmail.com", "Admin");
$objUsuarioDos = new usuario ("Pepe Lopez", "pepe@gmail.com", "Cliente");

// echo $objUsuarioUno->getNombre();
// echo $objUsuarioUno->getEmail();
echo $objUsuarioUno->getPerfil();

echo "<br><br>";

echo $objUsuarioDos->getPerfil();

?>