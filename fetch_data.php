<?php
include "./back-php/conect.php";
if (isset($_GET['inst_prc'])) {
  // recupera o valor selecionado no select
  $inst_prc = mysqli_real_escape_string($conn, $_GET['inst_prc']);

  // executa a consulta para recuperar os dados da tabela entrevista com base no valor selecionado
  $sql = "SELECT * FROM entrevista WHERE inst_prc = '$inst_prc'";
  $result = $conn->query($sql);

  // cria um array para armazenar os dados da consulta
  $dados = array();

  // percorre os resultados da consulta e adiciona cada linha no array
  while ($linha = mysqli_fetch_assoc($result)) {
    $dados[] = $linha;
  }

  // converte os dados para o formato JSON e retorna o resultado
  header('Content-Disposition: attachment; filename="dados_entrevista.json"');
  header('Content-Type: application/json');
  echo json_encode($dados);
  exit();
}
