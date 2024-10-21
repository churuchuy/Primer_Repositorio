<?php
/*CBTIS 89
 Programa que 
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$arraynumerico = array("Camisa","Pantalón","Cinturón","Gorra", "Calcetines");

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>