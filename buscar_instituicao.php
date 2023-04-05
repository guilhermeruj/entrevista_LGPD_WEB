<?php
// inclui o arquivo de conexão com o banco de dados
include "./back-php/conect.php";

// executa a consulta para recuperar os nomes das instituições
$sql = "SELECT nome FROM instituicao";
$result = $conn->query($sql);

// cria um array para armazenar os nomes das instituições
$instituicoes = array();

// percorre os resultados da consulta e adiciona cada nome no array
while ($linha = mysqli_fetch_assoc($result)) {
  $instituicoes[] = $linha['nome'];
}

// converte os dados para o formato JSON e retorna o resultado
echo json_encode($instituicoes);

// fecha a conexão com o banco de dados
mysqli_close($conn);
