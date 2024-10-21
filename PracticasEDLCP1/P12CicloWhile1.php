<?php
/* CBTIS 89
programa que impriem los valores desde el uno hata el 
nunmero aleatorio generado.
ERICK DE LA CRUZ PRIETO
3ºA PROGRAMACION MATUTINO
*/

$valor = rand(1,100);
$inicio = 1;
while ($inicio <= $valor)
{echo $inicio;
	echo "<br>";
	$inicio ++;
}
?>