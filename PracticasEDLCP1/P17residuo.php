<?php
/* CBTIS 89
Programa que mmuestra numeros paares o impares
ERICK DE LA CRUZ PRIETO
3ºA PROGRAMACION MATUTINO
*/
echo "NUMEROS ALEATORIOS";
echo "<br>","<br>";

for ($k=1; $k<=5;$k++)
	{ $valor = rand(1,50);
		$resi=$valor % 2;
		echo " el numero es ", $valor;
		if($resi==0)
			{echo "es numero PAR","<br>","<br>";
	;}
	else
		{echo " es numero IMPAR","<br>", "<br>";}
}
?>