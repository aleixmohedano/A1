<?php

function frepetido($valor) {
  //hacemos un bucle que se pare cuando alcanze el ultimo valor de la cadena
  for ($c = 0; $c <= strlen($valor); $c++) {
      //con el comando substr_count cuenta el numero de veces que aparece el valor en la cadena
     if (substr_count($valor, substr($valor, $c, 1)) == 1) {
         //si cumple la condicion lo imprimimos
        return substr($valor, $c, 1);
        
     }
  }
}

echo frepetido("Green")."\n";
echo frepetido("abcdea")."\n";