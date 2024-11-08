<?php
/*CBTIS 89
 Programa que almacena informacion de 6 personas y dependiendo de su edad 
 los contaviliza en diversos arreglos de acuerdo de las sigientes condiciones:
 menor a 18 grupo1 entre 18 y 49 grupo2 entre 50 o mas grupo3.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$Nombre = array("Paco","Anna","Lalo","Rosi","Lola","Beto");
$edad = array(17,30,71,38,12,58);
$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for ($a=0; $a<=5 ; $a++) { 
	if ($edad[$a]<18){
	  $grupo1[$a]=1;
	  $grupo2[$a]=0;
	  $grupo3[$a]=0;
	  }
	  elseif($edad[$a]>=18 && $edad[$a]<=49){
	  $grupo1[$a]=0;
	  $grupo2[$a]=1;
	  $grupo3[$a]=0;
	  }
	  elseif($edad[$a]>=50){
	  	 $grupo1[$a]=0;
	  $grupo2[$a]=0;
	  $grupo3[$a]=1;
	  }
}
echo "<br>";
echo "Nomb " . "&nbsp" . "Edad " . "grupo1 " . "grupo2 " . "grupo3 " . "<br>";
for ($a=0;$a<6;$a++){
	echo $Nombre[$a] . "----" . $edad[$a] . "------" . $grupo1[$a] . "------" . $grupo2[$a] . "--------" . $grupo3[$a] . "<br>";
}




?>