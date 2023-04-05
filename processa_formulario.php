<?php
include "./back-php/conect.php";

$data_hora = $_POST['data_hora'];
$Secretaria = $_POST['Secretaria'];
$setor = $_POST['setor'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$uso_sistema = $_POST['uso_sistema'];
$processos = $_POST['processos'];
$observacao_processos = $_POST['observacao_processos'];
$dados_pessoais = $_POST['dados_pessoais'];
$preocupacoes = $_POST['preocupacoes'];
$inst_prc = $_POST['inst_prc'];

$sql = "INSERT INTO entrevista (data_hora, secretaria, nome, cargo, uso_sistema, processos, observacao_processos, dados_pessoais, preocupacoes, inst_prc) VALUES ('$data_hora', '$Secretaria', '$nome', '$cargo', '$uso_sistema', '$processos', '$observacao_processos', '$dados_pessoais', '$preocupacoes', '$inst_prc')";

$response = [];

if ($conn->query($sql) === TRUE) {
  $response['success'] = true;
  $response['message'] = "Cadastro realizado com sucesso!";
} else {
  $response['success'] = false;
  $response['message'] = "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
