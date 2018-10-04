<?php

function fmultiplicar($x, $y)
  {
    //explode para separar los valores cada vez que encuentre un espacio
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    //ahora calculamos cada valor individualmente multiplicandolo
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    //ahora los volvemos a unir con implode y lo printamos
    return implode(' ',$output);
}
echo fmultiplicar(("10 12 3"), ("1 3 3"));