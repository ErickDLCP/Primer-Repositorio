<?php
/*CBTIS 89
Programa que mustra los precios de una fruteria
de un ciclo for.
De La Cruz Prieto
3°A Programacion Matutino*/
$frutas = array("Manzana " => "25 ","Mango "=>"40
" ,"limon "=>"35 ","Naranja "=>"20 ");

echo "** FRUTERIA DEL SUR **", "<br>","<br>";
foreach($frutas as $precio=>$frutas)
{echo "El kilo de ". $precio . "cuesta ". $frutas;
echo "<br>","<br>";
}
?>