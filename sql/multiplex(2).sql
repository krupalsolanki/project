-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2013 at 02:21 PM
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
  `mo_duration` decimal(3,2) NOT NULL,
  `mo_details` varchar(500) NOT NULL DEFAULT '',
  `mo_link` varchar(150) NOT NULL,
  `mo_image_location` varchar(200) NOT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mo_id`, `mo_name`, `mo_release_date`, `mo_duration`, `mo_details`, `mo_link`, `mo_image_location`) VALUES
(1, 'Race-2', '2013-01-12', 2.20, '', 'http://www.imdb.com/title/tt1375789/', ''),
(8, 'Special chabbis', '2013-02-08', 2.20, 'comedy', 'http://www.imdb.com/title/tt2377938/', '/home/krupal/public_html/project/images/special.jpg'),
(9, 'ABCD', '2013-03-15', 2.00, 'Director : Remo\r\nChoreographer : Prabhu Deva\r\nStarcast : Prabhudeva, Dharmesh, Prince', 'http://www.imdb.com/title/tt2321163/', '/home/krupal/public_html/project/images/index.jpeg'),
(10, 'Zero Dark 30', '2013-03-15', 2.00, 'A chronicle of the decade-long hunt for al-Qaeda terrorist leader Osama bin Laden after the September 2001 attacks, and his death at the hands of the Navy S.E.A.L. Team 6 in May 2011. ', 'http://www.imdb.com/title/tt1790885/', '/home/krupal/public_html/project/images/MV5BMTQ4OTUyNzcwN15BMl5BanBnXkFtZTcwMTQ1NDE3OA@@._V1_SX214_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `multiplex`
--

CREATE TABLE IF NOT EXISTS `multiplex` (
  `mu_id` int(3) NOT NULL AUTO_INCREMENT,
  `mu_name` varchar(50) NOT NULL,
  `mu_city` varchar(20) NOT NULL,
  `mu_area` varchar(30) NOT NULL,
  `mu_address` varchar(200) NOT NULL,
  `mu_screens` int(1) NOT NULL,
  PRIMARY KEY (`mu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `multiplex`
--

INSERT INTO `multiplex` (`mu_id`, `mu_name`, `mu_city`, `mu_area`, `mu_address`, `mu_screens`) VALUES
(12, 'Rahul 70mm', 'Pune', '', 'Shivaji Nagar', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`sc_id`, `sc_no`, `mu_id`, `sc_capacity`, `sc_gold`, `sc_platinum`) VALUES
(20, 1, 12, 600, 333, 267),
(21, 2, 12, 999, 2, 997),
(22, 3, 12, 1000, 0, 1000),
(23, 1, 14, 100, 20, 80),
(24, 2, 14, 120, 40, 80),
(25, 1, 15, 100, 20, 80),
(26, 2, 15, 100, 20, 80),
(27, 3, 15, 100, 15, 85);

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
  `sh_go_ticket_avail` int(3) NOT NULL,
  `sh_pl_ticket_avail` int(3) NOT NULL,
  PRIMARY KEY (`sh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`sh_id`, `sc_id`, `mu_id`, `sh_date`, `sh_time`, `mo_id`, `sh_go_ticket_avail`, `sh_pl_ticket_avail`) VALUES
(7, 20, 12, '2013-03-14', '08:00:00', 1, 0, 0),
(9, 21, 12, '2013-03-15', '08:15:00', 8, 20, 0),
(10, 24, 14, '2013-03-17', '06:08:00', 9, 0, 0),
(11, 24, 14, '2013-03-17', '09:00:00', 8, 0, 0),
(12, 23, 14, '2013-03-15', '10:00:00', 9, 0, 0),
(13, 21, 12, '2013-03-15', '15:00:00', 10, 0, 0),
(14, 25, 15, '2013-03-15', '08:00:00', 10, 0, 0),
(15, 20, 12, '2013-03-17', '11:30:00', 1, 0, 0),
(16, 23, 14, '2013-03-20', '10:00:00', 10, 0, 0),
(17, 23, 14, '2013-03-20', '14:00:00', 10, 0, 0),
(18, 23, 14, '2013-03-21', '15:00:00', 9, 0, 0),
(19, 23, 14, '2013-03-21', '18:00:00', 8, 4, 4),
(20, 20, 12, '2013-03-21', '15:00:00', 11, 0, 0),
(21, 20, 12, '2013-03-21', '18:00:00', 11, 0, 0),
(22, 23, 14, '2013-03-21', '21:00:00', 11, 20, 80),
(23, 20, 12, '2013-03-22', '10:00:00', 9, 333, 267);

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
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `username`, `password`, `emailId`, `first_name`, `last_name`, `gender`, `city`, `phone_no`, `date_of_registeration`, `user_type`) VALUES
(21, 'Krupal', 'lkj', 'krupalsolanki@live.com', 'krupal', 'solanki', 'm', 'mumbai', '9833216207', '2013-01-30', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
