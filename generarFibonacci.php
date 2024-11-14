<?php

    function generarFibonacci ($n) {

        $series = [0,1]; // inicializar la serie con 0 y 1

        for ($i=2; $i < $n; $i++) { 
            $series[] = $series[$i-2] + $series[$i-1]; // sumando las 2 posiciones anteriores al actual
        }
        return $seriesFibonacci = implode(", ",$series); // crear un string a base del array
    }

    print(generarFibonacci(6))
    
?>