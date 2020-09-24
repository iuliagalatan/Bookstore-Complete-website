-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 10:58 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atestat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

DROP TABLE IF EXISTS `carti`;
CREATE TABLE `carti` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(14) NOT NULL,
  `AUTORUL` varchar(20) NOT NULL,
  `TITLUL` varchar(25) NOT NULL,
  `ANUL_AP` int(11) NOT NULL,
  `NR_VOL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`id`, `ISBN`, `AUTORUL`, `TITLUL`, `ANUL_AP`, `NR_VOL`) VALUES
(1, '12345', 'Marin Preda ', 'Morometii ', 1955, 1),
(2, '22334', 'Marin Preda', 'Morometii', 1967, 2),
(3, '56258', 'Liviu Rebreanu', 'Ion', 1920, 1),
(4, '27859', 'Liviu Rebreanu', 'Rascoala', 1920, 5),
(5, '12349', 'Mihai Eminescu', 'Poezii', 1880, 10),
(6, '145677', 'df ghfgh fgh fgh ', 'dgxdfgh dfg hfg ghj kyuh', 1953, 5);

-- --------------------------------------------------------

--
-- Table structure for table `comentarii`
--

DROP TABLE IF EXISTS `comentarii`;
CREATE TABLE `comentarii` (
  `id` int(11) NOT NULL,
  `continut` text NOT NULL,
  `nume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `aprobat` tinyint(4) NOT NULL,
  `pagina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarii`
--

INSERT INTO `comentarii` (`id`, `continut`, `nume`, `email`, `data`, `aprobat`, `pagina`) VALUES
(1, 'sDAKJ sdlkf lskf s\r\ndf g\r\nd fgd \r\n\r\n dfdf fg hf dmknsfl kjslkrl;k selkew', 'Silviu', 'silviu@cnlr.ro', '2019-05-07 11:55:58', 0, 'index');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `parola` varchar(50) NOT NULL,
  `este_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `user`, `parola`, `este_admin`) VALUES
(1, 'Andreea', '66ec320931e77733a50425addd470676614d1bbd', 0),
(2, 'Admin', 'a5d97db5a109507fd527e244e773f678cb52daeb', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carti`
--
ALTER TABLE `carti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarii`
--
ALTER TABLE `comentarii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carti`
--
ALTER TABLE `carti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comentarii`
--
ALTER TABLE `comentarii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
