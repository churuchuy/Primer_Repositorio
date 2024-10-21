<?php
/*CBTIS 89
 Programa que almacena el nombre de 6
 personas con un arreglo y posteriormente
  por medio de un ciclo for.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$no1 ="anna";
$no2 ="karla";
$no4 ="Emmanuela";
$no5 ="Emiliano";
$no6 ="Luis";

$array = array ($no1,$no2,$no3,
	$no4,$no5,$no6,);

//se optiene el numero de elementos
$longitud = count ($array);

//Recorre todos los elementos
for($i=0;$i<$longitud;$i++)
{//se obtiene el balor de cada elemento
	echo $array[$i];
	echo"<br>";

}
?>