-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2013 at 08:58 PM
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
-- Table structure for table `user4`
--

CREATE TABLE IF NOT EXISTS `user4` (
  `ID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) DEFAULT NULL,
  `Family` varchar(90) DEFAULT NULL,
  `User` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `user4`
--

INSERT INTO `user4` (`ID`, `Name`, `Family`, `User`, `Password`) VALUES
(00004, 'pouya', 'gonbadi', 'pouyas', '123456'),
(00005, 'ali', 'gonbadi', 'alis', '1234'),
(00021, 'pouya', 'gonbadi', 'pouya567', '123456'),
(00022, 'hossein', 'hosseinzadeh', 'h_hoseinzade', '124321'),
(00023, 'p', 'p', 'rswtddhdh', '1234567'),
(00024, 'pouya', 'gonbadi', 'pouyagonbadi', '1342497377'),
(00025, 'pouya', 'gonbadi', 'pouyagonbadi1', '1342497377'),
(00026, 'pouya', 'gonbadi', 'pouyagonbadi2', '134249'),
(00027, 'pouya', 'gonbadi', 'pouyagonbadi3', '111111'),
(00028, 'parvin', 'bah', 'paryapooya', 'pooyapooya'),
(00029, 'javad', 'gonbadi', 'javadd', '5559743'),
(00030, 'rterttyft', 'ygfyugyug', 'poiuytr', '123456'),
(00031, 'pouya', 'gonbadi', 'pouya1234', '111111'),
(00032, 'pouya', 'gonbadi', 'pouyas111', '111111'),
(00033, 'pouya', 'gonbadi', 'pouyas112', '111111'),
(00034, 'pouya', 'gonbadi', 'pouyas113', '111111'),
(00035, 'p', 'p', 'pouyas111111111', '111111'),
(00036, 'p', 'p', 'pouyas111111112', '111111'),
(00037, 'pouya', 'gonnbadi', 'pou222', '111111'),
(00038, 'pouya', 'gonnbadi', 'pou221', '111111'),
(00039, 'pouya', 'gonnbadi', 'pou220', '111111'),
(00040, 'pouya', 'gonnbadi', 'pou223', '111111'),
(00041, 'pouya', 'gonnbadi', 'pou225', '111111'),
(00042, 'pouya', 'gonbadi', 'dadcxda', '111111'),
(00043, 'pouya', 'gonbadi', 'dadcxdaa', '111111'),
(00044, '', '', '', ''),
(00045, 'pouya', 'gonbadi', 'poi111', '111111'),
(00046, 'pouya', 'gonbadi', 'poi1111', '111111'),
(00047, 'pouya', 'kjgk', 'pouyas22', '111111'),
(00048, 'hfjh', 'fsafdfs', 'poijuju', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
