<?php
/*CBTIS 89
 Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
 En el Arreglo1 van los pares, en el $Arreglo2 van los numeros impares, en el $Arreglo3 va la
suma de los numeros correspondiente al mismo indice.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/


$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();
for ($i=150;$i<=200;$i++) 
	{$residuo=$i%2;
if($residuo==0)
  {$Arreglo1[]=$i;
 $Arreglo2[]=$i+1;}
}
for ($h=0;$h<count($Arreglo1);$h++){
$Arreglo3[$h] = $Arreglo1[$h]+$Arreglo2[$h];
}echo "CBTIS 89";
echo "<br>";
echo "Arreglo1 " . "&nbsp" . "Arreglo2 " . "Arreglo3 " . "<br>";
for ($j=1;$j<26;$j++){
	echo $Arreglo1[$j] . "---------" . $Arreglo2[$j] . "---------" . $Arreglo3[$j] . "<br>";
}




?>