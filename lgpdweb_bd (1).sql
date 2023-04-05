-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Abr-2023 às 15:35
-- Versão do servidor: 8.0.32-0ubuntu0.22.04.2
-- versão do PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lgpdweb_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrevista`
--

CREATE TABLE `entrevista` (
  `id` int NOT NULL,
  `data_hora` date NOT NULL,
  `secretaria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `setor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uso_sistema` text COLLATE utf8mb4_general_ci,
  `processos` text COLLATE utf8mb4_general_ci,
  `observacao_processos` text COLLATE utf8mb4_general_ci,
  `dados_pessoais` text COLLATE utf8mb4_general_ci,
  `preocupacoes` text COLLATE utf8mb4_general_ci,
  `inst_prc` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id` int UNSIGNED NOT NULL,
  `data_hora` datetime NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
