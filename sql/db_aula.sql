-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 29, 2023 at 08:15 PM
-- Server version: 8.0.1-dmr
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aula`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `endereco` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `email`, `endereco`, `cpf`) VALUES
(94, 'aaaa', '12398', 'aaa@w.com', 'asldj', 123987),
(95, 'lidio', '88888888', 'lidio@emaio.com', 'chapeco', 15151515),
(97, 'Gabriel Augusto Weber', '5', 'lematraca@gmail.com', 'Rua Independência - E', 45654),
(98, 'askjdfadsjf', '6532', 'asdj@askjd.com', 'asdasda', 68543);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id` mediumint(9) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `data_contratacao` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `funcao` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  `turno` varchar(150) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `data_contratacao`, `funcao`, `carga_horaria`, `turno`) VALUES
(1, 'Gabriel Weber', 88899, 99999999, 'aaaaaaa', '2022-04-30', 'CEO', 4, 'manhã'),
(2, 'jakdkasd', 123, 123, 'askdjad', '2023-06-14', 'aaaaa', 4, 'asasd'),
(4, 'Gabriel Weber', 123987, 54654666, 'chapeco', '2023-06-21', 'CEO', 4, 'vespertino');

-- --------------------------------------------------------

--
-- Table structure for table `quartos`
--

CREATE TABLE `quartos` (
  `id` mediumint(9) NOT NULL,
  `num` int(11) NOT NULL,
  `bloco` varchar(43) COLLATE utf8mb4_bin NOT NULL,
  `camas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `quartos`
--

INSERT INTO `quartos` (`id`, `num`, `bloco`, `camas`) VALUES
(1, 123, 'A', 3),
(2, 123, 'A', 3),
(3, 498, 'Z', 11),
(4, 555, 'Z', 11),
(5, 5555, 'B', 6);

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `titular` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL,
  `quarto` int(11) NOT NULL,
  `bloco` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`id`, `titular`, `data_inicio`, `data_termino`, `quarto`, `bloco`) VALUES
(2, 'Weber', '2023-06-16', '2023-06-13', 555, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `telefone`, `email`, `login`, `senha`) VALUES
(1, 'Administrador', '49 888008800', 'teste@teste.com', 'admin1', '123'),
(2, 'Jackson Five', '84 8989989', 'lordjackson@gmail.com', 'jackson', '123'),
(3, 'jackson', '2342342', 'asdas@test.com', 'admin', '$2y$10$DIyFfgrauW5gOHWqIshEsOVDoSoVfE5hV14Te.baQh86BZus5TNkq'),
(12, 'Eduardo', '49991767992', 'eduardo.robettibedin@gmail.com', 'dudu', '$2y$10$4HQRH500cvS50Ap6g.IPSe24hVMIcF7BTjFL3WUCZwzQXFkP9TWE2'),
(13, 'napoleao', '4949494949', 'napoleao@francesinhas.com', 'imperadorsqn', '$2y$10$OdGGy.HtNsm3EHqyrMxPKex13ABdpXE7qgfnqYQ8E6D/aFvcs1ah.'),
(16, 'napolitano', '55555555', 'napolitano@gmail.com', 'napolitano', '$2y$10$iUN0dHsnlzZ4SXYBujgLEezaWXm8iiDVfycn5mBvDOPekW.OPssWa'),
(17, 'Bartolomeu', '741852963', 'bartolas@gmail.com', 'bartolas', '$2y$10$e41nW6idlLVTIkLKh5r5xuZ6GmYFAe2.isPwaoq6pp6hHj4hj6com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
