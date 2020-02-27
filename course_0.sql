-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2020 at 03:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `system_information`
--

DROP TABLE IF EXISTS `system_information`;
CREATE TABLE IF NOT EXISTS `system_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_name` varchar(50) NOT NULL DEFAULT 'Course_0 PHP',
  `system_tag_name` varchar(100) NOT NULL DEFAULT 'We are the Course_0!',
  `tag_description` varchar(500) NOT NULL DEFAULT 'Hello, welcome abroad. We shall learn programming in PHP, show you how to design and achieve your dream project,  learn how to access MYSQL database with PHP and AJAX, submit form data using PHP and AJAX asynchronously (Without reloading the page), and many more. Have something to inquire about, use the button below!',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_information`
--

INSERT INTO `system_information` (`id`, `system_name`, `system_tag_name`, `tag_description`) VALUES
(3, 'Course_0 PHP', 'We are the Course_0!', 'Hello, welcome abroad. We shall learn programming in PHP, show you how to design and achieve your dream project,  learn how to access MYSQL database with PHP and AJAX, submit form data using PHP and AJAX asynchronously (Without reloading the page), and many more. Have something to inquire about, use the button below!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
