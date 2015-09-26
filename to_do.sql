-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 01:24 PM
-- Server version: 5.1.33-community
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `to_do`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` varchar(50) NOT NULL,
  `Task_Name` varchar(50) NOT NULL DEFAULT 'untitled',
  `Due_Date` date NOT NULL,
  `Priority` varchar(50) NOT NULL DEFAULT 'Low',
  `Completed` varchar(3) NOT NULL DEFAULT 'NO',
  `Details` varchar(100) DEFAULT NULL,
  `Category` varchar(50) NOT NULL DEFAULT 'All'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `Task_Name`, `Due_Date`, `Priority`, `Completed`, `Details`, `Category`) VALUES
('amita', 'Pay bill', '2015-01-03', 'High', 'NO', 'payment of phone and electricity bill', 'Work'),
('amita', 'Shopping', '2015-01-09', 'Medium', 'NO', 'Grocery items', 'Home'),
('amita', 'Google Custom Search', '2015-01-01', 'Medium', 'NO', 'Embed google custom search in website', 'Work'),
('amita', 'Call Shruti', '2015-05-09', 'High', 'NO', 'Call to wish on her Birthday', 'General'),
('amita', 'Study', '2014-12-29', 'High', 'NO', 'Study Algorithms, Google APIs', 'Work'),
('amita', 'Intern', '2015-01-02', 'High', 'NO', 'Start the internship', 'Work');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`) VALUES
('amita', 'amita'),
('anant', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
