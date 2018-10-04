<?php

//guardamos el nombre del fichero en un array
$fichero = basename('php-basic-exercises.php');
//ahora sacamos la fecha del archivo y la guardamos en otro array
$tiempo = filemtime($fichero);
//luego imprimimos el array con el formato de fecha que queramos
echo "Last modified " . date("l, dS F, Y, h:ia", $tiempo);
