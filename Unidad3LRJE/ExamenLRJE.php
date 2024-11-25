<?php
/*CBTIS 89
Programa que da el promedio de de 4 alumnos segun sus calificaciones 
y diciendo si aprobo o reprobo.
programacion Matutino
Lopez Rojas Jesus Emiliano
3ºA p
*/

$alumnos=array("Luz","Fer","Leo","Ale");
$promedio=array();
$status=array("Aprobado","Reprobado");
$suma=array();
$calificaciones=array(
 array (6,4,5),array(7,8,9),array(7,9,5),array(5,4,6));
echo "calificaciones";
echo "<br>";
foreach($calificaciones as $calificacion){
	foreach($calificacion as $cali ){
		 echo "$cali";
	} 
      echo "<br>"; 
   }
for ($i=0;$i<=3;$i++){
     $suma[$i]=$cali+$cali+$cali;
     $promedio[$i]=$suma[$i]/3;
     if ($promedio<6) {
     	$status[]="Aprobado";
     }elseif ($promedio>6) {
     	$status[]="Reprobado";
     }
}
echo "CBTIS 89";
echo "<br>";
echo "Alumnos " . "&nbsp " . "Promedio " . "Status" . "<br>";
for ($j=0; $j<4; $j++){ 
	echo $alumnos[$j]." ............... ". $promedio[$j]." ........... ". $status[$j] ."<br>";
}

?>