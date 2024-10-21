<?php
/*CBTIS 89
Programa que alamcena diversos los nombres de
6 personas en un arreglo y posteriormente los imprime 
por medio de un ciclo for
de un ciclo for.
De La Cruz Prieto
3°A Programacion Matutino*/
$nombre = "Anna";
$arraynombres = array("Karina","Marco","Erick","Ulises","Brayan","Angel");

//se obtiene el numero de elementos
$longitud = count($array);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
 echo $array[$i];
 echo "<br>";
 }

 ?>
