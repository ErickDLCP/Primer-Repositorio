<?php
/* CBTIS 89
programa que imprime los valores desde el uno hasta el 
nunmero aleatorio generado.
ERICK DE LA CRUZ PRIETO
3ºA PROGRAMACION MATUTINO
*/

$valor = rand(1,100);
$inicio = 1;
do {
	echo $inicio;
	echo "<br>";
	$inicio ++;
} while ($inicio <= $valor);
?>