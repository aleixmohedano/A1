<?php

function fcalcular($num, $totals) {
  $totals = "";
  for ($c = 0; $c <= count($num); $c++) {
      //hacemos el bucle para que acabe al llegar al ultimo numero
     for ($c2 = $c + 1; $c2 < count($num); $c2++) {
         //hacemos la operacion si la suma da lo mismo que el total lo concatenamos y la guardamos en total
        if ($num[$c] + $num[$c2] == (int)$totals) {
           $totals .= $num[$c] . "," . $num[$c2] . ";";
        }
     }
  }
  return $totals;
}

//establecemos la array con sus valores
$num = array(0,1,2,3,4,5,6);
echo fcalcular($num, 7)."\n";
echo fcalcular($num, 5)."\n";
