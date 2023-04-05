<?php
include "./back-php/conect.php";

$data_hora = $_POST['data_hora'];
$instituicao = $_POST['instituicao'];


$sql = "INSERT INTO instituicao (data_hora, nome) VALUES ('$data_hora', '$instituicao')";

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
