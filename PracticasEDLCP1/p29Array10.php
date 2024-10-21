<?php
/*CBTIS 89
Programa que muuestra si un nombre esta o no en el array
De La Cruz Prieto
3°A Programacion Matutino*/
$name=0;
$nombre= "Erick";
$nombres = array ("Juan","Pedro","Ulises","Erick");
foreach ($nombres as $persona) {

	if ($persona==$nombre){
		$name=1;
		echo "El nombre ".$nombre." esta en el array";
	}

}
if($name==0){
	echo "El nombre ".$nombre." no esta en el array";
}
?>