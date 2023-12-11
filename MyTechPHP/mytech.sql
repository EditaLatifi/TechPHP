-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytech`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytechregjistrimi`
--

CREATE TABLE `mytechregjistrimi` (
  `ID` int(15) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Mbiemri` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Fjalekalimi` varchar(255) NOT NULL,
  `Shteti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regjistrohuni`
--

CREATE TABLE `regjistrohuni` (
  `ID` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regjistrohuni`
--

INSERT INTO `regjistrohuni` (`ID`, `username`, `email`, `password`) VALUES
(2, 'test', 'test@test.test', '05a671c66aefea124cc08b76ea6d30bb'),
(3, 'mustaf', 'ismajlim26@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Edison', 'edison2005@gmail.com', 'a110d2ac2d8b494d64ac352e47df3703'),
(5, 'Qendrim12', 'qendrim12@gmail.com', 'fe2a42259994de94b9776077338caf0d'),
(6, 'Arben21', 'beni@gmail.com', '570270d23cad5cfbf5b5f1015dbe9303'),
(7, 'Elion13', 'elion12@gmail.com', '12d8145231d805ebe90f75f94cb5c369');

-- --------------------------------------------------------

--
-- Table structure for table `regjistropajisjen`
--

CREATE TABLE `regjistropajisjen` (
  `serialnumber` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `meid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regjistropajisjen`
--

INSERT INTO `regjistropajisjen` (`serialnumber`, `name`, `model`, `version`, `imei`, `meid`) VALUES
(3, 'Laptop', 'Acer', '8.9.1230', 'sad2124342141we', '2313r13fc313');

-- --------------------------------------------------------

--
-- Table structure for table `regjistropuntorin`
--

CREATE TABLE `regjistropuntorin` (
  `ID` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regjistropuntorin`
--

INSERT INTO `regjistropuntorin` (`ID`, `name`, `email`, `password`, `qualification`, `contact`) VALUES
(10, 'Endrit', 'Endrit@gmail.com', 'endrit14', 'Programim', '+41323245523421');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regjistrohuni`
--
ALTER TABLE `regjistrohuni`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `regjistropajisjen`
--
ALTER TABLE `regjistropajisjen`
  ADD PRIMARY KEY (`serialnumber`);

--
-- Indexes for table `regjistropuntorin`
--
ALTER TABLE `regjistropuntorin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regjistrohuni`
--
ALTER TABLE `regjistrohuni`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `regjistropajisjen`
--
ALTER TABLE `regjistropajisjen`
  MODIFY `serialnumber` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regjistropuntorin`
--
ALTER TABLE `regjistropuntorin`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
