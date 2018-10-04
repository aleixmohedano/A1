<?php

function fcambiar($pal) {
    //con explode separamos los numeros cada vez que encuentre ; y los guarda en la array dij
    $dij= explode(';',$pal);
    $num = '';
    //ahora hacemos un switch para cada palabra la convierta en su respectivo numero
    foreach($dij as $value){
        //trim es para eliminar los espacios del principio y final de la cadena
        switch(trim($value)){
            case 'zero':
                $num .= '0';
                break;
            case 'one':
                $num .= '1';
                break;
            case 'two':
                $num .= '2';
                break;
            case 'three':
                $num .= '3';
                break;
            case 'four':
                $num .= '4';
                break;
            case 'five':
                $num .= '5';
                break;
            case 'six':
                $num .= '6';
                break;
            case 'seven':
                $num .= '7';
                break;
            case 'eight':
                $num .= '8';
                break;
            case 'nine':
                $num .= '9';
                break;    
        }
    }
    return $num;
}
//llamamos a la funcion
echo fcambiar("zero;three;five;six;eight;one");
