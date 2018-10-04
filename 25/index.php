<?php

//establecemos los valores 
$a = 1;
$b = 2;

//imprimimos antes de cambiarlos
echo "a=".$a." b=".$b."<br>";

//cambiamos los valores con la ayuda de una tercera variable
$c = $a;
$a = $b;
$b = $c;
 //volvemos a imprimirla
echo "a=".$a." b=".$b;

