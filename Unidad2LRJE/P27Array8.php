<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$num = array($np,$ni);
for ($j=1;$j<=100;$j++)
	{$num[]=$j;}
foreach ($num as $val){
	if($val%2==0)
	{echo $val." ";}
	}

echo "La suma de los numeros pares
es: " ,$num, "<br>";
echo "la suma de los numeros impares
es: " ,$num1;

?>