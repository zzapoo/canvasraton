<?php
    $request = file_get_contents('php://input');
    
    $archivo = fopen("dibujo.txt", "w");
    
    fwrite($archivo, $request);
    
    fclose($archivo);   
    
?>