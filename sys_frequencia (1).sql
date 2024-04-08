-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/04/2024 às 16:39
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sys_frequencia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `empresas`
--

INSERT INTO `empresas` (`nome`, `cnpj`, `email`, `telefone`, `usuario`, `senha`) VALUES
('Cromas Kick', '06491673000178', 'shapeddocromas@gmail.com', '32999458556', 'kick', 123),
('Baiano Tech', '53230410000195', 'acessoria@baianotech.com.br', '40028922', 'baianotech', 456),
('Mandando Chuva LTDA', '63130029000108', 'mandachuva@gmail.com', '32985426531', 'kevao', 321),
('Mamute Demonio', '66170380000110', 'acessoria.baianotech@gmail.com', '32985426531', 'mamute', 123);

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `ID` int(11) NOT NULL,
  `mes` varchar(2) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `local_arqv` varchar(200) NOT NULL,
  `empresa_cnpj` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `relatorios`
--

INSERT INTO `relatorios` (`ID`, `mes`, `ano`, `local_arqv`, `empresa_cnpj`) VALUES
(1, '01', '2000', 'empresas/63130029000108/frequencia_01-2000.pdf', '63130029000108'),
(2, '02', '2024', 'empresas/66170380000110/frequencia_02-2024.pdf', '66170380000110'),
(3, '06', '2022', 'empresas/66170380000110/frequencia_06-2022.pdf', '66170380000110'),
(4, '09', '2003', 'empresas/66170380000110/frequencia_09-2003.pdf', '66170380000110'),
(5, '11', '2011', 'empresas/66170380000110/frequencia_11-2011.pdf', '66170380000110'),
(6, '04', '2024', 'empresas/66170380000110/frequencia_04-2024.pdf', '66170380000110'),
(7, '05', '2024', 'empresas/66170380000110/frequencia_05-2024.pdf', '66170380000110'),
(8, '11', '2023', 'empresas/66170380000110/frequencia_11-2023.pdf', '66170380000110');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` int(15) NOT NULL,
  `instituicao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `usuario`, `senha`, `instituicao`) VALUES
('Victor Hugo Marins Simoes', 'victormarins03', 123, 'escola'),
('Mamute Demonio', 'mamute', 123, 'empresa'),
('Mandando Chuva LTDA', 'kevao', 321, 'empresa'),
('Victor Hugo', 'victormarins03', 123, 'escola'),
('Cromas ', 'Kick', 321, 'escola'),
('Cromas ', 'kick', 321, 'escola'),
('Cromas kick', 'kick', 123, 'empresa'),
('Cromas kick', 'kick', 123, 'empresa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices de tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empresa_cnpj` (`empresa_cnpj`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `relatorios`
--
ALTER TABLE `relatorios`
  ADD CONSTRAINT `relatorios_ibfk_1` FOREIGN KEY (`empresa_cnpj`) REFERENCES `empresas` (`cnpj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
