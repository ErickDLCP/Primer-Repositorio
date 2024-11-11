<?php
$Arreglo1 = array();
$Arreglo2 = array(); 
$Arreglo3 = array(); 

for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i; 
    } else {
        $Arreglo2[] = $i; 
    }
}


for ($i = 0; $i < count($array1); $i++) {
   
    if (isset($Arreglo2[$i])) {
        $Arreglo3[] = $Arreglo1[$i] + $Arreglo2[$i];
    } else {
        $Arreglo3[] = $Arreglo1[$i]; 
    }
}
echo "CBTIS 89<br>";
echo "Arreglo1 ------- Arreglo2 ------- Arreglo3","<br>";

echo "<br>";
echo "<br>"."**CBTIS 89**"."<br>";
	echo "Arreglo1----Arreglo2----Arreglo3<br>";
	for($i = 0; $i<5; $i++){

echo $Arreglo1[$i]."----------".$Arreglo2[$i]."-----------".$Arreglo3[$i]."<br>";
}
?>
}
?>