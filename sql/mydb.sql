-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2021 às 18:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosuser`
--

CREATE TABLE `dadosuser` (
  `id` int(6) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadosuser`
--

INSERT INTO `dadosuser` (`id`, `nome`, `idade`, `email`, `senha`, `imagem`) VALUES
(11, 'Maria Joana', 30, 'maria123@gmail.com', 'maria123', ''),
(12, 'katiuscia', 46, 'katiuscia@outlook.com', 'kati123', ''),
(15, 'kaio', 17, 'kaioenzobr@gmail.com', '12345', 'uploads/IMG_20200803_012802_624.jpg'),
(17, 'marcelo', 40, 'marcelo@email.com', '1234', ''),
(18, 'Lucas', 18, 'lucaspiteu@gmail.com', '1234', ''),
(19, 'Guilherme Borges', 17, 'guilhermeb@gmail.com', '1234', ''),
(20, 'Leonardo de Melo', 43, 'leonardomelo@gmail.com', '1234', ''),
(21, 'Joao', 27, 'joaozinho@fornite.com', '1234', '8723e7551e022fac5a01d70dce1c2f14.'),
(39, 'ronaldo', 59, 'ronaldo@gmail.com', '1234', 'uploads/4f86c076fd7b95769fc4430138fc538d.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dadosuser`
--
ALTER TABLE `dadosuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dadosuser`
--
ALTER TABLE `dadosuser`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
