<?php
/*CBTIS 89
Programa que almacena datos en dos arreglos
posteriormente realiza operaciones entre ellos 
y coloca loas resultados en otros arreglos (suma,
resta, multiplicacion y division) al final imprime el contenido
de todos los arreglos.
Erick De La Cruz Prieto
3ºA Programacion Matutino*/


echo "** SUMA **", "<br>";
$arraydatos = array("10", "20", "30", "40", "50");
$arraydatos2 = array("3", "7", "6", "15", "18");
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivision = array();

for ($i=0; $i<=4; $i++)
{
	$arraysuma[]=$arraydatos[$i]+$arraydatos2[$i];
	echo $arraydatos[$i]."+". $arraydatos2[$i]."=".$arraysuma[$i];
	echo"<br>";

}
echo "** RESTA **", "<br>";
$arraydatos = array("10", "20", "30", "40", "50");
$arraydatos2 = array("3", "7", "6", "15", "18");
$arrayresta = array();

for ($i=0; $i<=4; $i++)
{
	$arrayresta[]=$arraydatos[$i]-$arraydatos2[$i];
	echo $arraydatos[$i]."-". $arraydatos2[$i]."=".$arrayresta[$i];
	echo"<br>";
}
echo "** MULTIPLICACION **", "<br>";
$arraydatos = array("10", "20", "30", "40", "50");
$arraydatos2 = array("3", "7", "6", "15", "18");
$arraymulti = array();

for ($i=0; $i<=4; $i++)
{
	$arraymulti[]=$arraydatos[$i]*$arraydatos2[$i];
	echo $arraydatos[$i]."*". $arraydatos2[$i]."=".$arraymulti[$i];
	echo"<br>";
}
echo "** DIVISION **", "<br>";
$arraydatos = array("10", "20", "30", "40", "50");
$arraydatos2 = array("3", "7", "6", "15", "18");
$arraydivision = array();

for ($i=0; $i<=4; $i++)
{
	$arraydivision[]=$arraydatos[$i]/$arraydatos2[$i];
	echo $arraydatos[$i]."/". $arraydatos2[$i]."=".$arraydivision[$i];
	echo"<br>";
}
?>