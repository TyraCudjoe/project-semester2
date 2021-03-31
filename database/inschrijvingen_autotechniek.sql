-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 08:37 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inschrijvingen_autotechniek`
--

-- --------------------------------------------------------

--
-- Table structure for table `inschrijvingen`
--

DROP TABLE IF EXISTS `inschrijvingen`;
CREATE TABLE IF NOT EXISTS `inschrijvingen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(20) NOT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `achternaam` varchar(20) NOT NULL,
  `geslacht` enum('m','v','x') NOT NULL,
  `geboortedatum` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefoonnummer` varchar(20) NOT NULL,
  `huisnummer` varchar(10) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inschrijvingen`
--

INSERT INTO `inschrijvingen` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `geslacht`, `geboortedatum`, `email`, `telefoonnummer`, `huisnummer`, `postcode`) VALUES
(1, 'kees', 'van', 'FSEdzcx', 'v', '2021-01-01', 'aronridder@hotmail.nl', '0648377848', '34', '3555VL'),
(2, 'kees', 'van', '123', 'v', '2021-01-01', 'aronridder@hotmail.nl', '1123', '34', '3555VL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
