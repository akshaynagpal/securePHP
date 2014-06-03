-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2014 at 09:18 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ChangePass`(IN cemail VARCHAR(50),IN pass VARCHAR(10))
BEGIN
UPDATE user_details
SET password=pass
WHERE email=cemail;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkPass`( IN loginEmail VARCHAR(50))
BEGIN
SELECT password FROM user_details WHERE email= loginEmail;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DisplayAll`()
BEGIN
SELECT * FROM user_details;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertValues`( IN name TEXT(30), IN email VARCHAR(50), IN phone VARCHAR(100), IN date VARCHAR

(15),IN photo VARCHAR(100), IN password VARCHAR(10))
BEGIN
INSERT INTO user_details ( name,email,phone,date,photo,password) VALUES (name,email,phone,date,photo,password);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `phone`, `date`, `photo`, `password`) VALUES
(0, 'abc', 'abc@gmail.com', '9999999999', '2014-05-21', 'uploads/Je', 'VSxy3DTC'),
(3, 'abcd', 'abcd@xy.com', '9999999999', '2014-05-07', 'uploads/De', 'MTSW1s9J'),
(4, 'userone', 'user1@gmail.com', '9999999999', '2014-05-06', 'uploads/Desert.jpg', 'iQvsy52f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
