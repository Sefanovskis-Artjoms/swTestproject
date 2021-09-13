-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 02:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swproductdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `size` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `lenght` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `sku`, `name`, `price`, `size`, `weight`, `width`, `height`, `lenght`, `type`) VALUES
(1, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 1),
(2, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 1),
(3, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 1),
(4, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 1),
(5, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 2),
(6, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 2),
(7, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 2),
(8, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 2),
(9, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 3),
(10, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 3),
(11, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 3),
(12, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
