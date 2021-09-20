-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 12:35 AM
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
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `sku`, `name`, `price`, `size`, `weight`, `width`, `height`, `lenght`, `type`) VALUES
(1, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 'DVD'),
(2, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 'DVD'),
(3, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 'DVD'),
(4, 'JVC09230984', 'ACME DISC', 1, 700, NULL, NULL, NULL, NULL, 'DVD'),
(5, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 'Book'),
(6, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 'Book'),
(7, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 'Book'),
(8, 'GGW903284', 'War and peace', 20, NULL, 2, NULL, NULL, NULL, 'Book'),
(9, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 'Furniture'),
(10, 'TR92387492', 'Chair', 50, NULL, NULL, 45, 25, 15, 'Furniture'),
(30, 'aa', 'aa', 1, 0, 1, 0, 0, 0, 'Book'),
(31, 'bbb', 'disc', 111, 500, 0, 0, 0, 0, 'DVD'),
(32, 'cccc', 'furniture', 222, 0, 0, 2, 1, 3, 'Furniture');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

