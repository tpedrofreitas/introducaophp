<?php
$dados = null;
$erro  = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cep = preg_replace('/\D/', '', $_POST['cep']);

    if (strlen($cep) !== 8) {
        $erro = 'CEP inválido! Digite 8 números.';
    } else {
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $resposta = file_get_contents($url);
        $json = json_decode($resposta, true);

        if (isset($json['erro'])) {
            $erro = 'CEP não encontrado!';
        } else {
            $dados = $json;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
</head>
<body>

  <?php if ($erro): ?>
    <p><?= $erro ?></p>
    <a href="03_consultacep.html">Voltar</a>
  <?php endif; ?>

  <?php if ($dados): ?>
    <p><b>CEP:</b> <?= $dados['cep'] ?></p>
    <p><b>Logradouro:</b> <?= $dados['logradouro'] ?: '—' ?></p>
    <p><b>Complemento:</b> <?= $dados['complemento'] ?: '—' ?></p>
    <p><b>Bairro:</b> <?= $dados['bairro'] ?: '—' ?></p>
    <p><b>Cidade:</b> <?= $dados['localidade'] ?></p>
    <p><b>UF:</b> <?= $dados['uf'] ?></p>
    <p><b>Estado:</b> <?= $dados['estado'] ?></p>
    <p><b>Região:</b> <?= $dados['regiao'] ?></p>
    <br>
    <a href="03_consultacep.html">Consultar outro CEP</a>
  <?php endif; ?>

</body>
</html>