<?php
/* CBTIS 89
Programa que une cadenas de texto 
Erick De La Cruz Prieto
3ºA programacion Matutino
*/

$edad=15;
$nombre= "Erick";
$apellido1 = "De La Cruz";
$apellido2 = "Prieto";

echo "Tu nombre es ",$nombre." ".$apellido1." ".$apellido2;
echo "<br>";
echo "Tienes ", $edad, " años";

if($edad>=18)
{echo "<br>";
echo "Eres mayor de edad";}
else
{echo "<br>";
echo "Eres menor de edad";}

?>