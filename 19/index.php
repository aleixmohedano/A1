<?php

//con las variables de Http_host y Request URI podemos formar la URL completa
echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
