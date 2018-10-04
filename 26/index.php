<?php

function farmstrong($num) {
    //primero guardamos la mida del string
  $dij = strlen($num);
  $sum = 0;
  //esddto conprueba que sean string
  $num = (string)$num;
  for ($c = 0; $c < $dij; $c++) {
     //ahora hacemos la operacion haciendo que sume la operacion cada vez 
    $sum = $sum + (string)$num{$c}**$dij;
  }
  
  //con el if comprobamos si son iguales o no
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
//llamamos a la funcion
echo "153".farmstrong(153);
echo "\n654 ".farmstrong(654);

