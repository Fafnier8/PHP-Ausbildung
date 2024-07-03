-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2024 at 01:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `CustomerData`
--

CREATE TABLE `CustomerData` (
  `Vorname` varchar(50) DEFAULT NULL,
  `Nachname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Wohnort` varchar(50) DEFAULT NULL,
  `Geburtsdatum` varchar(10) DEFAULT NULL,
  `EMail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CustomerData`
--

INSERT INTO `CustomerData` (`Vorname`, `Nachname`, `Username`, `Wohnort`, `Geburtsdatum`, `EMail`) VALUES
('test', 'test', 'test', 'test', '0001-01-01', 'test@test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CustomerData`
--
ALTER TABLE `CustomerData`
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CustomerData`
--
ALTER TABLE `CustomerData`
  ADD CONSTRAINT `CustomerData_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `CustomerAccount` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
