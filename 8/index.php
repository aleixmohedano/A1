<?php

//asosicamos la url en una variable
$url = 'http://toni.cesnuria.com/php/php-basic-exercises.php';
//esta funcion analiza la url y la separa en partes de una array
$url=parse_url($url);

//ahora las printamos en la pantalla con echo
echo 'Scheme : '.$url['scheme'].'<br>';
echo 'Host : '.$url['host'].'<br>';
echo 'Path : '.$url['path'].'<br>';