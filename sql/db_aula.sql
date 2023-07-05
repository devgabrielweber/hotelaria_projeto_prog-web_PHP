-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 05, 2023 at 01:56 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
