<?php
/*CBTIS 89
Programa que almacena datos en un arreglo,
luego los imprime y los ordena de forma ascendente o decendente
De La Cruz Prieto
3°A Programacion Matutino*/
$ropa = array("camisas","pantalon","cinturon","Gorra","Calcetines");
var_export($ropa);
echo "<p>";
sort($ropa);
var_export($ropa);