-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2013 at 01:18 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multiplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `uId` int(5) NOT NULL,
  `sh_id` int(5) NOT NULL,
  `sc_id` int(3) NOT NULL,
  `mu_id` int(2) NOT NULL,
  `seat_no` varchar(4) NOT NULL,
  `no_of_tickets` int(3) NOT NULL,
  `time` datetime NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `mo_id` int(5) NOT NULL AUTO_INCREMENT,
  `mo_name` varchar(50) NOT NULL,
  `mo_release_date` date NOT NULL,
  `mo_duration` decimal(10,0) NOT NULL,
  `mo_details` varchar(500) NOT NULL DEFAULT '',
  `mo_link` varchar(150) NOT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `multiplex`
--

CREATE TABLE IF NOT EXISTS `multiplex` (
  `mu_id` int(3) NOT NULL AUTO_INCREMENT,
  `mu_name` varchar(50) NOT NULL,
  `mu_city` varchar(20) NOT NULL,
  `mu_address` varchar(200) NOT NULL,
  `mu_screens` int(1) NOT NULL,
  PRIMARY KEY (`mu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE IF NOT EXISTS `screens` (
  `sc_id` int(3) NOT NULL AUTO_INCREMENT,
  `sc_no` int(1) NOT NULL,
  `mu_id` int(3) NOT NULL,
  `sc_capacity` int(3) NOT NULL,
  `sc_gold` int(3) NOT NULL,
  `sc_platinum` int(3) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sh_id` int(5) NOT NULL AUTO_INCREMENT,
  `sc_id` int(3) NOT NULL,
  `mu_id` int(3) NOT NULL,
  `sh_date` date NOT NULL,
  `sh_time` time NOT NULL,
  `mo_id` int(5) NOT NULL,
  `sh_ticket_avail` int(3) NOT NULL,
  `sh_ticket_booked` int(3) NOT NULL,
  PRIMARY KEY (`sh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uId` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `city` varchar(15) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `date_of_registeration` date NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `username`, `password`, `emailId`, `first_name`, `last_name`, `gender`, `city`, `phone_no`, `date_of_registeration`) VALUES
(20, 'DharaNemo', 'Krupalaaa', 'nemo@krupal.com', 'Dhara', 'Ladhad', 'f', 'bangalore', '9975121833', '2013-01-27'),
(21, 'Krupal', 'lkj', 'krupalsolanki@live.com', 'krupal', 'solanki', 'm', 'mumbai', '9833216207', '2013-01-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
