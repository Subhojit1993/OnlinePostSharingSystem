-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 05:58 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `photoid` int(11) NOT NULL AUTO_INCREMENT,
  `albumpic` varchar(512) NOT NULL,
  `uname` varchar(512) NOT NULL,
  `pictext` longtext NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogging`
--

CREATE TABLE IF NOT EXISTS `blogging` (
  `blogger_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(512) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `delights` varchar(5000) NOT NULL,
  `forum` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `postedstat` varchar(1000) NOT NULL,
  `cnct` int(10) NOT NULL,
  PRIMARY KEY (`blogger_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blogging`
--

INSERT INTO `blogging` (`blogger_id`, `name`, `address`, `email`, `uname`, `pwd`, `delights`, `forum`, `post`, `photo`, `room`, `postedstat`, `cnct`) VALUES
(2, 'Subhojit Debnath', '', 'subho.deb93@gmail.com', 'Subhojit', 'super@theme', 'Articles , Poems', 'New Ideas , New People', 'My Lines , in Love', 'a9.jpg', '1', '     sdsdsdd                  ', 2147483647),
(3, 'SUMAN DHAR', '', 'sumandhar1994@gmail.com', 'Suman', 'suman theme', 'Poems , Novels', 'Memories', 'in Love', 'a9.jpg', '1', '', 2147483647),
(4, 'Atin Roy', '', 'atin@gmail.', 'Atin', 'atin theme', 'Lyrics', 'New People', 'It', '1474520825.jpg', '1', '', 2147483647),
(5, 'Martin Guptil', '', 'martin@gmail.com', 'Martin', 'martin theme', 'Articles , Lyrics', 'New Ideas', 'My Lines , in Love', 'a4.jpg', '1', '', 2147483647),
(6, 'Kingshuk Roy', '', 'kingshuk@gmail.com', 'Kingshuk', 'king theme', 'Articles , Poems', 'New Ideas', 'My Lines', '1474813334.jpg', '1', '', 2147483647),
(7, 'Sunny SinhaBabu', '', 'sunny@gmail.com', 'Sunny', 'sunny theme', 'Novels , Lyrics', 'New People', 'My Lines', '1474962030.jpg', '1', '', 2147483647),
(8, 'Subho Basak', '', 'subho.tukai@gmail.com', 'Subho', 'subho theme', 'Articles', 'New Ideas', 'My Lines', 'a6.jpg', '1', '', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `delights`
--

CREATE TABLE IF NOT EXISTS `delights` (
  `delight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delights`
--

INSERT INTO `delights` (`delight`) VALUES
('Articles'),
('Poems'),
('Novels'),
('Lyrics');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum`) VALUES
('New Ideas'),
('Memories'),
('New People');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `post` enum('waiting','accept','rejected','deleted') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `fromuser`, `touser`, `post`) VALUES
(1, 'Subhojit', '', 'waiting'),
(2, 'Atin', 'Suman', 'waiting'),
(3, 'Atin', 'Subhojit', 'waiting'),
(4, 'Subhojit', 'Suman', 'waiting'),
(5, 'Subhojit', 'Subhojit', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `status_id` int(10) NOT NULL,
  `like` int(10) NOT NULL,
  `un-like` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `livef`
--

CREATE TABLE IF NOT EXISTS `livef` (
  `feed_id` int(10) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `feeddate` varchar(20) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `livef`
--

INSERT INTO `livef` (`feed_id`, `fromuser`, `touser`, `text`, `feeddate`) VALUES
(7, 'Subhojit', 'Subhojit', 'This is my Poem', '2016-09-23 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`status`) VALUES
('My Lines'),
('in Love'),
('It''s Complicated!');

-- --------------------------------------------------------

--
-- Table structure for table `post_status`
--

CREATE TABLE IF NOT EXISTS `post_status` (
  `status_id` int(7) NOT NULL AUTO_INCREMENT,
  `feed_id` int(7) NOT NULL,
  `blogger_id` int(7) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
