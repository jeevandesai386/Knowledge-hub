-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 09:27 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`firstname`, `lastname`, `email`, `password`) VALUES
('alpha', 'master', 'alpha@gmail.com', '12345'),
('siddu', 'cr', 'crs.siddu1993@gmail.com', '12345'),
('jeevan', 'Desai', 'jeevan.v.desai386@gmail.com', '12345'),
('jeevan', 'Desai', 'jeevandesai1993@gmail.com', '123456'),
('jeevan', 'desai', 'jeevandesai1@gmail.com', 'sdkj'),
('jeevan', 'desai', 'jeevandesai@gmail.com', '12345'),
('jeevan', 'Desai', 'jeevandesai@rocketmail.com', '12345'),
('somashekar sir', 'e', 'manjulaprasad@pes.edu', '1234'),
('siddarth', 's', 'siddarth1@gmail.com', '1234'),
('siddu', 'cr', 'siddu12@gmail.com', 'sd'),
('siddu', 'cr', 'siddu1@gmail.com', 'cen'),
('siddu', 'cr', 'siddu@gmail.com', '12345'),
('soumya', 'r', 'soumyareddy030@gmail.com', '12345'),
('jeevan', 'sj', 'ssa@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `email` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`email`, `name`) VALUES
('', 'Breaking News'),
('', 'Technology'),
('', 'on'),
('', 'on,on,on'),
('', ''),
('', 'politics,Entertainment,Business'),
('', 'Entertainment,Bangalore,World,'),
('', 'Breaking News,Technology,Sports,'),
('', 'Breaking News,Technology,Sports,'),
('jeevandesai1@gmail.com', 'Breaking News,Technology,Sports,'),
('jeevandesai1@gmail.com', 'Breaking News,Technology,Sports,'),
('alpha@gmail.com', 'Entertainment,Business,Bangalore,World,'),
('crs.siddu1993@gmail.com', 'Technology,Sports,politics,Entertainment,'),
('siddarth1@gmail.com', 'Breaking News,Technology,Sports,politics,Entertain'),
('soumyareddy030@gmail.com', 'Breaking News,Technology,Sports,'),
('manjulaprasad@pes.edu', 'Breaking News,Technology,');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `userName` varchar(20) DEFAULT NULL,
  `userEmail` varchar(30) DEFAULT NULL,
  `userPhone` int(13) DEFAULT NULL,
  `userMsg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`userName`, `userEmail`, `userPhone`, `userMsg`) VALUES
('jeevan', 'jeevan@gmail.com', 809887898, 'dirfuhvbierskbjhberdf'),
('jeevan', 'jeevandesai1993@gmail.com', 890452193, 'idjncownnvsileadbvoliaesdvniaesdnck '),
('jeevan', 'jeevandesai1993@gmail.com', 890452193, 'idjncownnvsileadbvoliaesdvniaesdnck '),
('jkwegiuw', 'jeevan.v.desai386@gmail.com', 678900987, ' wkjgefiu3gwe8fd82wgd2bwskja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
