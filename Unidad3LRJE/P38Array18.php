<?php
/*CBTIS 89
Programa que almacena datos en un areglo multidimencional y 
posteriormente los imprime en diferentes posiciones.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$datos = array(
array(10,20,30),array(40,50,60),array(70,80,90));
echo "NORMAL";
echo "<br>";
for($i=0;$i<3;$i++)
	{ for($j=0;$j<3;$j++)
		{ echo $datos[$i][$j]." "; }
		echo "<br>";
	}echo "<br>";
echo "FILAS A COLUMNAS";
echo "<br>";
for($i=0;$i<3;$i++)
	{ for($j=0;$j<3;$j++)
		{ echo $datos[$j][$i]." "; }
		echo "<br>";
	}
echo "<br>";
echo "COLUMNAS INVERSAS";
echo "<br>";
for($j=0;$j<2;$j++)
	{ for($i=2;$i<3;$i--)
		{ echo $datos[$i][$j]." "; }
		echo "<br>";
	}

?>