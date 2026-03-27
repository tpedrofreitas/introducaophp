<?php
    $salariobruto= "6000.00";
    $descontototal = 0.0;

    $tabela = [
        [0.00,1621.00,1621.00,7.50],
        [1621.01,2902.84,1281.84,9.00],
        [2902.85,4354.27,1451.43,12.00],
        [4354.28,8475.55,4121.28,14.00]
    ]

?>    

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Calculo INSS</title>
        
    </head>
    <body>
        <?php
            
            $sobra = $salariobruto;
            /*1ª Faixa
            if($sobra > 0.0){
                if( $salariobruto > $tabela[0][1] ){
                   $descontototal += $tabela[0][2] * $tabela[0][3] /100.0;
                   $sobra -= $tabela[0][2];
                }else{
                    $descontototal += $sobra * $tabela[0][3] /100.0;
                    $sobra -= $sobra;
                }
            }
            //2ª Faixa
            if($sobra > 0.0){
                if( $salariobruto > $tabela[1][1] ){
                   $descontototal += $tabela[1][2] * $tabela[1][3] /100.0;
                   $sobra -= $tabela[1][2];
                }else{
                    $descontototal += $sobra * $tabela[1][3] /100.0;
                    $sobra -= $sobra;
                }
            }
            //3ª Faixa
            if($sobra > 0.0){
                if( $salariobruto > $tabela[2][1] ){
                   $descontototal += $tabela[2][2] * $tabela[2][3] /100.0;
                   $sobra -= $tabela[2][2];
                }else{
                    $descontototal += $sobra * $tabela[2][3] /100.0;
                    $sobra -= $sobra;
                }
            }
            4ª Faixa*/
            for ($faixa = 0; $faixa < count($tabela);$faixa++){
                       
                 if($sobra > 0.0){
                     if( $salariobruto > $tabela[$faixa][1] ){
                         $descontototal += $tabela[$faixa][2] * $tabela[$faixa][3] /100.0;
                         $sobra -= $tabela[$faixa][2];
                     }else{
                         $descontototal += $sobra * $tabela[$faixa][3] /100.0;
                         $sobra -= $sobra;
                     }
                }
            }

            $salarioliquido = $salariobruto - $descontototal;
            echo "Salário Bruto: " . number_format($salariobruto, 2, '.', '') . 
                " Desconto INSS: " . number_format($descontototal, 2, '.', '') . 
                " Salário Líquido: " . number_format($salarioliquido, 2, '.', '');
        ?>
    </body>
    
</html>