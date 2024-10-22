<?php
/*CBTIS 89
Programa que muestra los precios de una tienda de autopartes
Erick De La Cruz Prieto
3°A Programacion Matutino*/
$partes = array("$4000 " => "bateria ","$300 "=>"anticongelante
" ,"$250 "=>"aceite ","$1500 "=>"llantas ","$200 "=>"filtro de aceite","$150"=>"filtro de aire");

echo "** AUTOPARTES ERICK **", "<br>","<br>";
foreach($partes as $precio=>$parte)
{echo "La/El ". $parte . " tiene un costo de ". $precio;
echo "<br>","<br>";                                                                                            
}
?>