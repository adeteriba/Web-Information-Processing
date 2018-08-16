-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 05:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs230`
--

-- --------------------------------------------------------

--
-- Table structure for table `w3schools`
--

CREATE TABLE `w3schools` (
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `w3schools`
--

INSERT INTO `w3schools` (`name`, `country`) VALUES
(' Alfreds Futterkiste', 'Germany'),
('Adekunle Teriba', 'Nigeria'),
('Around the Horn', 'UK'),
('B\'s Beverages', 'UK'),
('Berglunds snabbköp', 'Sweden'),
('Blondel père et fils', 'France'),
('Bon app', 'France'),
('Centro comercial Moctezuma', 'Mexico'),
('Chop-suey Chinese', 'Switzerland'),
('Comércio Mineiro', 'Brazil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `w3schools`
--
ALTER TABLE `w3schools`
  ADD PRIMARY KEY (`name`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
