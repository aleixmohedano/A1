<?php
//con este comando comprovamos si la pagina es https
if(!empty($_SERVER['HTTPS'])){
    //si es HTTPS lo indicamos
    echo "es HTTPS";
}else{
    //i si no lo es entonces es http
   echo "es HTTP";
}
    


