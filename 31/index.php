<?php


//hacemos 2 bucles, para que se vayan multiplicando entre ellos
for ($c = 1; $c < 7; $c++) {
  for ($c2 = 1; $c2 < 7; $c2++) {
     //ahora lo imprimimos, diciendo que se coloquen a la izquierda
       echo str_pad($c*$c2, 4, " ", STR_PAD_LEFT);
     
  }
  //hacemos un br para que se baje la siguiente fila
  echo "<br>";
}
