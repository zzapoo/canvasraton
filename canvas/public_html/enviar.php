<?php

    $archivo = fopen('dibujo.txt', 'r');
    $dibujo = fread($archivo,  filesize('dibujo.txt'));
    fclose($archivo);
    
    header('Content-Type: application/json');
    echo $dibujo;
?>
