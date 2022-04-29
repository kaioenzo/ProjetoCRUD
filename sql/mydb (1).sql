-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2022 às 19:12
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

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
-- Estrutura da tabela `admsystem`
--

CREATE TABLE `admsystem` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admsystem`
--

INSERT INTO `admsystem` (`email`, `senha`, `nome`, `id`) VALUES
('kaioenzobr@gmail.com', '1234', 'kaio', 4);

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
(15, 'kaio', 17, 'kaioenzobr@gmail.com', '12345', '3b72ddad7a9df3dfd90cc7a86bed9c98.png'),
(18, 'Lucas Eduardo', 18, 'lucaspiteu@gmail.com', '1234', '9a480469e827203c073298f054c57aad.jpg'),
(75, 'Brtt', 41, 'brttpain@gmail.com', '1234', '33c74528e2bc3bbe593e08b2e693d051.jfif'),
(76, 'Brtt', 41, 'brttpain@gmail.com', '1234', '8b5c66c7b3e251a8e58d35d54bd28ff0.jpg'),
(77, 'Tinowns', 26, 'tinowns@gmail.com', '1234', '600d84bf029cc27e718398fd4f9b1da0.jpg'),
(78, 'Tanjiro', 21, 'tanjiro@gmail.com', '1234', '4b0f32a2bda78c59a476fd9fea51dda2.jpg'),
(79, 'Robo', 24, 'robo@gmail.com', '1234', 'a7682e25a619135688c523b3c998fe42.jpg'),
(80, 'Marcos', 44, 'marcosrestaurado@gmail.com', '1234', 'e89128cdfcad3317c620aef493004b46.png'),
(81, 'Carlos Eduardo', 17, 'krloseduardo@gmail.com', '1234', '3420b0bae06a1bf4ddd91399eef29eba.png'),
(82, 'Isa Lara', 17, 'isalara@gmail.com', '1234', '093ee39c48ecb4b312c2b3fe61c74f96.png'),
(83, 'Mariana', 28, 'marianaborges@gmail.com', '1234', 'ce170e53356b974b51290fb33814bd4c.png'),
(84, 'Pedro Augusto', 19, 'pedroaugusto@gmail.com', '1234', '3eb786484f5c0d0abd82072e7add29a6.png'),
(88, 'Revolta', 26, 'revolta@gmail.com', '123revolta', '80a28611dbc42f6b7ea8e2753e75020a.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admsystem`
--
ALTER TABLE `admsystem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dadosuser`
--
ALTER TABLE `dadosuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admsystem`
--
ALTER TABLE `admsystem`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `dadosuser`
--
ALTER TABLE `dadosuser`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
