<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo
 y posterior mente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$e = array("Manzana" =>'Kilo'=>'$25' ,'Mango' =>'Kilo'=>'$25','Limon' =>'Kilo'=>'$25','Naranja' =>'Kilo'=>'$25' );
echo "**FRUTERIA DEL NORTE**","<br>","<br>";
foreach($e as $Fruta =>$Kilo=>$Cuesta)
{echo " El  "  .  $Kilo  .  " de "  .  $Fruta . "cuesta" . $Cuesta ;
echo"<br>","<br>";
}
?>