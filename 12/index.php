<?php
//primero metemos el archivo en un array
$fichero = file('http://www.example.com/');

//luego lo llamamos con el foreach ya que el formato se guarda como numero de linia y el contenido
foreach ($fichero as $linias => $linia) {
    //la etiqueta htmlspecialchars() hace que se muestren las etiquetas html escritas
    echo $linias.":".htmlspecialchars($linia);   
}