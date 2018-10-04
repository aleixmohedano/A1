<html>
    <head>
        <title></title>
    </head>
    
    <body>
        <form action="<?=_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" name="usuario" >
            <input type="submit" value="Submit Name"><br>
    </body>
</html>

<?php

if(isset($_POST['usuario'])&&!empty($_POST['usuario'])){
        $usuario=$_POST['usuario'];
        echo 'Hello '.$usuario;
    
}else{
    echo 'Introduce un nombre';
}
?>

