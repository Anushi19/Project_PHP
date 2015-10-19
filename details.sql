-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2015 at 11:52 PM
-- Server version: 5.5.21
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Gender` varchar(9) NOT NULL,
  `Country` varchar(10) NOT NULL,
  PRIMARY KEY (`FirstName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`FirstName`, `LastName`, `Address`, `DOB`, `Password`, `Gender`, `Country`) VALUES
('Anushiya', 'sweety', 'Hatton', '1991-12-19', '123456', 'FeMale', 'Srilanka'),
('Banu', 'Niro', 'Kandy', '1991-12-30', 'i9ikok', 'Male', 'Srilanka'),
('Niranji', 'Usha', 'Kalkata', '2015-02-11', 'hidhfffhfh', 'Female', 'Srilanka'),
('Wicky', 'Prasi', 'Jekata', '2015-10-13', 'hjbhjhbjhb', 'Male', 'India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
