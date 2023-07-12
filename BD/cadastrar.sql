-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2023 at 02:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `codigoClient` int NOT NULL,
  `nomeCliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contacto` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`codigoClient`, `nomeCliente`, `contacto`) VALUES
(4, 'Danilo Tiago', '994347273'),
(14, 'Milton Wesly', '945464446'),
(15, 'Deusa Guides', '933456464'),
(16, 'Tionela Mateus', '945613231');

-- --------------------------------------------------------

--
-- Table structure for table `quarto`
--

CREATE TABLE `quarto` (
  `codigoQuarto` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `preco_uma_noite` varchar(30) NOT NULL,
  `preco_um_dia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quarto`
--

INSERT INTO `quarto` (`codigoQuarto`, `nome`, `descricao`, `preco_uma_noite`, `preco_um_dia`) VALUES
(4, 'Quarto de Solteiro', 'QS', 'Preço Para Uma Noite: 6.210kz', 'Preço Para 1 dia: 13.740kz'),
(14, 'Quarto de Amigos', 'QA1', 'Preço Para Uma Noite: 6.700kz', 'Preço Para 1 dia: 13.740kz'),
(15, 'Quarto Para Casais', 'QPC1', 'Preço Para Uma Noite: 8.090kz', 'Preço Para 1 dia: 15.640kz'),
(16, 'Quarto da Azulado', 'Simples e Decorativo', 'Preço Para Uma Noite: 7.420kz', 'Preço Para 1 dia: 16.340kz'),
(17, 'Quarto Simples', 'Simplicidade', 'Preço Para Uma Noite: 4.520kz', 'Preço Para 1 dia: 10.540kz'),
(18, 'Quarto Scarlet', 'Imperial do Amor', 'Preço Para Uma Noite: 10.020kz', 'Preço Para 1 dia: 21.540kz'),
(19, 'Quarto Para Casais 2', 'QPC2', 'Preço Para Uma Noite: 9.960kz', 'Preço Para 1 dia: 19.530kz'),
(20, 'Quarto dos Céus', 'QC-QC', 'Preço Para Uma Noite: 10.020kz', 'Preço Para 1 dia: 21.540kz'),
(21, 'Quarto com uma bela paisagem', 'QCUBP', 'Preço Para Uma Noite: 8.520kz', 'Preço Para 1 dia: 17.540kz'),
(22, 'Quarto Branquinho', 'QB', 'Preço Para Uma Noite: 7.086kz', 'Preço Para 1 dia: 15.530kz'),
(23, 'Espectácular', 'QE', 'Preço Para Uma Noite: 11.580kz', 'Preço Para 1 dia: 22.590kz'),
(24, 'Solteiros', 'QS4', 'Preço Para Uma Noite: 10.020kz', 'Preço Para 1 dia: 21.540kz');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `codigoReserva` int NOT NULL,
  `datareser` varchar(12) NOT NULL,
  `dataentrada` varchar(12) NOT NULL,
  `datasaída` varchar(12) NOT NULL,
  `codigoClient` int DEFAULT NULL,
  `codigoQuarto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`codigoReserva`, `datareser`, `dataentrada`, `datasaída`, `codigoClient`, `codigoQuarto`) VALUES
(4, '2023-07-03', '2023-07-06', '2023-07-19', 4, 4),
(14, '2023-07-05', '2023-07-05', '2023-09-16', 14, 14),
(15, '2023-07-05', '2023-07-11', '2023-07-31', 15, 15),
(16, '2023-07-05', '2023-07-09', '2023-07-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `usuarioBD` varchar(30) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuarioBD`, `senha`) VALUES
(14, 'Freddy Whery', 'd13488d3d0f456b778537530a4a2bd92'),
(15, 'adm', '80177534a0c99a7e3645b52f2027a48b'),
(16, 'Ernesto Cayeye', 'c8e52e9c9ef7cf44adf22fe967589e6d'),
(17, 'Tiago Mambetuku', 'ee829009dd7f26f053e6320674ef7f9f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigoClient`);

--
-- Indexes for table `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`codigoQuarto`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`codigoReserva`),
  ADD KEY `ce_codigoClient` (`codigoClient`),
  ADD KEY `ce_codigoQuarto` (`codigoQuarto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoClient` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quarto`
--
ALTER TABLE `quarto`
  MODIFY `codigoQuarto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `codigoReserva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `ce_codigoClient` FOREIGN KEY (`codigoClient`) REFERENCES `cliente` (`codigoClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ce_codigoQuarto` FOREIGN KEY (`codigoQuarto`) REFERENCES `quarto` (`codigoQuarto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
