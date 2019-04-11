-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 11:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renew_bim`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `ModelNum` varchar(25) NOT NULL,
  `ItemType` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Watts` decimal(10,2) NOT NULL,
  `cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`ModelNum`, `ItemType`, `Brand`, `Watts`, `cost`) VALUES
('23612', 'Oven', 'Costway', '2.85', '1166.50'),
('ATMP032AEB', 'Refrigerator', 'Arctic King', '4.40', '170.00'),
('HYK-24WOX01', 'Oven', 'Hyaki', '3.25', '1175.91'),
('KQC65C-12', 'Oven', 'Empava', '2.00', '1157.00'),
('KSTRC312CW', 'Refrigerator', 'Keystone', '4.40', '462.58'),
('R24781', 'Toaster', 'Hamilton Beach', '2.00', '75.00'),
('SC712U', 'Oven', 'Linea', '2.75', '299.00'),
('SOU330X1', 'Oven', 'Smeg', '3.50', '2699.00');

-- --------------------------------------------------------

--
-- Table structure for table `efficient`
--

CREATE TABLE `efficient` (
  `ModelNum` varchar(25) NOT NULL,
  `Brand` varchar(35) NOT NULL,
  `Type` varchar(35) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Watts` decimal(10,2) NOT NULL,
  `Savings` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`ModelNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
