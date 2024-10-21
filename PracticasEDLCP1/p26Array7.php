<?php
/*CBTIS 89
Programa que almacena datos ene un arreglo 
y luego imprime por medio de un ciclo for
de un ciclo for.
De La Cruz Prieto
3°A Programacion Matutino*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>