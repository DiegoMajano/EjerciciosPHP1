<?php

function esPrimo ($number) {
    // si es menor a 2 no es primo, no cuenta numeros negativos ni el 1 (en teoria xd)
    if($number < 2 ) return false; 

   for ($i=2; $i < $number; $i++) { 
    if($number%$i==0) return false; // si hay un solo numero que divida al number retorna false
   }

   return true; 
}

$n = 1;

if(esPrimo($n)) 
print("el número ". $n. " es primo");
else 
print("el número ". $n. " no es primo");

?>