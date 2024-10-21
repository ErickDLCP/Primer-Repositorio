<?php
$nombres = array("Erick","Ulises","Angel","Brayan","Gera","Cesar");
for ($i=0; $i<=5; $i++){
	echo $arraynombres[$i];
	echo"<br>";

echo"<br>";
unset($arraynombres[1]);
unset($arraynombres[2]);
array_push($arraynombres,"Eduardo","Gabriel","Ana","Karen");
rsort($arraynombres);
for ($i=0; $i<=7; $i++){
	echo $arraynombres[$i];
	echo"<br>";}