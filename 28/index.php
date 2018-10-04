<?php

function fduplicados($nums) {
    //con esta funcion eliminamos los numeros repetidos
  $numu = array_unique($nums);
  return $numu;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(fduplicados($nums));
