-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2022 às 14:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `os_suporte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(8, 'Hardware'),
(9, 'Software'),
(11, 'Projetor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os_suporte`
--

CREATE TABLE `os_suporte` (
  `id_os` int(11) NOT NULL,
  `nomeSolicitante` varchar(200) NOT NULL,
  `departamentoSolicitante` varchar(200) NOT NULL,
  `solicitacao` varchar(200) NOT NULL,
  `local_` varchar(200) NOT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `horaData` varchar(200) NOT NULL,
  `teste` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `os_suporte`
--

INSERT INTO `os_suporte` (`id_os`, `nomeSolicitante`, `departamentoSolicitante`, `solicitacao`, `local_`, `categoria`, `tipo`, `horaData`, `teste`) VALUES
(81, 'fhghh', 'jhj', 'gh', 'jj', 'Projetor', 'Instalação', '04/11/2022 16:09', ''),
(82, 'gg', 'jk', 'jk', 'jk', 'Hardware', 'Instalação', '04/11/2022 16:10', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `nomeTipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`idTipo`, `nomeTipo`) VALUES
(1, 'Instalação'),
(2, 'Manutenção'),
(3, 'Preventiva');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `os_suporte`
--
ALTER TABLE `os_suporte`
  ADD PRIMARY KEY (`id_os`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `os_suporte`
--
ALTER TABLE `os_suporte`
  MODIFY `id_os` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
