<?php
/*CBTIS 89
 Programa que almacena datos de productos de una tienda en un arreglo junto con su precio 
 para cuando se acabe los productos cambiarlo por otro con el array_push para al final aparesca el total
 del producto y cuanto es de feria segun el billete que de.
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$array=array("Galletas Chokis " => "$15" , "Cocacola " => "$26" , "Chetos Naranjas " => "$20");
echo "_-EL NORTEÑO-_";
echo "<br>";
foreach($array as $producto =>$precio){
echo $producto . $precio , "<br>";
unset($array[3]); 
}
array_push($array,"Peluche oso " . "$28");
echo $producto . $precio , "<br>";


?>