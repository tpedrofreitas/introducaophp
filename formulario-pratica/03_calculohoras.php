<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrada = $_POST['entrada'] ?? '';
    $saida = $_POST['saida'] ?? '';

    if ($entrada && $saida) {

        $horaEntrada = new DateTime($entrada);
        $horaSaida = new DateTime($saida);

        $diferenca = $horaEntrada->diff($horaSaida);

        echo "Total trabalhado: ";
        echo $diferenca->h . " horas e " . $diferenca->i . " minutos";

    } else {
        echo "Preencha os horários!";
    }

} else {
    echo "Acesse pelo formulário!";
}

?>