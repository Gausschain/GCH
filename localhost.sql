-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2013 at 10:11 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gausschains`
--
CREATE DATABASE `gausschains` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gausschains`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `num_solved` int(11) NOT NULL,
  `chain1` varchar(20) NOT NULL DEFAULT '00000000000000000000',
  `chain2` varchar(20) NOT NULL DEFAULT '00000000000000000000'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `password`, `num_solved`, `chain1`, `chain2`) VALUES
('gausschain@gmail.com', 'g', 0, '00000000000000000000', '00000000000000000000'),
('brianblakejones@gmail.com', 'b', 1, '10000000000000000000', '00000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `user` varchar(60) NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`user`, `comment`) VALUES
('kevinranks@gmail.com', 'fuck yeah'),
('brianblakejones@gmail.com', 'fuck that this is shit'),
('brianblakejones@gmail.com', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `num_solutions` int(11) NOT NULL,
  `solution` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`ID`, `Name`, `Description`, `num_solutions`, `solution`) VALUES
(1, 'Precocious Gauss', 'An unbearably precocious mathematician stuns Mr. Mathieson', 1, 5050),
(2, 'row(50).sum()', 'Sum all the values in a row of Pascal''s Triangle', 0, 314),
(3, 'Picking out subsets', 'Compute the value of an entry in Pascal''s Triangle', 0, 792),
(4, 'Solving an equation', 'Some partition thing', 0, 156849),
(5, 'Choices', 'Not the path least taken - all the paths', 0, 70),
(6, 'Symmetry', 'Twisting a sum around', 0, 5950),
(7, 'Even more choices', 'Transforming the triangle for your walk', 0, 70560),
(8, 'Same column bruh', 'Wayward travellers', 0, 590),
(9, 'No Induction', 'Find the summation of cubes without induction', 0, 1500625),
(10, 'A single value', 'From row to shining row', 0, 2800),
(11, 'Double or nothing', 'You see squares - be careful', 0, 934),
(12, 'Obfuscation', 'At least we medalled', 0, 274),
(13, 'Syntactic elegance', 'Not exactly', 0, 1041),
(14, 'Insert values', 'We''re almost halfway there', 0, 1024),
(15, 'Yeah right', 'A prelude to generation functions', 0, 900);

-- --------------------------------------------------------

--
-- Table structure for table `yes`
--

CREATE TABLE IF NOT EXISTS `yes` (
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yes`
--

