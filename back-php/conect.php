<?php

// Configurações de conexão com o banco de dados
$host = "localhost"; // Nome do servidor do banco de dados
$usuario = "guilhermerosa"; // Nome do usuário do banco de dados
$senha = "Uu232336364"; // Senha do usuário do banco de dados
$banco = "lgpdweb_bd"; // Nome do banco de dados

// Conecta ao banco de dados
$conn = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
