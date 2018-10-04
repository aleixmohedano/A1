<?php

//establecemos las variables
$primos = array();
$val = false;
//hacemos un bucle que consiste en ir numero a numero hasta el 100 y dividirlo entre 2 y si el sobrante es 0 entonces el numero es primo
for ($c = 2; $c<100; $c++) {
     $val = true; 
        for ($c2 = 2; $c2<=($c/2); $c2++) {
                if ($c%$j==0) {
                    //si el numero es primo ponemos la bandera en false
                          $val = false;
                                  break;
                                }
                   }
        if ($val) {
            //con esta funcion metemos el valor en la array
               array_push($primos,$c);
                  }
        if (count($primos)==100) {
            //si sobrepasa los numeros a 100 se cerrara el bucle
               break;
                  }
}
//con esta funcion sumamos todos los numeros del array
echo array_sum($primos);
