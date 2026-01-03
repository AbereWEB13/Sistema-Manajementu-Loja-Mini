-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2026 at 11:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fornesedor`
--

CREATE TABLE `tbl_fornesedor` (
  `id_fornesedor` int NOT NULL,
  `naran_fornesedor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telemovel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `enderesu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `estatutu` enum('ativu','la_ativu') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_fornesedor`
--

INSERT INTO `tbl_fornesedor` (`id_fornesedor`, `naran_fornesedor`, `telemovel`, `email`, `enderesu`, `estatutu`) VALUES
(15, 'Loja Perfecto', '71000000', 'sasasa', 'sasas', 'ativu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoria`
--

CREATE TABLE `tbl_kategoria` (
  `id_kategoria` int NOT NULL,
  `naran_kategoria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kategoria`
--

INSERT INTO `tbl_kategoria` (`id_kategoria`, `naran_kategoria`) VALUES
(11, 'Mobile Phone'),
(18, 'Watches'),
(19, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kompras`
--

CREATE TABLE `tbl_kompras` (
  `id_kompras` int NOT NULL,
  `kode_kompras` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `data_kompras` date DEFAULT NULL,
  `id_fornesedor` int DEFAULT NULL,
  `total` decimal(12,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kompras`
--

INSERT INTO `tbl_kompras` (`id_kompras`, `kode_kompras`, `data_kompras`, `id_fornesedor`, `total`) VALUES
(13, 'K001', '2026-01-06', 15, '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kompras_item`
--

CREATE TABLE `tbl_kompras_item` (
  `id_item` int NOT NULL,
  `id_kompras` int DEFAULT NULL,
  `id_produtu` int DEFAULT NULL,
  `presu_modal` decimal(10,2) DEFAULT '0.00',
  `kuantidade` int DEFAULT '0',
  `subtotal` decimal(12,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kompras_item`
--

INSERT INTO `tbl_kompras_item` (`id_item`, `id_kompras`, `id_produtu`, `presu_modal`, `kuantidade`, `subtotal`) VALUES
(3, 8, 48, '1500.00', 1, NULL),
(5, 12, 54, '0.00', 0, NULL),
(7, 13, 60, '1600.00', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kostumer`
--

CREATE TABLE `tbl_kostumer` (
  `id_kostumer` int NOT NULL,
  `naran_kostumer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telemovel` varchar(50) DEFAULT NULL,
  `enderesu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kostumer`
--

INSERT INTO `tbl_kostumer` (`id_kostumer`, `naran_kostumer`, `email`, `telemovel`, `enderesu`) VALUES
(5, 'Salvador Gomes', 'aberegomes9@gmail.com', '74603313', 'Manleuana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produtu`
--

CREATE TABLE `tbl_produtu` (
  `id_produtu` int NOT NULL,
  `kode_produtu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `naran_produtu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_kategoria` int DEFAULT NULL,
  `id_subkategoria` int DEFAULT NULL,
  `presu_modal` decimal(10,2) DEFAULT NULL,
  `presu_vendas` decimal(10,2) DEFAULT NULL,
  `stok` int DEFAULT '0',
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_produtu`
--

INSERT INTO `tbl_produtu` (`id_produtu`, `kode_produtu`, `naran_produtu`, `id_kategoria`, `id_subkategoria`, `presu_modal`, `presu_vendas`, `stok`, `image`) VALUES
(60, 'MP001', 'Iphone 17 Pro Max ', 11, 5, '1000.00', '1299.00', 12, '1767163578_2d1e8944625fafef656c.jpg'),
(63, 'SW001', 'Apple Watch Series 10 GPS 46mm', 18, 9, '450.00', '549.00', 8, '1767166301_f3df3d4e9686451fe83a.jpg'),
(64, 'MP002', 'Iphone 17 Pro ', 11, 5, '900.00', '1199.00', 10, '1767167116_051b65136c8ed1554a49.jpg'),
(65, 'MP003', 'Iphone 16 Pro Max ', 11, 5, '950.00', '1250.00', 12, '1767167792_71eb5fd54fd2ecc3237a.jpg'),
(66, 'MP004', 'Iphone 16 Pro ', 11, 5, '850.00', '1150.00', 16, '1767167877_7bca7ae5f4943a891968.jpg'),
(67, 'L001', 'Macbook Pro M1 (16inch)', 19, 10, '1600.00', '1899.00', 12, '1767168469_d53b2dfb14af72822c13.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int NOT NULL,
  `naran_role` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subkategoria`
--

CREATE TABLE `tbl_subkategoria` (
  `id_subkategoria` int NOT NULL,
  `id_kategoria` int DEFAULT NULL,
  `naran_subkategoria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskrisaun` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_subkategoria`
--

INSERT INTO `tbl_subkategoria` (`id_subkategoria`, `id_kategoria`, `naran_subkategoria`, `deskrisaun`) VALUES
(5, 11, 'Smartphone', 'Phone'),
(9, 18, 'Smart Watch', 'Watches'),
(10, 19, 'Macbook Pro', 'Macbook');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `naran_kompletu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(19) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_role` int DEFAULT NULL,
  `ativu` enum('Ativu','Inativu') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Ativu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendas`
--

CREATE TABLE `tbl_vendas` (
  `id_vendas` int NOT NULL,
  `kode_vendas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_kostumer` int DEFAULT NULL,
  `data_vendas` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `metodu_pagu` varchar(50) DEFAULT NULL,
  `estatutu` enum('Pendente','Kompletu','Kanseladu') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_vendas`
--

INSERT INTO `tbl_vendas` (`id_vendas`, `kode_vendas`, `id_kostumer`, `data_vendas`, `total`, `metodu_pagu`, `estatutu`) VALUES
(6, 'V001', 5, '2025-12-03', '5000.00', 'Transfer', 'Kompletu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendas_item`
--

CREATE TABLE `tbl_vendas_item` (
  `id_vendas_item` int NOT NULL,
  `id_vendas` int NOT NULL,
  `id_produtu` int DEFAULT NULL,
  `presu_vendas` decimal(10,2) DEFAULT '0.00',
  `kuantidade` int DEFAULT '0',
  `subtotal` decimal(12,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_vendas_item`
--

INSERT INTO `tbl_vendas_item` (`id_vendas_item`, `id_vendas`, `id_produtu`, `presu_vendas`, `kuantidade`, `subtotal`) VALUES
(6, 6, 54, '1450.00', 5, NULL),
(7, 6, 54, '1450.00', 8, NULL),
(8, 6, 60, '1299.00', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fornesedor`
--
ALTER TABLE `tbl_fornesedor`
  ADD PRIMARY KEY (`id_fornesedor`);

--
-- Indexes for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indexes for table `tbl_kompras`
--
ALTER TABLE `tbl_kompras`
  ADD PRIMARY KEY (`id_kompras`);

--
-- Indexes for table `tbl_kompras_item`
--
ALTER TABLE `tbl_kompras_item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_produtu` (`id_produtu`),
  ADD KEY `id_kompra` (`id_kompras`);

--
-- Indexes for table `tbl_kostumer`
--
ALTER TABLE `tbl_kostumer`
  ADD PRIMARY KEY (`id_kostumer`);

--
-- Indexes for table `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  ADD PRIMARY KEY (`id_produtu`),
  ADD KEY `id_kategoria` (`id_kategoria`),
  ADD KEY `id_subkategoria` (`id_subkategoria`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_subkategoria`
--
ALTER TABLE `tbl_subkategoria`
  ADD PRIMARY KEY (`id_subkategoria`),
  ADD KEY `id_kategoria` (`id_kategoria`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  ADD PRIMARY KEY (`id_vendas`),
  ADD KEY `id_kostumer` (`id_kostumer`);

--
-- Indexes for table `tbl_vendas_item`
--
ALTER TABLE `tbl_vendas_item`
  ADD PRIMARY KEY (`id_vendas_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fornesedor`
--
ALTER TABLE `tbl_fornesedor`
  MODIFY `id_fornesedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  MODIFY `id_kategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kompras`
--
ALTER TABLE `tbl_kompras`
  MODIFY `id_kompras` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kompras_item`
--
ALTER TABLE `tbl_kompras_item`
  MODIFY `id_item` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kostumer`
--
ALTER TABLE `tbl_kostumer`
  MODIFY `id_kostumer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  MODIFY `id_produtu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subkategoria`
--
ALTER TABLE `tbl_subkategoria`
  MODIFY `id_subkategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  MODIFY `id_vendas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_vendas_item`
--
ALTER TABLE `tbl_vendas_item`
  MODIFY `id_vendas_item` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  ADD CONSTRAINT `tbl_produtu_ibfk_1` FOREIGN KEY (`id_kategoria`) REFERENCES `tbl_kategoria` (`id_kategoria`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_produtu_ibfk_2` FOREIGN KEY (`id_subkategoria`) REFERENCES `tbl_subkategoria` (`id_subkategoria`) ON DELETE SET NULL;

--
-- Constraints for table `tbl_subkategoria`
--
ALTER TABLE `tbl_subkategoria`
  ADD CONSTRAINT `tbl_subkategoria_ibfk_1` FOREIGN KEY (`id_kategoria`) REFERENCES `tbl_kategoria` (`id_kategoria`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);

--
-- Constraints for table `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  ADD CONSTRAINT `tbl_vendas_ibfk_1` FOREIGN KEY (`id_kostumer`) REFERENCES `tbl_kostumer` (`id_kostumer`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
