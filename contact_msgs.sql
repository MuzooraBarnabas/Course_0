-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 05:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_msgs`
--

CREATE TABLE IF NOT EXISTS `contact_msgs` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(200) NOT NULL,
  `guest_msg` varchar(500) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_msgs`
--

INSERT INTO `contact_msgs` (`id`, `guest_name`, `guest_email`, `guest_msg`, `posted_date`) VALUES
(1, 'Muzoora Barnabas', 'bmuzoora@gmail.com', 'This is awesome!!', '2020-02-21 05:17:13'),
(2, 'baguma frank', 'bagumafrank14@gmail.com', 'hello every one we are the coders of the next generation', '2020-02-21 20:41:05'),
(3, 'barumu benard', 'barumubenard@gmail.com', 'is every thing right', '2020-02-21 23:02:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
