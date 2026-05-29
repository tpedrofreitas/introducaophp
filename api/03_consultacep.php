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

    if ($resposta === false) {
      $erro = 'Não foi possível conectar com a API.';
    } else {
      $json = json_decode($resposta, true);

      if (!$json) {
        $erro = "Resposta inválida da API";
      } elseif (isset($json['erro'])) {
        $erro = 'CEP não encontrado!';
      } else {
        $dados = $json;
      }
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
    <p><b>CEP:</b> <?= htmlspecialchars($dados['cep']) ?></p>
    <p><b>Logradouro:</b> <?= htmlspecialchars($dados['logradouro']) ?? '—' ?></p>
    <p><b>Complemento:</b> <?= htmlspecialchars($dados['complemento']) ?? '—' ?></p>
    <p><b>Bairro:</b> <?= htmlspecialchars($dados['bairro']) ?? '—' ?></p>
    <p><b>Cidade:</b> <?= htmlspecialchars($dados['localidade']) ?></p>
    <p><b>UF:</b> <?= htmlspecialchars($dados['uf']) ?></p>
    <p><b>Estado:</b> <?= htmlspecialchars($dados['estado']) ?></p>
    <p><b>Região:</b> <?= htmlspecialchars($dados['regiao']) ?></p>
    <br>
    <a href="03_consultacep.html">Consultar outro CEP</a>
  <?php endif; ?>

</body>

</html>