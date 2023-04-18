-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 04:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srbijanocu`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokali`
--

CREATE TABLE `lokali` (
  `lokal_id` int(11) NOT NULL,
  `naziv_lokala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ulica` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vrsta_muzike_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_muzike`
--

CREATE TABLE `vrsta_muzike` (
  `id` int(11) NOT NULL,
  `vrsta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vrsta_muzike`
--

INSERT INTO `vrsta_muzike` (`id`, `vrsta`) VALUES
(1, 'Narodna i pop'),
(2, 'Rock'),
(3, 'Bluz'),
(4, 'Tamburasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokali`
--
ALTER TABLE `lokali`
  ADD PRIMARY KEY (`lokal_id`),
  ADD KEY `vrsta_muzike_id` (`vrsta_muzike_id`);

--
-- Indexes for table `vrsta_muzike`
--
ALTER TABLE `vrsta_muzike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokali`
--
ALTER TABLE `lokali`
  MODIFY `lokal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vrsta_muzike`
--
ALTER TABLE `vrsta_muzike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokali`
--
ALTER TABLE `lokali`
  ADD CONSTRAINT `lokali_ibfk_1` FOREIGN KEY (`vrsta_muzike_id`) REFERENCES `vrsta_muzike` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
