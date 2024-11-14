<?php

function obtenerFrecuencia($words) {

    $frequency = [];

    for ($i=0; $i < strlen($words); $i++) { 
        
        $word = substr($words,$i,1); // extrae el caracter actual

        if(isset($frequency[$word])) { // si ya existe la clave se cambia su valor en 1

            $frequency[$word] = $frequency[$word] + 1;
        }
        else { // si no existe la clave se inicializa en 1
            
            $frequency[$word] = 1; 
        }
    }

    return $frequency;
}

$words = "esta es una cadena de texto compleja";

print_r(obtenerFrecuencia($words));

?>