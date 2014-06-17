-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 11:56 AM
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertFBValues`( IN fbid VARCHAR(20), IN name TEXT(30), IN 

email VARCHAR(50), IN phone VARCHAR(100), IN date VARCHAR(15),IN photo 

VARCHAR(100), IN password VARCHAR(10))
BEGIN
INSERT INTO user_details ( FB_id,name,email,phone,date,photo,password) VALUES 

(fbid,name,email,phone,date,photo,password);
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
  `FB_id` varchar(20) DEFAULT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `FB_id`, `name`, `email`, `phone`, `date`, `photo`, `password`) VALUES
(0, NULL, 'abc', 'abc@gmail.com', '9999999999', '2014-05-21', 'uploads/Je', 'VSxy3DTC'),
(3, NULL, 'abcd', 'abcd@xy.com', '9999999999', '2014-05-07', 'uploads/De', 'MTSW1s9J'),
(4, NULL, 'userone', 'user1@gmail.com', '9999999999', '2014-05-06', 'uploads/Desert.jpg', 'iQvsy52f'),
(5, NULL, 'akshayngp', 'aks@gmail.com', '9999999999', '0444-04-04', 'uploads/Jellyfish - Copy (2).jpg', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
