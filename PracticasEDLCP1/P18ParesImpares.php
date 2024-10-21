<?php
/* CBTIS 89
Programa que suma pares e impares
ERICK DE LA CRUZ PRIETO
3ºA PROGRAMACION MATUTINO
*/


$np=0;$ni=0;
for($i=1;$i<=30;$i++)
{$residuo=$i % 2;
  if($residuo == 0)
	{$np=$np+$i;}
else
	{$ni=$ni+$i;}
}

echo "La suma de los numeros Pares 
es:",$np, "<br>";
echo "La suma de los numeros Impares 
es:",$ni, "<br>";


?>