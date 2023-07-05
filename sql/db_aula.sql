-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 05, 2023 at 07:22 PM
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
(102, 'Marcos dos Santos', '54866996655', 'santos.marcos@gmail.com', 'Rua das Flores, Passo Fundo', 74128963),
(103, 'Elomusq Disneilandio da Silva', '88661234587458', 'elomusq@yahoo.com', 'Nova Iorque, Maranhão', 74158963),
(104, 'Napoleao Napoleonico', '741822521', 'napoleao@francesinhas.com', 'frança', 7412851),
(105, 'Elon Musk', '7846139461', 'mr.musk@ceo.tesla.com', 'Marte, em 2025', 741258963),
(106, 'Barak Obama', '741287852', 'obama@president.usa.com.us', 'Casa Branca', 7412896),
(107, 'Lili', '741852963', 'lili@gmail.com', 'aaaaaa', 741258963);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id` mediumint(9) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `cpf` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(150) COLLATE utf8mb4_bin NOT NULL,
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
(11, 'riboli', '78787878', '111111111', 'mora em casa', '2023-06-06', 'homem do malote', 10, 'noturno'),
(12, 'Hiury Tressoldi', '795423', '74128622', 'Perto do Atacadão das Baterias', '2022-02-25', 'CEO 2', 25, 'matutino'),
(16, 'Jackson Meires Dantas Canuto', '55555555', '558488622585', 'Apartamento', '2019-05-31', 'PROFESSOR ENS BASICO TECN TECNOLOGICO', 40, 'matutino');

-- --------------------------------------------------------

--
-- Table structure for table `manutencao`
--

CREATE TABLE `manutencao` (
  `id` int(11) NOT NULL,
  `item` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `datamanutencao` date NOT NULL,
  `dataproxmanutencao` date NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `manutencao`
--

INSERT INTO `manutencao` (`id`, `item`, `descricao`, `datamanutencao`, `dataproxmanutencao`, `responsavel`) VALUES
(1, 'Piscina', 'Manutenção da piscina', '2023-07-12', '2023-07-29', 'Gabriel Weber'),
(2, 'Janela 302', 'Troca janela quarto 302', '2022-09-14', '2023-10-15', 'Hiury'),
(3, 'Pia Cozinha', 'Manutenção da pia da cozinha', '2022-02-22', '2023-03-20', 'Seu Arnei'),
(4, 'Balcão Recepção', 'Troca do balcão da recepção', '2022-02-02', '2022-04-23', 'Riboli'),
(5, 'Choppeira', 'Manutenção do pressurizador da choppeira particular do CEO', '2023-05-25', '2023-05-26', 'Jackson');

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
(7, 123, 'a', 5),
(8, 32, 'a', 3),
(9, 36, 'a', 5),
(10, 37, 'B', 6),
(11, 11, 'B', 2),
(12, 25, 'B', 6),
(13, 36, 'a', 3),
(14, 23, 'a', 3),
(15, 65, 'C', 9),
(16, 69, 'C', 1),
(17, 58, 'C', 5),
(18, 666, 'C', 3);

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
(2, 'Weber', '2023-06-16', '2023-06-13', 555, 'B'),
(3, 'Melon Musk', '2022-05-25', '2023-05-25', 555, 'C'),
(4, 'Homem Aranha', '2009-05-06', '2009-06-05', 36, 'A'),
(5, 'Ozzy Osbourne', '2005-06-06', '2006-06-06', 666, 'C');

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
(13, 'napoleao', '4949494949', 'napoleao@francesinhas.com', 'imperadorsqn', '$2y$10$OdGGy.HtNsm3EHqyrMxPKex13ABdpXE7qgfnqYQ8E6D/aFvcs1ah.'),
(16, 'napolitano', '55555555', 'napolitano@gmail.com', 'napolitano', '$2y$10$iUN0dHsnlzZ4SXYBujgLEezaWXm8iiDVfycn5mBvDOPekW.OPssWa'),
(17, 'Bartolomeu', '741852963', 'bartolas@gmail.com', 'bartolas', '$2y$10$e41nW6idlLVTIkLKh5r5xuZ6GmYFAe2.isPwaoq6pp6hHj4hj6com'),
(19, 'hiury', '2198421974', 'hiurygabrieltressoldi@gmail.com', 'hyu', '$2y$10$0ol8fVuoqWvm.OxAJLld.OTW/GhfhNTy6CF4pwjCLguUCMmP6WA/W'),
(20, 'lidio', '7425896', 'lidio@emaio.com', 'lidio', '$2y$10$XalDp/SXlIc6vLvuKrlh5.njviEZ2BVQOtxj3GqWApgTCb6I2nbFK'),
(21, 'catatau', '88681891', 'catatau@gmail.com', 'catatau', '$2y$10$p12ry4ZRToIdYpzZ6oPbluebJaBQCpzbOkaS9pZvGSqY9ZQN90/om'),
(23, 'mueller', '88681891', 'mueller@gmail.com', 'mueller', '$2y$10$DKk6V7kU55niPWJkby0fOO0NnSjVPdxaHzBqa7FgUGZ3Go.R2hWhi'),
(24, 'felipe', '8868891', 'felipe@gmail.com', 'felipe', '$2y$10$QdCZslFIQnsQyHdQ4h5uIe0Pug.TMy9ROvTgg356i6Wix6joJMR3y');

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
-- Indexes for table `manutencao`
--
ALTER TABLE `manutencao`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manutencao`
--
ALTER TABLE `manutencao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
