<?php

$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad = array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();
$longitud=count($Nombre)-1;
for($i=0;$i<$longitud;$i++)
{
if($Edad[$i]<18){
$Grupo1[]=1;
$Grupo2[]=0;
$Grupo3[]=0;
}
else if($Edad[$i]>18 && $Edad[$i]<49){
$Grupo1[]=0;
$Grupo2[]=1;
$Grupo3[]=0;
}
if($Edad[$i]>=50){
$Grupo1[]=0;
$Grupo2[]=0;
$Grupo3[]=1;
}
}
echo "<br>";
echo "<br>"."**CBTIS 89**"."<br>";
	echo "Nombre----Edad----Grupo1----Grupo2----Grupo3<br>";
	for($i = 0; $i<5; $i++){

echo $Nombre[$i]."----------".$Edad[$i]."-----------".$Grupo1[$i]."-----------".$Grupo2[$i]."-----------".$Grupo3[$i]."<br>";
}
?>