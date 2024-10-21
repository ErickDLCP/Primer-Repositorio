<?php
/*CBTIS 89
Programa que muestra los precios de una tienda de ropa
De La Cruz Prieto
3°A Programacion Matutino*/
$Ropa = array("$100 " => "playera ","$250 "=>"camisa
" ,"$300 "=>"pantalones ","$200 "=>"bermuda ");

echo "** TIENDA DE ROPA **", "<br>","<br>";
foreach($Ropa as $precio=>$prenda)
{echo "La ". $prenda . " tiene un costo de ". $precio;
echo "<br>","<br>";
}
?>