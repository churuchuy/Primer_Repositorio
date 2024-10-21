<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo
 y posterior mente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$equipo = array("Miguel" =>'Programacion','Karla' =>'ARH','Emma' =>'Contaduria','Manuel' =>'Medicina' );
echo "**SELECCION NACIONAL**","<br>","<br>";
foreach($equipo as $Alumno =>$Especialidad)
{echo " El alumno "  .  $Alumno  .  " de "  .  $Especialidad . " esta en la escuela CBTIS 89 ";
echo"<br>","<br>";
}
?>