<?php
/*CBTIS 89
Programa que calcula los billetes o monedas que
necesita darte

De La Cruz Prieto
3°A Programacion Matutino*/
$Vacheque=6780;$cheque;
$billete1000;
$billete500;
$billete200;
$billete100;
$billete50;
$billete20;
$moneda10;
$moneda5;
$moneda2;
$moneda1;

$billete1000=floor($Vacheque/1000);
$cheque=$Vacheque%1000;

$billete500=floor($cheque/500);
$cheque=$cheque%500;

$billete200=floor($cheque/200);
$cheque=$cheque%200;

$billete100=floor($cheque/100);
$cheque=$cheque%100;

$billete50=floor($cheque/50);
$cheque=$cheque%50;

$billete20=floor($cheque/20);
$cheque=$cheque%20;

$moneda10=floor($cheque/10);
$cheque=$cheque/10;

$moneda5=floor($cheque/5);
$cheque=$cheque/5;

$moneda2=floor($cheque/2);
$cheque=$cheque/2;

$moneda1=floor($cheque/1);
$cheque=$cheque/1;

echo "<b>El valor del cheque es:</b>",$Vacheque; 
echo "<br>";
echo "El total de los billetes de 1000 es: ",$billete1000;
echo "<br>";
echo "El total de los billetes de 500 es: ",$billete500;
echo "<br>";
echo "El total de los billetes de 200 es: ",$billete200;
echo "<br>";
echo "El total de los billetes de 100 es: ",$billete100;
echo "<br>";
echo "El total de los billetes de 50 es: ",$billete50;
echo "<br>";
echo "El total de los billetes de 20 es: ",$billete20;
echo "<br>";
echo "El total de monedas de 10 es: ",$moneda10;
echo "<br>";
echo "El total de monedas de 5 es: ",$moneda5;
echo "<br>";
echo "El total de monedas de 2 es: ",$moneda2;
echo "<br>";
echo "El total de monedas de 1 es: ",$moneda1;

?>




