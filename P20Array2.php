<?php
/*CBTIS 89
 Programa que almacena diversos datos en un arreglo
 y posteriormente los imorime por medio de un 
 ciclo for.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$nombre = "anna";
$array = array(1,2,3, "casa", $nombre);

//se optiene el numero de elementos
$longitud = count ($array);

//Recorre todos los elementos
for($i=0;$i<$longitud;$i++)
{//se obtiene el balor de cada elemento
	echo $array[$i];
	echo"<br>";

}
?>