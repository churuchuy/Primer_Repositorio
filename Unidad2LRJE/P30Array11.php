<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/

 $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

?>