<?php
/*CBTIS 89
 Programa que 
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

$arrayNombres=array("Emmanuela","Karla","Jesus","Adilene","Ander","Kiki");
echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for";
echo "<br>";

foreach($arrayNombres as $nombre){
      echo $nombre . " <BR>";
   }
  echo "<br>"; 
   echo"Posteriormente se agregaron cuatro datos y se eliminaron dos";
   echo "<br>","<br>";

array_push($arrayNombres, "Luis","mayra","Mia","Amada");
unset($arrayNombres[2]);
unset($arrayNombres[1]);

echo "Datos de arreglo ordenados de forma decendente por medio de un ciclo for ";
echo "<br>";
rsort($arrayNombres);
foreach($arrayNombres as $nombre){
      echo $nombre . " <BR>";
   }
count($arrayNombres);
echo "tienes un total de datos de ", $arrayNombres;

?>