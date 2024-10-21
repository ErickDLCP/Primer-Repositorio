<?php
$Cali1;$Cali2;$Cali3;$Promedio;$Nombre;
$Nombre="Ulises";
$Cali1=7.0;
$Cali2=6.8;
$Cali3=8.9;
$Promedio=($Cali1+$Cali2+$Cali3)/3;

echo "La primera calificacion de:".$Nombre." es: ",$Cali1;
echo "<br>";
echo "La primera calificacion de:".$Nombre." es: ",$Cali2;
echo "<br>";
echo "La primera calificacion de:".$Nombre." es: ",$Cali3;
echo "<br>";
echo "El promedio final es: ",$Promedio;
echo "<br>";

if ($Promedio>6)
{echo "El alumno aprobo";}
else
{echo "El alumno reprobo";}
?>