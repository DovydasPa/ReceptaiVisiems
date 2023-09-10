-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 01:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Vardas` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Slaptažodis` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Vardas`, `Slaptažodis`) VALUES
('dovydas', '123456'),
('dovydas', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `produktai`
--

CREATE TABLE `produktai` (
  `id` int(100) NOT NULL,
  `pavadinimas` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_lithuanian_ci NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `foto` varchar(200) CHARACTER SET ucs2 COLLATE ucs2_lithuanian_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code2` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produktai`
--

INSERT INTO `produktai` (`id`, `pavadinimas`, `price`, `foto`, `code`, `code2`) VALUES
(1, 'hot chilli cheese', '15', 'hot chilli cheese.jpg', 'suris', 'aaa'),
(2, 'Pork Cabbage', '25', 'Pork Cabbage.jpg', 'mesa', 'asd'),
(3, 'Turmeric Chicken', '30', 'Turmeric Chicken.jpg', 'mesa', 'asd'),
(4, 'Kijevo kotletai', '5', 'kijevo kotletai.jpg', 'mesa', 'asd'),
(5, 'Tropical heat-mixed spices', '8', 'Tropical heat-mixed spices.jpg', 'prieskoniai', 'dsd'),
(6, 'Club house- tex mex spices', '12', 'Club house- tex mex spices.jpg', 'prieskoniai', 'dsd'),
(8, '1400s spices- mexican oregano', '18', '1400s spices- mexican oregano.jpg', 'prieskoniai', 'dsd'),
(9, 'Grana Padano-hard cheese', '9', 'Grana Padano-hard cheese.jpg', 'suris', 'aaa'),
(13, 'Brie president- cheese with white mold', '16', 'Brie president- cheese with white mold.jpg', 'suris', 'aaa'),
(14, 'Brie president- cheese with white mold', '16', 'Brie president- cheese with white mold.jpg', 'suris', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(100) NOT NULL,
  `Vardas` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Pavardė` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `El.paštas` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Telefonas` int(9) NOT NULL,
  `Slaptažodis` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Slaptažodis 2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `Vardas`, `Pavardė`, `El.paštas`, `Telefonas`, `Slaptažodis`, `Slaptažodis 2`) VALUES
(1, 'tadas', 'tadauskas', 'tadas@gmail.com', 867725620, 'tadas1', 'tadas1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produktai`
--
ALTER TABLE `produktai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produktai`
--
ALTER TABLE `produktai`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
