-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 08:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `road`
--

-- --------------------------------------------------------

--
-- Table structure for table `area 1`
--

CREATE TABLE `area 1` (
  `id` int(11) NOT NULL,
  `No Helmet` int(11) NOT NULL,
  `Overspeeding` int(100) NOT NULL,
  `Trippling` int(100) NOT NULL,
  `Month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area 1`
--

INSERT INTO `area 1` (`id`, `No Helmet`, `Overspeeding`, `Trippling`, `Month`) VALUES
(1, 45, 35, 20, 1),
(2, 55, 25, 20, 2),
(3, 45, 35, 20, 3),
(4, 70, 20, 10, 4),
(5, 40, 30, 30, 5),
(6, 70, 20, 10, 6),
(7, 40, 30, 30, 7),
(8, 40, 30, 30, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area 1`
--
ALTER TABLE `area 1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area 1`
--
ALTER TABLE `area 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
