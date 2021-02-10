-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2021 at 07:36 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`pid`, `fname`, `lname`, `profileimage`, `gender`, `dob`, `address`, `email`, `phone`) VALUES
(1, 'Rofern', 'Fernandes', 'profile1.jpg', 1, '1997-01-13', 'Socovaddo Ambelim Assolna', 'rofern13@gmail.com', 7350576509),
(2, 'Mewillia', 'Fernandes', 'profile3.jpg', 0, '1998-05-01', 'Sarzora', 'mewillia@gmail.com', 8787878787),
(3, 'John', 'Pacheco', 'profile4.png', 1, '1993-10-26', 'Varca', 'john@gmail.com', 6787678765),
(4, 'Dezy', 'Diaz', 'profile5.png', 0, '1996-02-06', 'Cavellossim', 'dezdiaz@gmail.com', 9878987898),
(5, 'Conor', 'Mcgregor', 'profile6.jpg', 1, '1989-02-15', 'Vasco', 'conor@yahoo.com', 9876567890),
(6, 'Micheal', 'Chiesa', 'profile7.jpg', 1, '1991-02-19', 'Bardez', 'chiesa@reddif.com', 8898989878),
(7, 'Colby', 'Covington', 'profile8.png', 1, '1990-02-20', 'Sanguem', 'colby@yahoo.com', 8787678987),
(8, 'Rose', 'Namajunas', 'profile9.jpg', 0, '1993-02-16', 'Panaji', 'rose@gmail.com', 8988887876),
(9, 'Michelle', 'Watterson', 'profile10.jpg', 0, '1999-01-06', 'Canacona', 'michelle@gmail.com', 6678767656),
(10, 'Tony', 'Ferguson', 'profile11.png', 1, '1994-02-08', 'Margao', 'tony@gmail.com', 6767656765),
(11, 'Amanda', 'Nunez', 'profile12.png', 1, '1989-02-03', 'Verna', 'amanda@yahoo.com', 8888767889),
(12, 'Chael', 'Sonnen', 'profile13.png', 1, '1994-01-26', 'Pedda Ambelim', 'chael@sonnen.com', 8888767878);

-- --------------------------------------------------------

--
-- Table structure for table `systemlogin`
--

DROP TABLE IF EXISTS `systemlogin`;
CREATE TABLE IF NOT EXISTS `systemlogin` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemlogin`
--

INSERT INTO `systemlogin` (`sid`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'system', 'system');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
