<?php
/*CBTIS 89
P20Array2.php
Programa que alamcena diversos datos en un 
arreglo y posteriormente los imprime por medio
de un ciclo for.
De La Cruz Prieto
3°A Programacion Matutino*/
$nombre = "Anna";
$array = array(1, 2, 3, "casa", $nombre);

//se obtiene el numero de elementos
$longitud = count($array);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
 echo $array[$i];
 echo "<br>";
 }

 ?>
