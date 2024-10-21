<?php
/*CBTIS 89
progrma que muestra numeros aleatorios del 1 al 100
De La Cruz Prieto
3°A Programacion Matutino*/
$numeros = array();

for ($j=1;$j<=100;$j++)
{ $numeros[]=$j;}

foreach ($numeros as $valor)
if($valor % 2 == 0)

	{echo $valor." ";}

?>