<?php
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $curso = $_POST['curso'];

    $dataNascimento = new DateTime($data);
    $hoje = new DateTime();

    $idade = $hoje->diff($dataNascimento);

    echo "Nome: $nome <br>";
    echo "Curso: $curso <br>";
    echo "Idade: {$idade->y} anos, {$idade->m} meses, {$idade->d} dias";
?>