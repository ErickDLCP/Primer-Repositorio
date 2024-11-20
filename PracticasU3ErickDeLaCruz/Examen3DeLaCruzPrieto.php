<?php
$Alumnos=array("Luz","Fer","Leo","Ale");
$Calificaciones = array(
	array(6, 4 , 5), array(7, 9, 8),array(7, 9, 5),array(5, 4, 6));
$Promedio=array();
$Status=array("Aprobado","Reprobado");

for ($i=0; $i<4 ; $i++) {
for ($j=0; $i<3 ; $j++) {
	$Status=$Status+$Promedio[$i][$j];
}

$Promedio[]=$Califiaciones/3;
$Status[]=$Promedio;
}
echo "<br>";
echo "<br>"."**CBTIS 89**"."<br>";
	echo "Alumnos----Calificaciones----Promedio-----Status<br>";
	for($i = 0; $i<4; $i++);

echo "---".$Alumnos[$i]."----------".$Calificaciones[$i]."----------".$Promedio[$i]."-----------".$Status[$i];



?>