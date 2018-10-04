<?php

function fcomp($cad1, $cad2) {
    //hacemos strlen en las variables para guardar el tamaño de las mismas
  $t_cad1 = strlen($cad2);
   $t_cad2 = strlen($cad1);
   //con la funcion substr nos devolvera parte de la cadena segun los valores que pongamos en star y lenght
   if (substr($cad1, $t_cad2-$t_cad1, $t_cad1) == $cad2) {
     return "true";
   } 
   else 
   {
     return "false";
   }
}
//hacemos la comprovacion
echo fcomp("hola","la")."\n";
echo fcomp("adios","ad")."\n";

