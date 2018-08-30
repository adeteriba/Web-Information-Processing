-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 01:49 PM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `property` text NOT NULL COMMENT 'Property',
  `data_type` varchar(50) NOT NULL COMMENT 'Data Type',
  `property_decription` text NOT NULL COMMENT 'Property Description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains Assignment Grades for Students';

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'John', 'Doe', 'john@example.com', '2018-03-19 14:56:45'),
(2, 'Mary', 'Moe', 'mary@example.com', '2018-03-19 14:56:45'),
(3, 'Julie', 'Dooley', 'julie@example.com', '2018-03-19 14:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `tablecs230`
--

CREATE TABLE `tablecs230` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Creator` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Identifier` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Language` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablecs230`
--

INSERT INTO `tablecs230` (`ID`, `Creator`, `Title`, `Type`, `Identifier`, `Date`, `Language`, `Description`) VALUES
(5, 'Ade', 'Intro To Java', 'Non-Fiction, Education, Java, Computer Science', 'ISBN', '2018-03-19 17:24:43', 'EN-US, EN-IE, FR-CA, DE-DE', 'Intro To Java is an easy-to-follow textbook that guides the beginning programmer step-by-step through the process of learning Java. Intro TO Java is the perfect text for anyone new to Java who wants a comprehensive, easy-to-comprehend reference.'),
(7, 'Elliot', 'Intro To Python', 'Non-Fiction, Education, Python, Computer Science', 'ISBN', '2018-03-19 18:49:55', 'EN-US, EN-IE, FR-CA, DE-DE', 'This book is designed to be used as the primary textbook in a college-level first course in computing. It takes a fairly traditional approach, emphasizing problem solving, design, and programming as the core skills of computer science.'),
(9, 'Ben', 'Web Information Processing', 'Non-Fiction, Education, JavaScript, PHP', 'ISBN', '2018-03-19 19:41:57', 'EN-US, EN-IE, FR-CA, DE-DE', 'You need to have some programming experience in order to take this module. The languages learned include PHP and JavaScript. You will need to become familiar with HTML (for structuring web page content) and CSS (for styling web content).'),
(10, 'Cathal', 'Intro to C++', 'Non-Fiction, Education, Python, Computer Science', 'ISBN', '2018-03-19 20:02:58', 'EN-US, EN-IE, FR-CA, DE-DE', 'This book is designed to be used as the primary textbook in a college-level first course in computing. It takes a fairly traditional approach, emphasizing problem solving, design, and programming as the core skills of computer science.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablecs230`
--
ALTER TABLE `tablecs230`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tablecs230`
--
ALTER TABLE `tablecs230`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
