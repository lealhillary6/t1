-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Abr-2018 às 19:09
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja cadastro`
--

CREATE TABLE IF NOT EXISTS `loja cadastro` (
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja cadastro`
--

INSERT INTO `loja cadastro` (`cpf`, `nome`, `email`, `sexo`, `cod_cidade`) VALUES
('002145', 'Ana Julia', 'ana@ifsp.com', 'F', 26),
('0021456', 'Gabriela', 'gabriela@ifsp.com', 'F', 25),
('032165', 'Mario', 'mario@ifsp.com', 'M', 14),
('11111111111', 'hillary', 'hillary@ifsp.com', 'F', 16),
('11111111112', 'denise', 'denise@ifsp.com', 'F', 19),
('11223344', 'samanta', 'samanta@email.com', 'F', 12),
('11223345', 'clarisse', 'clarisse@email.com', 'F', 16),
('1234560', 'Maria', 'maria@ifsp.com', 'F', 14),
('123456789', 'giovanna', 'giovanna@ifsp.com', 'F', 12),
('1455789', 'jao', 'jao@ifsp.com', 'M', 19),
('231561320', 'Ingrid', 'ingrid@ifsp.com', 'F', 29),
('24351', 'Jonatas', 'jonatas@ifsp.com', 'M', 29),
('4397231', 'Francisco', 'francisco@ifsp.com', 'M', 26),
('451236', 'Jose', 'jose@ifsp.com', 'M', 24),
('458712', 'Debora', 'debora@ifsp.com', 'F', 24),
('55462', 'Carol', 'carol@ifsp.com', 'F', 21),
('7774512', 'Gabriel', 'gabriel@ifsp.com', 'M', 25),
('78945', 'Ricardo', 'ricardo@ifsp.com', 'M', 21),
('789456', 'Julia', 'julia@ifsp.com', 'F', 17),
('789654', 'Carlos', 'carlos@ifsp.com', 'M', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja cidade`
--

CREATE TABLE IF NOT EXISTS `loja cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja cidade`
--

INSERT INTO `loja cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(12, 'cruzeiro', 14),
(14, 'avai', 14),
(16, 'araraquara', 14),
(17, 'barretos', 14),
(19, 'araras\r\n', 14),
(21, 'tres rios', 15),
(24, 'rio das flores', 15),
(25, 'duas barras', 15),
(26, 'angra dos reis', 15),
(29, 'cantagalo', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja estado`
--

CREATE TABLE IF NOT EXISTS `loja estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja estado`
--

INSERT INTO `loja estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(14, 'sp', 'sao paulo'),
(15, 'rj', 'rio de janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `loja cadastro`
--
ALTER TABLE `loja cadastro`
  ADD CONSTRAINT `loja cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `loja cidade` (`id_cidade`);

--
-- Limitadores para a tabela `loja cidade`
--
ALTER TABLE `loja cidade`
  ADD CONSTRAINT `loja cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `loja estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
