<?php

    $request = file_get_contents('php://input');
    
    $archivo = fopen("chat.txt", "at");
    
    fwrite($archivo, $request."\n");
    
    fclose($archivo);
