-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2018 at 03:48 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(9, 'yasir', '5393b0a77fdb1a53639afd3fa3fb67a9a21d7f56');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE IF NOT EXISTS `fixtures` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` varchar(50) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `time`, `team1`, `team2`, `venue`) VALUES
(1, '25 January, 2017', 'Kano Pillars', 'Enyimba', 'Sani Abacha Stadium'),
(2, '5 Februrary 2017, 10:00pm', 'Real Madrid', 'Barcelona', 'Santiago'),
(3, '3 February 2017, 4:45pm', 'Manchester United', 'Chrystal Palace F.C', 'Old Trafford '),
(4, '5 Februrary 2017, 10:00pm', 'A.C Milan', 'A.S Roma', 'San Siro'),
(5, '1 February 2017, 4:45pm', 'Chelsea', 'Arsenal', 'Stanford Bridge '),
(6, '4 February 2017, 4:45pm', 'Manchester City', 'West Ham', 'Etihad Stadium'),
(7, '9 Februrary 2017, 10:00pm', 'Arsenal', 'Liverpool', 'Emirates Stadium'),
(8, '23-8-2018', 'Arsenal', 'Barcelona', ' MINJIBIR PARP STADIUM'),
(9, '23-8-2018', 'Barcelona', 'Dala United', 'MINJIBIR PARK STADIUM'),
(10, '', '', '', ''),
(11, '23-8-2018', 'Barcelona', 'Dala United', 'MINJIBIR PARK STADIUM'),
(12, '15/5/2018 4:0pm', 'yarimawa', 'Liverpool', 'sabon Gari stadium'),
(13, '14/5/2018 4:0pm', 'Dala United', 'STILL HOPE MINJIBI', 'Sani Abacha Stadium'),
(14, '13/5/2018 4:oopm', 'Arsenal', 'Dala United', 'Sabo Gari Stadium'),
(15, '12/5/2018 4:oopm', 'Manchester United', 'yarimawa', 'Sani Abacha Stadium'),
(16, '11/5/2018 4:oopm', 'Real Madrid', 'Chelsea', 'Minjibir Park Stadium');

-- --------------------------------------------------------

--
-- Table structure for table `match_reports`
--

CREATE TABLE IF NOT EXISTS `match_reports` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `team1` varchar(40) NOT NULL,
  `team2` varchar(40) NOT NULL,
  `score1` varchar(2) NOT NULL,
  `score2` varchar(2) NOT NULL,
  `possession1` varchar(3) NOT NULL,
  `possession2` varchar(3) NOT NULL,
  `fouls1` varchar(2) NOT NULL,
  `fouls2` varchar(2) NOT NULL,
  `corners1` varchar(2) NOT NULL,
  `corners2` varchar(2) NOT NULL,
  `freekick1` varchar(2) NOT NULL,
  `freekick2` varchar(2) NOT NULL,
  `yellow1` varchar(2) NOT NULL,
  `yellow2` varchar(2) NOT NULL,
  `red1` varchar(2) NOT NULL,
  `red2` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `match_reports`
--

INSERT INTO `match_reports` (`id`, `team1`, `team2`, `score1`, `score2`, `possession1`, `possession2`, `fouls1`, `fouls2`, `corners1`, `corners2`, `freekick1`, `freekick2`, `yellow1`, `yellow2`, `red1`, `red2`) VALUES
(1, 'Arsenal', 'Manchester United', '', '2', '48', '52', '4', '3', '3', '5', '3', '4', '2', '2', '0', '0'),
(2, 'Real Madrid', 'Manchester United', '3', '2', '49', '51', '5', '3', '2', '4', '3', '5', '3', '1', '0', '0'),
(3, 'Arsenal', 'Manchester United', '1', '0', '55', '45', '3', '3', '2', '3', '3', '3', '2', '1', '0', '0'),
(4, 'Arsenal', 'Manchester United', '1', '0', '55', '45', '3', '3', '2', '3', '3', '3', '2', '1', '0', '0'),
(5, 'Arsenal', 'Manchester City', '2', '3', '48', '52', '3', '4', '3', '3', '4', '3', '2', '1', '0', '0'),
(6, 'Arsenal', 'Barcelona', '1', '3', '48', '52', '3', '3', '3', '3', '3', '3', '3', '1', '0', '0'),
(7, 'Barcelona', 'Real Madrid', '2', '2', '55', '45', '4', '6', '4', '3', '6', '4', '1', '3', '0', '0'),
(8, 'Manchester United', 'Arsenal', '3', '4', '51', '49', '4', '4', '3', '5', '4', '4', '2', '2', '0', '0'),
(9, 'Manchester United', 'Manchester City', '3', '3', '41', '59', '5', '4', '4', '5', '4', '5', '3', '2', '1', '0'),
(10, 'Valencia', 'Real Madrid', '0', '2', '43', '57', '7', '5', '3', '3', '5', '7', '3', '3', '1', '0'),
(11, 'Barcelona', 'Getafe F.C', '5', '1', '55', '45', '3', '5', '3', '3', '5', '3', '0', '1', '0', '0'),
(12, 'Arsenal', 'Barcelona', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Athletico Madrid', 'Dala United', '5', '7', '70%', '80%', '6', '3', '4', '3', '0', '4', '0', '0', '1', '0'),
(14, 'Dala United', 'yarimawa', '5', '4', '50%', '90%', '2', '1', '4', '6', '0', '2', '1', '3', '0', '0'),
(15, 'yarimawa', 'Dala United', '1', '4', '56', '70', '1', '0', '2', '1', '1', '2', '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `session` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `team`, `position`, `age`, `lga`, `state`, `session`) VALUES
(1, 'Mesut Ozil ', 'Arsenal', 'Midfielder', '', '', '', ''),
(2, 'Alexis Sanchez', 'Arsenal', 'Left Forward', '', '', '', ''),
(3, 'Theo Walcott ', 'Arsenal', 'Midfielder', '', '', '', ''),
(4, 'Kieran Gibbs ', 'Arsenal', 'Forward', '', '', '', ''),
(5, 'Olivier Giroud ', 'Arsenal', 'Defender', '', '', '', ''),
(6, 'Lionel Messi ', 'Barcelona', 'Forward', '', '', '', ''),
(7, 'Sergio Bascuet ', 'Barcelona', 'Midfielder', '', '', '', ''),
(8, 'Andre Iniesta ', 'Barcelona', 'Midfielder', '', '', '', ''),
(9, 'Pedro Rodriquez ', 'Barcelona', 'Left Forward', '', '', '', ''),
(10, 'Daniel Albes', 'Barcelona', 'Right Back', '', '', '', ''),
(11, 'Paul Poga', 'Manchester United', 'Forward', '', '', '', ''),
(12, 'Zalatan Ibrahimovic', 'Manchester United', 'Forward', '', '', '', ''),
(13, 'Wayne Roney', 'Manchester United', 'Forward', '', '', '', ''),
(14, 'Rio Fardinerd', 'Manchester United', 'Defender', '', '', '', ''),
(15, 'Daley Blind', 'Manchester United', 'Forward', '', '', '', ''),
(16, 'Sergio Aguero ', 'Manchester City', 'Forward', '', '', '', ''),
(17, 'Yaya Taure', 'Manchester City', 'Midfielder', '', '', '', ''),
(18, 'Christiano Ronaldo', 'Real Madrid', 'Forward', '', '', '', ''),
(19, 'Pepe', 'Real Madrid', 'Defender', '', '', '', ''),
(20, 'Marcelo', 'Real Madrid', 'Left Back', '', '', '', ''),
(21, 'Karim Benzema ', 'Real Madrid', 'Forward', '', '', '', ''),
(22, 'James Rodriguez ', 'Real Madrid', 'Forward', '', '', '', ''),
(23, 'Diego Costa ', 'Chelsea', 'Forward', '', '', '', ''),
(24, 'John Obi Mile', 'Chelsea', 'Defensive Midfielder', '', '', '', ''),
(25, 'Victor Moses', 'Chelsea', 'Attacking Midfielder', '', '', '', ''),
(26, 'Steven Gerard', 'Liverpool', 'Midfielder', '', '', '', ''),
(27, 'ZAHAN', 'STILL HOPE MINJIBI', 'Attacking Midfielder', '24', 'MINJIBIR', 'KANO', '2017/2018'),
(28, 'ZALAYETA', 'STILL HOPE MINJIBI', 'Defender', '19', 'MJB', 'KANO', '2017/2018'),
(29, 'DAN AJI', 'STILL HOPE MINJIBI', 'Right Back', '19', 'SARBI', 'KANO', '2017/2018'),
(30, 'DIYAGO ', 'STILL HOPE MINJIBI', 'Left Forward', '17', 'TSANYAWA', 'KANO', '2017/2018'),
(31, 'AHMAD S', 'STILL HOPE MINJIBI', 'Goalkeeper', '20', 'MINJIBIR', 'KANO', '2017/2018'),
(32, 'Abba ahmad', 'STILL HOPE', 'Attacking Midfielder', '22', 'Minjibir', 'Kano', '2017/2018'),
(33, 'mustapha Bari', 'STILL HOPE', 'Goalkeeper', '23', 'Minjibir', 'Kano', '2017/2018'),
(34, 'zaharadden Gambo', 'STILL HOPE', 'Defender', '25', 'Minjibir', 'Kano', '2017/2018'),
(35, 'Auwal Husain', 'STILL HOPE', 'Left Back', '23', 'Minjibir', 'Kano', '2017/2018'),
(36, 'S. Ayoub', 'STILL HOPE', 'Defensive Midfielder', '24', 'Minjibir', 'Kano', '2017/2018'),
(37, 'bashir Sulaiman', 'STILL HOPE', 'Right Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(38, 'Isyaku Dawaki', 'STILL HOPE', 'Center Forward', '26', 'Minjibir', 'Kano', '2017/2018'),
(39, 'Ibrahim Abdul', 'STILL HOPE', 'Center Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(40, 'Zahaan A. Gambo', 'STILL HOPE', 'Forward', '25', 'Minjibir', 'Kano', '2017/2018'),
(41, 'Abba ahmad', 'STILL HOPE', 'Attacking Midfielder', '22', 'Minjibir', 'Kano', '2017/2018'),
(42, 'mustapha Bari', 'STILL HOPE', 'Goalkeeper', '23', 'Minjibir', 'Kano', '2017/2018'),
(43, 'zaharadden Gambo', 'STILL HOPE', 'Defender', '25', 'Minjibir', 'Kano', '2017/2018'),
(44, 'Auwal Husain', 'STILL HOPE', 'Left Back', '23', 'Minjibir', 'Kano', '2017/2018'),
(45, 'S. Ayoub', 'STILL HOPE', 'Defensive Midfielder', '24', 'Minjibir', 'Kano', '2017/2018'),
(46, 'bashir Sulaiman', 'STILL HOPE', 'Right Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(47, 'Isyaku Dawaki', 'STILL HOPE', 'Center Forward', '26', 'Minjibir', 'Kano', '2017/2018'),
(48, 'Ibrahim Abdul', 'STILL HOPE', 'Center Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(49, 'Zahaan A. Gambo', 'STILL HOPE', 'Forward', '25', 'Minjibir', 'Kano', '2017/2018'),
(50, 'Abba ahmad', 'yarimawa', 'Attacking Midfielder', '22', 'Minjibir', 'Kano', '2017/2018'),
(51, 'mustapha Bari', 'yarimawa', 'Goalkeeper', '23', 'Minjibir', 'Kano', '2017/2018'),
(52, 'zaharadden Gambo', 'yarimawa', 'Defender', '25', 'Minjibir', 'Kano', '2017/2018'),
(53, 'Auwal Husain', 'yarimawa', 'Left Back', '23', 'Minjibir', 'Kano', '2017/2018'),
(54, 'S. Ayoub', 'yarimawa', 'Defensive Midfielder', '24', 'Minjibir', 'Kano', '2017/2018'),
(55, 'bashir Sulaiman', 'yarimawa', 'Right Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(56, 'Isyaku Dawaki', 'yarimawa', 'Center Forward', '26', 'Minjibir', 'Kano', '2017/2018'),
(57, 'Ibrahim Abdul', 'yarimawa', 'Center Forward', '20', 'Minjibir', 'Kano', '2017/2018'),
(58, 'Zahaan A. Gambo', 'yarimawa', 'Forward', '25', 'Minjibir', 'Kano', '2017/2018'),
(59, 'Aliyu muhd', 'yarimawa', 'Center Forward', '30', 'Minjibir', 'Kano', '2017/2018'),
(60, 'faiz sulaiman', 'yarimawa', 'Defensive Midfielder', '23', 'Minjibir', 'Kano', '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `points` varchar(3) NOT NULL DEFAULT '0',
  `w` varchar(3) NOT NULL DEFAULT '0',
  `d` varchar(3) NOT NULL DEFAULT '0',
  `l` varchar(3) NOT NULL DEFAULT '0',
  `gs` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `coach`, `points`, `w`, `d`, `l`, `gs`) VALUES
(1, 'Arsenal', 'Arsene Wenger ', '4', '1', '1', '1', '5'),
(2, 'Barcelona', 'Luis Enrique ', '8', '2', '1', '0', '10'),
(3, 'Manchester United', 'Jose Mourinho', '1', '0', '1', '1', '6'),
(4, 'Manchester City', 'Pep Guardiola', '1', '0', '1', '0', '3'),
(5, 'Real Madrid', 'Zenidine Zidane', '4', '2', '0', '0', '4'),
(6, 'Chelsea', 'Antoni Conte', '0', '0', '0', '0', '0'),
(7, 'Valencia', 'David Moyes', '0', '0', '0', '1', '0'),
(8, 'Liverpool', 'Luis Van Gaal', '0', '0', '0', '0', '0'),
(9, 'Athletico Madrid', 'Raul', '0', '0', '0', '1', '5'),
(10, 'Getafe F.C', 'Valeri Von', '0', '0', '0', '1', '1'),
(11, 'West Ham ', 'Kohf', '0', '0', '0', '0', '0'),
(12, 'Dala United', 'Abba Sani', '9', '3', '0', '0', '16'),
(13, 'Dala United', 'Abba Sani', '9', '3', '0', '0', '16'),
(14, 'Dala United', 'Abba Sani', '9', '3', '0', '0', '16'),
(15, 'STILL HOPE MINJIBI', 'LABARAN', '0', '0', '0', '0', '0'),
(16, 'STILL HOPE', 'SHAMSU MUHD', '0', '0', '0', '0', '0'),
(17, 'STILL HOPE', 'SHAMSU MUHD', '0', '0', '0', '0', '0'),
(18, 'yarimawa', 'Dr.Rabil abdulkadir', '0', '0', '0', '2', '5');

-- --------------------------------------------------------

--
-- Table structure for table `upcomings`
--

CREATE TABLE IF NOT EXISTS `upcomings` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `text` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcomings`
--

INSERT INTO `upcomings` (`id`, `text`) VALUES
(1, 'YARIMAWA MINJIBIR UNITED');
