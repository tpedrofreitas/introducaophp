<<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST['n1'] ?? 0;
    $n2 = $_POST['n2'] ?? 0;
    $n3 = $_POST['n3'] ?? 0;

    $total = $n1 + $n2 + $n3;
    $media = $total / 3;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Em recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "Total: " . number_format($total, 2, ',', '.') . "<br>";
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
    echo "Situação: $situacao";

} else {
    echo "Acesse pelo formulário!";
}

?>