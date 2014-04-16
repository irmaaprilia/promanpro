-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2014 at 01:01 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `promanpro`
--
CREATE DATABASE IF NOT EXISTS `promanpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `promanpro`;

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE IF NOT EXISTS `invitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date DEFAULT NULL,
  `adminProject` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `adminProject` (`adminProject`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Name`, `Description`, `Status`, `Start_Date`, `End_Date`, `adminProject`) VALUES
(1, 'test', 'test', 'test', '0000-00-00', '0000-00-00', ''),
(2, 'test2', 'test', '', '2014-04-11', '2014-04-15', ''),
(4, 'test23', 'test23', '', '2014-04-11', '2014-04-15', ''),
(12, 'j', '', '', '0000-00-00', '0000-00-00', 'aa'),
(13, 'h', '', '', '0000-00-00', '0000-00-00', 'aa'),
(14, 'i', '', '', '0000-00-00', '0000-00-00', 'aa'),
(15, 'q', '', '', '0000-00-00', '0000-00-00', 'aa'),
(16, 'w', '', '', '0000-00-00', '0000-00-00', 'testname'),
(17, 'r', '', '', '0000-00-00', '0000-00-00', 'testname'),
(18, 'y', '', '', '0000-00-00', '0000-00-00', 'testname'),
(19, 'u', '', '', '0000-00-00', '0000-00-00', 'aa'),
(20, 't', '', '', '0000-00-00', '0000-00-00', 'aa'),
(21, 'g', '', '', '0000-00-00', '0000-00-00', '1'),
(22, 'k', '', '', '0000-00-00', '0000-00-00', 'aa'),
(23, 'c', '', '', '0000-00-00', '0000-00-00', 'aa'),
(24, 'x', '', '', '0000-00-00', '0000-00-00', '1'),
(25, 'p', '', '', '2014-04-15', '0000-00-00', 'aa'),
(26, 'l', '', '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` text,
  `PJ` varchar(20) NOT NULL,
  `Progress` int(11) NOT NULL,
  `Start_Time` date NOT NULL,
  `End_Time` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`ID`, `Name`, `Description`, `PJ`, `Progress`, `Start_Time`, `End_Time`) VALUES
(1, 'test', NULL, '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Name`, `Email`) VALUES
(2, 'testname', 'testpwd', 'test', 'test@test.com'),
(3, 'testname2', 'test2', 'test2', 'test2@test.com'),
(4, 'aa', 'aa', 'aa', 'aa@aa.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
