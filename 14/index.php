<?php

//guardamos el nombre del fichero en un array
$fichero = basename($_SERVER['PHP_SELF']); 
//ahora usamos count para que cuente las linias del fichero y la guardamos en array
$linias= count(file($fichero)); 
//las imprimimos
echo  $linias;
