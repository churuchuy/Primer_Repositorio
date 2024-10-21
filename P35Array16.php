<?php
/*CBTIS 89
 Programa que suma dos arreglos.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$array1 = array (10,8,15,20,40);
$array2 = array (5,3,7,5,30); 
$s = array ();
$r = array ();
$m = array ();
$d = array ();

$longitud = count($array1); 

for ($i=0; $i<=$longitud; $i++){
$s[$i] = $array1[$i]+$array2[$i];
$r[$i] = $array1[$i]-$array2[$i];
$m[$i] = $array1[$i]*$array2[$i];
$d[$i] = $array1[$i]/$array2[$i];
}

echo "SUMA ENTRE AREAGLOS <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $array1[$i]." + ".$array2[$i]." = ".$s[$i];
 echo "<br>","<br>";}
echo "RESTA ENTRE AREAGLOS <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $array1[$i]." - ".$array2[$i]." = ".$r[$i];
 echo "<br>","<br>";}
echo "MILTIPLICASION ENTRE AREAGLOS <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $array1[$i]." X ".$array2[$i]." = ".$m[$i];
 echo "<br>","<br>";}
 echo "DIVICION ENTRE AREAGLOS <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $array1[$i]." / ".$array2[$i]." = ".$d[$i];
 echo "<br>","<br>";}
?>