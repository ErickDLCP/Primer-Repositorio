<?php
/*CBTIS 89
P34array15.php
Programa que convierte los datos de un
arreglo en una cadena de texto y de forma 
contraria es decir convierte una cadena de texto
a ele (mentos dentro de un aarreglo.
Erick De La Cruz Prieto*/

$arraydatos = ["Karina","Rosales","Orozco"];
$string = implode (" ",$arraydatos);
echo"Cadena de texto <br>";
echo $string;
echo "<br>","<br>";
$cadena = "tercero de programacion matutino";
$array = explode(" ",$cadena);
$longitud = count($array);
echo"<br>";
echo "arreglo con datos de tipo string <br>";
 for($i=0; $i<$longitud; $i++)
 {
 	echo $array[$i];
 	echo "<br>";
 }