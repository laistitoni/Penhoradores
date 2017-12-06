-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2017 às 13:42
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_penhoradores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `email` varchar(50) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`email`, `mensagem`) VALUES
('lais@gmail.com', 'ola pessoal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `autor` varchar(50) NOT NULL,
  `titulo` text NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`autor`, `titulo`, `texto`) VALUES
('eu', 'titulo teste', 'era uma vez...'),
('ainda eu', 'teste 2', 'era uma outra vez...'),
('ele', 'titulo', 'era ahushaush'),
('lalala', 'titulo 3', 'Ã§asoaksojasiouhhiauba'),
('hsuahsu', 'ashuahshaushh', 'ajsiohainjxaiu'),
('lais', 'ahsuihao', 'sjiaj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto_enviado`
--

CREATE TABLE `texto_enviado` (
  `autor` varchar(50) NOT NULL,
  `titulo` text NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto_enviado`
--

INSERT INTO `texto_enviado` (`autor`, `titulo`, `texto`) VALUES
('sjiaj', 'lais', 'ahsuihao'),
('lais linda', 'titulo teste 5', 'era uma vez um gato ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(40) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `nome`, `senha`) VALUES
('ju@h.com', 'ajsuh', '202cb962ac59075b964b07152d234b70'),
('jsi', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('luana@g.com', 'luana', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
