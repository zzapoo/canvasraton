<?php
    $lineas = array();
    $archivo = fopen('chat.txt', 'r');
    
    while(!feof($archivo)){
        $linea = fgets($archivo);
        
        array_push($lineas, $linea);
        if(count($lineas)>20){
            array_shift($lineas);
        }
    }
    fclose($archivo);  
    
    header('Content-Type: application/json');
    echo json_encode($lineas);
