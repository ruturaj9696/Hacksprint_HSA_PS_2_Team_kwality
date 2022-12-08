-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 02:41 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwality`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_cart`
--

CREATE TABLE `book_cart` (
  `bid` int NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bprice` int NOT NULL,
  `bdes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book_cart`
--

INSERT INTO `book_cart` (`bid`, `bname`, `bprice`, `bdes`) VALUES
(1, 'Engineering Mathematics', 200, 'engineering mathematics consisted mostly of applied analysis, most notably:');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `comform` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cname`, `email`, `password`, `comform`) VALUES
(1, '', 'email', '123', '123'),
(2, '', 'email', '123', '123'),
(3, '', 'email', '123', '123'),
(4, '', 'email', '123', '123'),
(5, '', 'email', '123', '123'),
(6, '', 'email', '123', '123'),
(7, '', 'email', '123', '123'),
(8, '', 'email', '123', '123'),
(9, 'mahesh', 'motalemahesh7@gmail.com', '456', '456'),
(10, 'mahesh', 'motalemahesh7@gmail.com', '123', '123'),
(11, 'mahesh m', 'motalemahesh@gmail.com', '123', '123'),
(12, 'mahesh motale', 'motalemahesh77@gmail.com', '123', '123'),
(13, 'mahesh', 'motalemahesh@gmail.com', '123', '123'),
(14, 'mahesh', 'motalemahesh@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `oid` int NOT NULL,
  `ofname` varchar(100) NOT NULL,
  `olname` varchar(100) NOT NULL,
  `oemail` varchar(150) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `omobile` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`oid`, `ofname`, `olname`, `oemail`, `oaddress`, `omobile`) VALUES
(1, 'mahesh', 'motale', 'motalemahesh@gmail.com', 'pune', 64546416);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_cart`
--
ALTER TABLE `book_cart`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_cart`
--
ALTER TABLE `book_cart`
  MODIFY `bid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `oid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
