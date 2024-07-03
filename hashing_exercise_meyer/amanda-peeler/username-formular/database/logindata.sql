-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2024 at 08:20 AM
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
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `username` varchar(60) DEFAULT NULL,
  `passwort` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`username`, `passwort`) VALUES
('User1', '$2y$10$z0hjh9UXi4fiYd8KvBQflelCx1N9qF.7/eddv/xpxFh.aCaqjQT3C'),
('User2', '$2y$10$JIVCxS1FzYeq36DfKW5eh.lHTnE34ItCQVZrIcDIiH8JqABodjfri'),
('User3', '$2y$10$AOOq8e70H1MBjSR6wCVWVODhgaMjIxUg/w6c5.uVcyydwi7T3UId.'),
('User4', '$2y$10$rhRH02YVzMb72A2neVPjDOzIHEGRCzRAE/KdusQPRt2HbQ5scLltO'),
('User5', '$2y$10$t7Z.U2XPUXRocG2Vukhq.uOeAQkuiWAYe68XvWn5ZoNwiH6l7RwLe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
