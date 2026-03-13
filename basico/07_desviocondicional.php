<?php
    $dia = 2;
?>
<!DOCTYPE html>
<html lang = "pt-br">
   
        <head>
            <meta charset="UTF-8">
            <title>Desvio Condicional</title>
        </head>
        <body>
           
                <?php
                   switch($dia){
                        case 1:
                            echo "Domingo";
                            break;
                            
                        case 2:
                            echo "Segunda";
                            break;
                        
                        case 3:
                            echo "Terça";
                            break;
                        default:
                        echo "Dia inválido";
                   }
                
                ?>
               
               
           
        </body>
   
<html>
<html>