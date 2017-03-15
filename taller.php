<?php

 
     $i=0;
	 $j=0;
	 $esPrimo=0; 
	 //primer for
     for($i = 2; $i <= 100; $i++) 
     { 
         $esPrimo = 1; 
		 //segundo for
          for($j = 2; $j < $i; $j ++) {
               if(!($i % $j)) 
               { 
                    $esPrimo = 0;  
               } 
          }
		  //if para imprimir si el numero es primo
		  if($esPrimo) {
               echo $i."<br>"; 
	      }
     } 


?>

