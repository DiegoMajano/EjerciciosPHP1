<?php 

function esPalindroma($word) {

    $reverse_word = strrev($word); // le damos vuelta a la palabra

    for ($i=0; $i < strlen($word); $i++) { 
        // verificamos que los caracteres coincidan en la misma posicion de la palabra original y la reverse
        if(substr($word,$i,$i+1) !== substr($reverse_word,$i, $i+1))
        {
            return false; 
        }   
    }

    return true;
}

$word = "ANILINA";

if(esPalindroma($word)) 
print("La palabra ".$word." SI es palindroma");
else
print("La palabra ".$word." NO es palindroma");


?>