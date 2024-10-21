<?php
/*CBTIS 89
Programa que alamcena nombres de un equipo de futbol
de un ciclo for.
De La Cruz Prieto
3°A Programacion Matutino*/
$equipo = array("portero " => "Julio ","Defensa "=>"Diego
" ,"medio "=>"Jair ","Delantero "=>"Rafa ");

echo "** SELECCION NACIONAL **", "<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El jugador ". $jugador . " es el ". $posicion;
echo "<br>","<br>";
}
?>