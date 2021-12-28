-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 10:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `detailId` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `instrumentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detailId`, `code`, `name`, `price`, `instrumentID`) VALUES
(1, 'strat', 'Fender Stratocaster', '699.00', 1),
(2, 'les_paul', 'Gibson Les Paul', '1199.00', 1),
(3, 'sg', 'Gibson SG', '2517.00', 1),
(4, 'fg700s', 'Yamaha FG700S', '489.99', 1),
(5, 'washburn', 'Washburn D10S', '299.00', 1),
(6, 'rodriguez', 'Rodriguez Caballero 11', '415.00', 1),
(7, 'rogue_sx100b', 'Rogue SX100B Series II Electric Bass Guitar', '120.65', 2),
(8, 'hofner', 'Hofner Ignition Series Violin Bass', '536.25', 2),
(9, 'stering', 'Hofner Ignition Series Violin Bass', '335.15', 2),
(10, 'epiphone', 'Epiphone Jack Casady Bass', '1071.19', 2),
(11, 'epiphone_sg', 'Epiphone SG Bass', '601.96', 2),
(12, 'mapex', 'MARS 5-Piece Shell Pack - Cherry Red Lacquer', '945.00', 3),
(13, 'pearl', 'Compact Traveler Kit 18\' Bass Drum and 10\' Snare', '269.00', 3),
(14, 'mapex_limit', 'Limited Edition Armory 6-Piece Studioease Shell Pa', '1599.00', 3),
(15, 'alesis', 'Alesis Drums Nitro Mesh Kit - Electric Drum Set', '549.00', 3),
(16, 'soundoff', 'SoundOff by Evans Full Box Set, Fusion', '138.06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `detailid_seq`
--

CREATE TABLE `detailid_seq` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB;

--
-- Dumping data for table `detailid_seq`
--

INSERT INTO `detailid_seq` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(17, 1, 9223372036854775806, 17, 1, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `instrumentId` int(11) NOT NULL,
  `instrumentName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`instrumentId`, `instrumentName`) VALUES
(1, 'Guitars'),
(2, 'Basses'),
(3, 'Drums');

-- --------------------------------------------------------

--
-- Table structure for table `instrumentid_seq`
--

CREATE TABLE `instrumentid_seq` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB;

--
-- Dumping data for table `instrumentid_seq`
--

INSERT INTO `instrumentid_seq` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(4, 1, 9223372036854775806, 4, 1, 1000, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`detailId`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`instrumentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `detailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `instrumentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
