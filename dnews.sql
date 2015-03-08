-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2015 at 03:53 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `operation` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `userid`, `date`, `operation`) VALUES
(1, 'Crickets', 1, '2015-01-01 08:47:26', 'Update'),
(2, 'Footballs', 1, '2015-01-01 08:46:56', 'Update'),
(3, 'Badminton', 1, '2014-12-31 13:15:37', 'Insert'),
(4, 'Hocky', 1, '2014-12-31 13:15:54', 'Insert'),
(5, 'bangladeshi cricket', 1, '2014-12-31 13:37:37', 'Insert');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `countryid` int(12) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `operation` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `countryid` (`countryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `countryid`, `date`, `operation`) VALUES
(1, 'Dhaka', 2, '2014-12-31 12:41:51', 'Insert'),
(2, 'Riad', 1, '2014-12-31 12:48:52', 'Insert'),
(3, 'Macca', 1, '2014-12-31 12:49:01', 'Insert'),
(4, 'Modina', 1, '2014-12-31 12:49:09', 'Insert'),
(5, 'Jedda', 1, '2014-12-31 12:49:18', 'Insert'),
(6, 'Comilla', 2, '2014-12-31 12:49:26', 'Insert');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `operation` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `date`, `operation`) VALUES
(1, 'SoudiArab', '0000-00-00 00:00:00', ''),
(2, 'Bangladesh', '2014-12-31 12:20:47', ''),
(3, 'Austria', '2014-12-31 12:27:44', 'Insert');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(12) NOT NULL auto_increment,
  `title` varchar(410) NOT NULL,
  `description` varchar(60) NOT NULL,
  `firstpage` varchar(60) NOT NULL,
  `breakingnews` varchar(77) NOT NULL,
  `date` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  `video` varchar(88) NOT NULL,
  `image` varchar(88) NOT NULL,
  `categoryid` int(12) NOT NULL,
  `hitview` int(11) NOT NULL,
  `userid` int(12) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `categoryid` (`categoryid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `firstpage`, `breakingnews`, `date`, `video`, `image`, `categoryid`, `hitview`, `userid`) VALUES
(1, 'à¦¤à¦¾à¦°à§‡à¦• à¦°à¦¹à¦®à¦¾à¦¨, à¦¥à¦¾à¦®à¦²à§‡ à¦­à¦¾à¦² à¦²à¦¾à¦—à§‡', '1420046772686188.txt', 'Y', 'Y', '2014-12-31 23:26:12', '96801420046772hjf.jpg', '', 1, 0, 1),
(4, 'à¦¤à¦¾à¦°à§‡à¦• à¦°à¦¹à¦®à¦¾à¦¨, à¦¥à¦¾à¦®à¦²à§‡ à¦­à¦¾à¦² à¦²à¦¾à¦—à§‡', '1420115545994964.txt', 'Y', 'Y', '0000-00-00 00:00:00', '', '28101420115545kjjg.jpg', 3, 0, 1),
(5, 'â€˜à¦à¦­à¦¾à¦¬à§‡ à¦¸à¦°à§‡ à¦¦à¦¾à¦à¦¡à¦¼à¦¾à¦¨à§‹ à¦‰à¦šà¦¿à¦¤ à¦¹à¦¯à¦¼à¦¨à¦¿ à¦§à§‹à¦¨à¦¿à¦°â€™', '1420115909701355.txt', 'Y', 'Y', '0000-00-00 00:00:00', '', '48071420115909hjf.jpg', 1, 0, 1),
(6, 'à¦ªà§à¦°à¦¾à¦¥à¦®à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¸à¦®à¦¾à¦ªà¦¨à§€ à¦ªà¦°à§€à¦•à§à¦·à¦¾à§Ÿ à¦®à§‡à§Ÿà§‡à¦° à¦­à¦¾à¦²à§‹ à¦«à¦²à§‡ à¦¬à¦¿à¦¸à§à¦®à¦¿à¦¤ à¦à¦• à¦¶à¦¿à¦•à§à¦·à¦• à¦ªà¦¿à¦¤à¦¾ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦ªà¦¦à§à¦§à¦¤à¦¿ à¦¬à¦¾à¦¤à¦¿à¦²à§‡ à¦†à¦¨à§à¦¦à§‹à¦²à¦¨à§‡à¦° à¦¡à¦¾à¦• à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨', '142011652266010.txt', 'Y', 'N', '2015-01-01 12:48:37', '', '6931420116266skdjbs.jpg', 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cityid` int(12) NOT NULL,
  `joindate` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `usertype` varchar(1) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `picture` varchar(44) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `cityid` (`cityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cityid`, `joindate`, `usertype`, `gender`, `picture`, `status`) VALUES
(1, 'Evan', 'evan@gmail.com', '12', 1, '2014-12-31 12:53:09', 'a', 'm', '0', 'y'),
(2, 'Evan', 'farhadevan@gmail.com', '12', 6, '2015-01-02 01:30:39', 's', 'm', '40131420140639ffsdhg.jpg', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`id`);
