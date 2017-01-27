<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        .ocultar{
            display:none;
        }

        </style>
    </head>
    <body>
        <div>
            <form action="index.php" method="post">
                <label name="User">Usuario</label><input type="text" name="User"><br/>
                <label name="Pass">Contraseña</label><input type="text" name="Pass"><br/>
                <input type="submit" name="enviar" value="enviar">
            </form>
        </div>
        
        <a href="canvas2.html"><button id="dibujar" type="button" class="btn btn-default ocultar">Dibujar</button></a>
        
        <a href="canvasCliente.html"><button id="cliente" type="button" class="btn btn-default ocultar">Adivinar</button></a>
        
        
        
        <?php
        if(isset($_POST["enviar"])){
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
        }
        
            
        ?>
        
    </body>
</html>
