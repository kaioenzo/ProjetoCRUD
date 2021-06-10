-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2021 às 21:45
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
(15, 'kaio', 17, 'kaioenzobr@gmail.com', '12345', 'f4c5c3b67bb8a97dd53afd05536d4ae9.jpg'),
(18, 'Lucas Eduardo', 18, 'lucaspiteu@gmail.com', '1234', '146e998d540a82587fea5f4bda3bf4b0.jpg'),
(75, 'Brtt', 41, 'brttpain@gmail.com', '1234', '33c74528e2bc3bbe593e08b2e693d051.jfif'),
(76, 'Brtt', 41, 'brttpain@gmail.com', '1234', '8b5c66c7b3e251a8e58d35d54bd28ff0.jpg'),
(77, 'Tinowns', 26, 'tinowns@gmail.com', '1234', '600d84bf029cc27e718398fd4f9b1da0.jpg'),
(78, 'Tanjiro', 21, 'tanjiro@gmail.com', '1234', '4b0f32a2bda78c59a476fd9fea51dda2.jpg'),
(79, 'Robo', 24, 'robo@gmail.com', '1234', 'a7682e25a619135688c523b3c998fe42.jpg');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
