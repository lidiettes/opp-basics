<?php
require_once("classEmpleado.php");
require_once("classCliente.php");

$objEmpleado = new Empleado( 5729, "Andres Perez", "andres@gmail.com");
$objEmpleado->setPuesto("Administrador");

echo $objEmpleado->getPerfil();
echo "Puesto: ".$objEmpleado->getPuesto();


$objCliente = new Cliente( 5678, "Maria Garcia", "maria@gmail.com");
$objCliente->setCredito("1000");

echo $objCliente->getPerfil();
echo "Creditos: ".$objCliente->getCredito();



?>