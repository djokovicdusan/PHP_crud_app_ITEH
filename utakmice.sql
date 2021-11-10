-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 07:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utakmice`
--

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `sportID` int(11) NOT NULL,
  `nazivSporta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sportID`, `nazivSporta`) VALUES
(1, 'Fudbal'),
(2, 'Košarka'),
(3, 'Rukomet'),
(4, 'Vaterpolo'),
(5, 'Odbojka'),
(6, 'Futsal');

-- --------------------------------------------------------

--
-- Table structure for table `utakmica`
--

CREATE TABLE `utakmica` (
  `utakmicaID` int(11) NOT NULL,
  `nazivUtakmice` varchar(100) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `sport` int(11) NOT NULL,
  `cenaKarte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`sportID`);

--
-- Indexes for table `utakmica`
--
ALTER TABLE `utakmica`
  ADD PRIMARY KEY (`utakmicaID`),
  ADD KEY `fk` (`sport`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utakmica`
--
ALTER TABLE `utakmica`
  MODIFY `utakmicaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `utakmica`
--
ALTER TABLE `utakmica`
  ADD CONSTRAINT `fk` FOREIGN KEY (`sport`) REFERENCES `sport` (`sportID`);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
