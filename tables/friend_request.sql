-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2013 at 08:56 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `facebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `ID_User_sent_fr` int(5) DEFAULT NULL,
  `ID_User_recieve_fr` int(5) DEFAULT NULL,
  `situation_of_fr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`ID_User_sent_fr`, `ID_User_recieve_fr`, `situation_of_fr`) VALUES
(44, 44, 'waiting'),
(44, 44, 'waiting'),
(44, 44, 'waiting'),
(48, 44, 'waiting'),
(48, 44, 'waiting'),
(48, 44, 'waiting'),
(48, 0, 'waiting'),
(48, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 0, 'waiting'),
(4, 0, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting'),
(4, 44, 'waiting');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
