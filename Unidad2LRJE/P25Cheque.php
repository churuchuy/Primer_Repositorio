<?php
/*CBTIS 89
Programa que imprime el cambio de los bolletes  
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$cheque=3000;
$B1000=floor($cheque/1000);
echo "tienes ", $B1000 ," de 1000";
echo "<br>","<br>";
$B1000=floor($cheque/500);
echo "tienes ", $B1000 ," de 500";
echo "<br>","<br>";
$B1000=floor($cheque/200);
echo "tienes ", $B1000 ," de 200";
echo "<br>","<br>";
$B1000=floor($cheque/100);
echo "tienes ", $B1000 ," de 100";
echo "<br>","<br>";
$B1000=floor($cheque/50);
echo "tienes ", $B1000 ," de 50";
echo "<br>","<br>";
$B1000=floor($cheque/20);
echo "tienes ", $B1000 ," de 20";
echo "<br>","<br>";
$B1000=floor($cheque/10);
echo "tienes ", $B1000 ," de 10";
echo "<br>","<br>";
$B1000=floor($cheque/5);
echo "tienes ", $B1000 ," de 5";
echo "<br>","<br>";
$B1000=floor($cheque/2);
echo "tienes ", $B1000 ," de 2";
echo "<br>","<br>";
$B1000=floor($cheque/1);
echo "tienes ", $B1000 ," de 1";

?>