<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>