<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ufs = $_POST['uf'];
    $nomes = $_POST['nome'];

    for ($i = 0; $i < 5; $i++) {

        if (!empty($ufs[$i]) && !empty($nomes[$i])) {

            echo strtoupper($ufs[$i]) . " - " . strtoupper($nomes[$i]) . "<br>";
        }
    }

} else {
    echo "Acesse pelo formulário!";
}

?>