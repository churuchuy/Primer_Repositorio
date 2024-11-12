<?php
/*CBTIS 89
Programa que almacena almacena en un arregalo llamado
$compras el valor de 6 compras para en otro arreglo
se almacena informacion de las siguientes condiciones
El contenido del arreglo $Descuento se llenara de la sigiente forma
compra menor 300 = 0
compra mayor 300 y menor o igual a 1000 = 10%
compra mayor 1000 y menor o igual a 2500 = 15%
compra mayor 2500 y menor o igual a 5000 = 20%
compra mayor a 5000 = 25%
En el arreglo $Total se coloca la diferecia de la compra  y el
descuento y el arreglo $Porcentaje del descuento.
programacion Matutino
Lopez Rojas Jesus Emiliano
3ºA p
*/

$Compras=array(800,2700,1900,150,7600,1000);
$Descuentos=array();
$Total=array();
$Porcentaje=array();

foreach ($Compras as $Compra) {

if ($Compra<300){
	$PorcentajeDescuento=0;
}
elseif ($Compra>=300 && $Compra<=1000) {
	$PorcentajeDescuento=10;
}
elseif ($Compra>=1000 && $Compra<=2500){
	$PorcentajeDescuento=15;
}
elseif ($Compra>=2500 && $Compra<=5000){
	$PorcentajeDescuento=20;
}
elseif ($Compra>=5000){
	$PorcentajeDescuento=25;
}

$MontoDescuento=($Compra*$PorcentajeDescuento/100);

$Descuentos[]=$MontoDescuento;
$Total[]=$Compra-$MontoDescuento;
$Porcentaje[]=$PorcentajeDescuento;
}

echo "Compras " . "&nbsp " . "Descuentos " . "Total " . "Porcentaje" . "<br>";
for ($j=0; $j<count($Compras); $j++){ 
	echo "".$Compras[$j]." ...... ". $Descuentos[$j]." ...... ". $Total[$j]."...... ". $Porcentaje[$j]."%"."<br>";
}
?>