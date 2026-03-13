<?php
    $Mes = 2;
   
?>
<!DOCTYPE html>
<html lang = "pt-br">
   
        <head>
            <meta charset="UTF-8">
            <title>Desvio Condicional</title>
        </head>
        <body>
           
                <?php
                    switch($Mes){
                        case 1:
                            echo "Janeiro";
                            break;
                            
                        case 2:
                            echo "Fevereiro";
                            break;
                        
                        case 3:
                            echo "Março";
                            break;
                        default:
                        echo "Mês inválido";
                   }
                ?>
               
               
            
        </body>
   
<html>
<html>