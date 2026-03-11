<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola_thiago";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Erro na conexão com o banco");
    }

    $sql = "SELECT * FROM alunos";

    // $resultado = mysqli_query($conexao, $sql);
    $resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lista de Alunos</title>
</head>

<body>

    <h1>Lista de Alunos</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>UF</th>
            <th>Cidade</th>
        </tr>

        <?php

        // while($linha = mysqli_fetch_assoc($resultado)) {

        while ($linha = $resultado->fetch_assoc()) {

            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['idade'] . "</td>";
            echo "<td>" . $linha['uf'] . "</td>";
            echo "<td>" . $linha['cidade'] . "</td>";
            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>
