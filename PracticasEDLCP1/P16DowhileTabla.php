<?php
/* CBTIS 89
PROGRAMA QUE MUESTRA LA TABLA DE MULTIPLICAR DEL 9
ERICK DE LA CRUZ PRIETO
3ºA PROGRAMACION MATUTINO
*/
echo "Tabla de multiplicar del 9";
echo "<br>","<br>";
$tabla=9;
$j=1;
do

	{$resu=$tabla*$j;
    $resultado = 9 * $j;
    echo $tabla, " x ", $j, " = ",$resu;
    echo "<br>","<br>";
    $j++;
      }while($j<=10);
  ?>
