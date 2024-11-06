<?php
/*CBTIS 89
 Programa que separar los pares de los impares para luego imprimirlos para al final sumarlos.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$arraynumeros=array(4,7,-6,18,-15,14,-33,42,11,-10,-55,-22,28,-9,1);
$arraypositivo=array();
$arraynegativo=array();

$longitud = count($arraynumeros);
for ($j=1;$j<=$longitud;$j++)
	{$arraypositivo[]=$j;}
foreach ($arraypositivo as $arraynegativo){
	if($arraynegativo%2==0)
	{echo $arraynegativo . " ";}
	}



?>



