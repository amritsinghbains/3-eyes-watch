-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2012 at 11:45 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `levelno` int(2) NOT NULL,
  `imageno` varchar(20) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `hint` varchar(50) NOT NULL,
  PRIMARY KEY (`levelno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelno`, `imageno`, `answer`, `hint`) VALUES
(1, 'images/jhansi.jpg', 'the band', 'Identify The Band'),
(2, 'images/shimla.png', 'pink floyd', ''),
(3, 'images/bravo.jpg', 'jonny quest', ''),
(4, 'images/mumbai.jpg', 'dabbawallas', ''),
(5, 'images/michigan.png', 'madonna', ''),
(6, 'images/mcleod.jpg', 'nirma', 'Spare BigB'),
(7, 'images/yummy.jpg', 'pizza', ''),
(8, 'images/yelowpge.jpg', 'the beast', '"The Number of ________"'),
(9, 'images/play.png', 'sarfarosh', 'Movie Name'),
(10, 'images/penta.jpg', 'football', ''),
(11, 'images/acts.jpg', 'the prestige', ''),
(0, 'images/zero.jpg', 'uh23u2c2encwdcoih23c2ich2eocej', 'No spamming, No spamming'),
(12, 'images/angry.jpg', 'rage', 'I''m so Angry');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `name` varchar(50) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `uid`, `level`, `time`) VALUES
('Amz Singh', '100001149398468', 1, '2012-01-21 22:36:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
