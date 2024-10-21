<?php
/* CBTIS 89
Programa que calcula el total a pagar 
Erick De La Cruz Prieto
3ºA programacion Matutino
*/
$art1;$art2;$art3;$Total;$Descuento;
$art1= 1200;
$art2= 2700;
$art3 = 300;
$Total=$art1+$art2+$art3;
$Descuento;

echo "El costo del articulo 1 es ", $art1;
echo "<br>";
echo "El costo del articulo 2 es ", $art2;
echo "<br>";
echo "El costo del articulo 3 es ", $art3;
echo "<br>";
echo "El costo de todos los articulos es ", $Total;
echo "<br>";

if($Total<1000)
{$Descuento=$Total*0.05;
 $Total= $Total-$Descuento;

echo "El descuento del 5% es ", $Descuento, " Pesos";
echo "<br>";
echo "Dando un total de ", $Total;
}
 
 elseif($Total>=1000 && $Total<2500)
{$Descuento=$Total*0.10;
 $Total= $Total-$Descuento;

echo "El descuento del 10% es ", $Descuento, " Pesos";
echo "<br>";
echo "Dando un total de ", $Total;
}

else
{$Descuento=$Total*0.20;
 $Total= $Total-$Descuento;

echo "El descuento del 20% es ", $Descuento, " Pesos";
echo "<br>";
echo "Dando un total de ", $Total;
}

?>

