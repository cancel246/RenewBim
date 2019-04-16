-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:59 PM
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
  `cost` decimal(10,2) NOT NULL,
  `DailyUse` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`ModelNum`, `ItemType`, `Brand`, `Watts`, `cost`, `DailyUse`) VALUES
('23612', 'Oven', 'Costway', '2.85', '1166.50', '2.00'),
('24791', 'Toaster', 'Hamilton Beach', '0.35', '34.99', '0.25'),
('ATMP032AEB', 'Refrigerator', 'Arctic King', '4.40', '170.00', '0.00'),
('HYK-24WOX01', 'Oven', 'Hyaki', '3.25', '1175.91', '2.00'),
('KQC65C-12', 'Oven', 'Empava', '2.00', '1157.00', '2.00'),
('KSTRC312CW', 'Refrigerator', 'Keystone', '4.40', '462.58', '24.00'),
('SC712U', 'Oven', 'Linea', '2.75', '299.00', '2.00'),
('SOU330X1', 'Oven', 'Smeg', '3.50', '2699.00', '2.00');

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
-- Dumping data for table `efficient`
--

INSERT INTO `efficient` (`ModelNum`, `Brand`, `Type`, `Cost`, `Watts`, `Savings`) VALUES
('49976', 'Hamilton Beach', 'Coffee Maker', '89.99', '0.35', '0.00'),
('BCCG08-RFP-NP9', 'Oster', 'Blender', '79.50', '0.34', '0.00'),
('DBI675', 'Asko', 'Dishwasher', '949.00', '0.64', '0.00'),
('FF1084W', 'Summit', 'Refrigerator', '642.00', '0.81', '0.00'),
('NE59M4310SS', 'Samsung', 'Oven', '549.99', '1.24', '0.00'),
('NN-SB458S', 'Panasonic', 'Microwave', '99.95', '0.45', '0.00'),
('NS-CZ35WH9', 'Insignia', 'Freezer', '139.99', '0.52', '0.00'),
('TR1278B', 'Black + Decker', 'Toaster', '18.94', '0.24', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `solarpanel`
--

CREATE TABLE `solarpanel` (
  `id` varchar(25) NOT NULL,
  `ModelNum` varchar(25) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `kwh` decimal(10,2) NOT NULL,
  `cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solarpanel`
--

INSERT INTO `solarpanel` (`id`, `ModelNum`, `Brand`, `kwh`, `cost`) VALUES
('solarpanel1', 'LG330N1C-A5', 'LG Electronics', '3.79', '544.50'),
('solarpanel2', 'LG330N1C-A5', 'LG Electronics', '7.58', '1089.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`ModelNum`);

--
-- Indexes for table `efficient`
--
ALTER TABLE `efficient`
  ADD PRIMARY KEY (`ModelNum`);

--
-- Indexes for table `solarpanel`
--
ALTER TABLE `solarpanel`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
