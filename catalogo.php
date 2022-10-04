<?php

require_once("classMesa.php");

$objMesitaNoche = new Mesa("Mesita de noche", 10200);
$arrInfoProducto = $objMesitaNoche->getInfoProducto();

print_r('<pre>');
print_r($arrInfoProducto);
print_r('</pre>');

$objMesaTe = new Mesa("mesa de te", 22200,"casita","nogal","madera");
$arrInfoMueble = $$objMesaTe->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMueble);
print_r('</pre>');

// $objMesa= new Mesa ("mesa de te", 400,"pequeño","pino","madera", "3mt");
// $objMesa->setForma("Redonda");
// $arrInfoMesa = $objMesa->getInfoProducto();

// print_r('<pre>');
// print_r($arrInfoMesa);
// print_r('</pre>');

?>