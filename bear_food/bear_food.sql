-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Abr-2017 às 23:42
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bear_food`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`) VALUES
(1, 'GILSON'),
(2, 'RODRIGO'),
(3, 'WALTER'),
(4, 'ANGELA'),
(5, 'CRISTIANO'),
(7, 'THOMAS'),
(8, 'SUELEN'),
(9, 'VANUSA'),
(10, 'ZE'),
(11, 'JAQUE/VITOR'),
(12, 'LUANA'),
(13, 'GIBINHO'),
(14, 'IDELVAN'),
(15, 'ANTONY');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `desc_produto` varchar(50) NOT NULL,
  `custo_produto` decimal(10,2) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `desc_produto`, `custo_produto`, `valor_produto`) VALUES
(2, 'BANANINHA 100G', '1.40', '2.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `produto_venda` int(11) NOT NULL,
  `cliente_venda` int(11) NOT NULL,
  `qtd_venda` int(11) NOT NULL,
  `total_venda` decimal(10,2) NOT NULL,
  `data_venda` date NOT NULL,
  `status_venda` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `produto_venda`, `cliente_venda`, `qtd_venda`, `total_venda`, `data_venda`, `status_venda`) VALUES
(6, 2, 8, 1, '2.50', '2017-03-16', 'P'),
(7, 2, 1, 1, '2.50', '2017-03-16', 'P'),
(8, 2, 3, 2, '5.00', '2017-03-16', 'P'),
(9, 2, 3, 1, '2.50', '2017-03-16', 'P'),
(10, 2, 5, 1, '2.50', '2017-03-16', 'P'),
(11, 2, 2, 1, '2.50', '2017-03-16', 'P'),
(12, 2, 4, 1, '2.50', '2017-03-16', 'P'),
(13, 2, 9, 1, '2.50', '2017-03-16', 'P'),
(14, 2, 7, 2, '5.00', '2017-03-16', 'A'),
(15, 2, 10, 1, '2.50', '2017-03-16', 'A'),
(16, 2, 11, 1, '2.50', '2017-03-16', 'A'),
(17, 2, 12, 1, '2.50', '2017-03-16', 'P'),
(18, 2, 1, 1, '2.50', '2017-03-17', 'P'),
(19, 2, 3, 2, '5.00', '2017-03-17', 'P'),
(20, 2, 2, 1, '2.50', '2017-03-17', 'P'),
(21, 2, 10, 1, '2.50', '2017-03-17', 'A'),
(22, 2, 11, 1, '2.50', '2017-03-17', 'P'),
(23, 2, 12, 1, '2.50', '2017-03-17', 'A'),
(24, 2, 5, 1, '2.50', '2017-03-18', 'P'),
(25, 2, 7, 1, '2.50', '2017-03-18', 'A'),
(26, 2, 13, 1, '2.50', '2017-03-18', 'P'),
(27, 2, 15, 1, '2.50', '2017-03-18', 'A'),
(28, 2, 14, 1, '2.50', '2017-03-18', 'P'),
(29, 2, 11, 1, '2.50', '2017-03-18', 'A'),
(30, 2, 3, 2, '5.00', '2017-03-21', 'P'),
(31, 2, 2, 1, '2.50', '2017-03-21', 'P'),
(34, 2, 14, 1, '2.50', '2017-03-21', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
