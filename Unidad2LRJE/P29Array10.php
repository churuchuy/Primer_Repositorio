<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$nombre = array ("nombre1"=>"Emma","nombre2"=>"Emiliano","nombre3"=>"Lizeth","nombre4"=>"Karen",
"nombre5"=>"Susan","nombre6"=>"Aby","nombre7"=>"Luis","nombre8"=>"Miguel");
foreach($nombre as $persona=>$array)
	{echo "El ". $persona . ", " .$array ."esta en el array";
echo"<br>", "<br>";
}
?>