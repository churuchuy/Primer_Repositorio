<?php
/*CBTIS 89
 Programa que 
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$arraydatos = ["Karla ","Emmanuela ","Jesus "];

$string = implode(" ",$arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

$cadena = "Tercero de programacion M.T";

$array = explode (" ", $cadena);
$longitud = count($array); 
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
for ($i=0; $i<$longitud; $i++)
	{
	echo $array[$i];
	echo "<br>";	
	}
?>