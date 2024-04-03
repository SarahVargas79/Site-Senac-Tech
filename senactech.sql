-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2023 às 16:08
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senactech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cad` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` longtext NOT NULL,
  `cpf` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cad`, `nomeCompleto`, `telefone`, `estado`, `cidade`, `email`, `senha`, `cpf`) VALUES
(2, 'Sarah Moreira', 51992193208, 'Rio Grande do Sul', 'Porto Alegre', 'sarinha.chu@gmail.com', '42f7478742c597f52001d161924290c5', 85664212830),
(3, 'Bella Paz', 51996314256, 'Rio Grande do Sul', 'Canoas', 'bella.p@outlook.com', 'a2bdea1be9d2aafb490f2f23ee819884', 84564164560),
(4, 'Sarah Moreira', 51993601548, 'Amazonas', 'Porto Alegre', 'sarinha.chu@gmail.com', '202cb962ac59075b964b07152d234b70', 87525345601);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id_fc` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `confirmarEmail` varchar(50) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `modalidade` varchar(15) NOT NULL,
  `assunto` varchar(19) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `cpf` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id_fc`, `nomeCompleto`, `uf`, `cidade`, `email`, `confirmarEmail`, `telefone`, `modalidade`, `assunto`, `mensagem`, `cpf`) VALUES
(25, 'Sarah Moreira', 'Amazonas', 'Porto Alegre', 'sarinha.chu@gmail.com', 'sarinha.chu@gmail.com', 51993601548, 'cursotecead', 'reclamacoes', 'qaaA', 87525345601);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cad`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id_fc`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id_fc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
