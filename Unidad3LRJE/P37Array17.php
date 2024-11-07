<?php
/*CBTIS 89
 Programa que separar los pares de los impares para luego imprimirlos para al final sumarlos.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$arraynumeros=array(4,7,-6,18,-15,14,-33,42,11,-10,-55,-22,28,-9,1);
$arraypositivo=array();
$arraynegativo=array();
$sumapositiva = 0;
$sumanegativa = 0;

foreach ($arraynumeros as $numero){
	if($numero >=0)
	{$arraypositivo[] = $numero;
	 $sumapositiva += $numero;
	}
	else{$arraynegativo[] = $numero;
	 $sumanegativa += $numero;
	}

	}
echo "NUMEROS POSITIVOS: ";
echo implode(", ", $arraypositivo) . "<br>";

echo "NUMEROS NEGATIVOS: ";
echo implode(", ", $arraynegativo) . "<br>";

echo "La suma de los numeros positivos es : " . $sumapositiva . "<br>";
echo "La suma de los numeros negativos es : " . $sumanegativa . "<br>";
?>


