<?php
    $archivo = "users.txt";
    $fichero = file_get_contents($archivo);
    $users = preg_split("/\r/", $fichero);
    $logeo = false;
    $entrada = $_POST["User"].":".$_POST["Pass"];
    foreach ($users as $user){
        if($user == $entrada){
           $logeo = true; 
        }
    }
    if($logeo){
        echo "<style>
            .ocultar{
                display:inline;
            }
            </style>";
    }
