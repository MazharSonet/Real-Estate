-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 07:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `re_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `architect`
--

CREATE TABLE IF NOT EXISTS `architect` (
  `eng_id` varchar(10) NOT NULL,
  `eng_type` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `plot_id` varchar(255) NOT NULL,
  `design` varchar(20) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  UNIQUE KEY `eng_id` (`eng_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architect`
--

INSERT INTO `architect` (`eng_id`, `eng_type`, `name`, `address`, `contact`, `email`, `joined_date`, `plot_id`, `design`, `password`) VALUES
('A01', 'architect', 'Bijoy', 'narayongon', '029213', 'bijoy@gmail.com', '2014-08-06', 'mirpur_01', NULL, NULL),
('A02', 'architect', 'Masum', 'Mirpur', '80312', 'masum@gmail.com', '2014-08-06', 'dhanmondi_02', NULL, NULL),
('A03', 'architect', 'Kamrul', 'mogbazar', '97456', 'kamrul@yahoo.com', '2014-03-04', 'basabo_03', NULL, NULL),
('A04', 'architect', 'Shamim', 'ajimpur', '12345', 'shamim@hotmail.com', '2014-08-19', 'agargaon_05', NULL, NULL),
('A05', 'architect', 'Samin', 'Manikgonj', '45678', 'samin@gmail.com', '2014-04-07', 'bonosree_04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `eng_id` varchar(10) NOT NULL,
  `eng_type` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `joined_date` varchar(10) NOT NULL,
  `plot_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `pro_emp_id` varchar(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE IF NOT EXISTS `contains` (
  `plot_location` varchar(20) NOT NULL,
  `plot_id` varchar(20) NOT NULL,
  `eng_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `section`) VALUES
(1, 'C1'),
(2, 'B1'),
(3, 'B1'),
(4, 'B1'),
(5, 'B1'),
(6, 'B1');

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE IF NOT EXISTS `engineer` (
  `type` varchar(10) NOT NULL,
  `manager_id` varchar(10) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `habijabi`
--

CREATE TABLE IF NOT EXISTS `habijabi` (
  `name` int(7) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `emp_id` varchar(10) NOT NULL,
  `emp_section` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`emp_id`,`emp_section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`emp_id`, `emp_section`, `name`, `address`, `contact`, `email`, `designation`) VALUES
('M01', 'MGR', 'Mazhar', 'Tangail', '01675', 'mics@yahoo.com', 'project manager'),
('M06', 'MGR', 'Faysal', 'Shyamoli', '78965', 'faysal@ymail.com', 'senior manager');

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE IF NOT EXISTS `plot` (
  `plot_id` varchar(20) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `space` varchar(255) DEFAULT NULL,
  `manager_id` varchar(10) DEFAULT NULL,
  `description` text,
  `archi_id` varchar(10) NOT NULL,
  `map_link` text,
  PRIMARY KEY (`plot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`plot_id`, `latitude`, `longitude`, `price`, `space`, `manager_id`, `description`, `archi_id`, `map_link`) VALUES
('agargaon_05', '23.81434412 	', '90.36816537', '400000', '1600', NULL, 'not started', 'A06', 'portfolio5'),
('basabo_03', '23.76465756', '90.456056', '6000000', '3000', NULL, 'about to release', 'A03', 'portfolio3'),
('bonosree_04', '23.778', '90.556', '100000', '1200', NULL, 'almost done', 'A05', 'portfolio4'),
('dhanmondi_02', '23.74501784', '90.37464559', '5000000', '2500', NULL, 'started', 'A02', 'portfolio2'),
('mirpur_01', '23.82434412', '90.36816537', '1000000', '1800', 'M01', 'working', 'A01', 'portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `emp_id` varchar(10) NOT NULL,
  `emp_section` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`emp_id`,`emp_section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`emp_id`, `emp_section`, `name`, `address`, `contact`, `email`, `designation`) VALUES
('PR01', 'OFCR', 'Rahat', 'Mirpur', '01924', 'rahat@yahoo.com', 'senior officer');

-- --------------------------------------------------------

--
-- Table structure for table `sends_data`
--

CREATE TABLE IF NOT EXISTS `sends_data` (
  `pro_emp_id` varchar(20) DEFAULT NULL,
  `manager_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `emp_id` varchar(20) NOT NULL,
  `emp_section` varchar(20) NOT NULL,
  `plot_location` varchar(20) NOT NULL,
  `plot_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `customer_id` varchar(10) NOT NULL,
  `manager_id` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `booking_serial` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
