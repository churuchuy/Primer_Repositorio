<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo
 y posterior mente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$equipo = array("Portero" =>'luis','Defensa' =>'Diego','Medio' =>'Jair','Delantero' =>'Rafa' );
echo "**SELECCION NACIONAL**","<br>","<br>";
foreach($equipo as $posicion =>$jugador)
{echo " El jugador "  .  $jugador  .  " es el "  .  $posicion;
echo"<br>","<br>";
}
?>