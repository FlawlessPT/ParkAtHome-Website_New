-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2020 às 01:37
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `parkathome_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `park`
--

CREATE TABLE `park` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `totalSpaces` int(11) NOT NULL,
  `localization` text NOT NULL,
  `nrFloors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `park`
--

INSERT INTO `park` (`id`, `name`, `totalSpaces`, `localization`, `nrFloors`) VALUES
(1, 'Parque 1', 44, 'Gondomar', 2),
(2, 'Parque 2', 44, 'Porto', 2),
(3, 'Parque 3', 40, 'Gens', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `contact` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `contact`, `email`) VALUES
(1, 'João', 'joao', '123', '999888777', 'email@email.pt'),
(2, 'asda', 'asd', 'asd', '123', 'asdas'),
(3, 'Johny', 'joaozito', '123', '123456789', 'joaooo@joao.pt'),
(4, 'oiii', 'jonhas', '202cb962ac59075b964b07152d234b70', '123', 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `plate` text NOT NULL,
  `state` tinyint(1) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vehicules`
--

INSERT INTO `vehicules` (`id`, `name`, `plate`, `state`, `idUser`) VALUES
(1, 'asd', '11-11-11', 1, 1),
(2, 'asdasd', '22-11-33', 1, 1),
(4, 'asdas', '11-44-33', 1, 1),
(5, 'plate 1', '11-44-55', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `park`
--
ALTER TABLE `park`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Índices para tabela `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plate` (`plate`) USING HASH,
  ADD KEY `idUser` (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `park`
--
ALTER TABLE `park`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vehicules`
--
ALTER TABLE `vehicules`
  ADD CONSTRAINT `vehicules_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
