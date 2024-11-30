-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2023 at 12:04 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `num` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `result`, `num`) VALUES
(1, 'fastback@gmail.com', 'fastbackad701', 'auto', 9);

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `user` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colordata`
--

CREATE TABLE `colordata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `gameid` varchar(255) NOT NULL,
  `amo` varchar(255) NOT NULL,
  `wamo` varchar(255) NOT NULL,
  `bet` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `colorresult`
--

CREATE TABLE `colorresult` (
  `id` int(11) NOT NULL,
  `gameid` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fdata`
--

CREATE TABLE `fdata` (
  `user` varchar(100) NOT NULL,
  `oid` varchar(100) NOT NULL,
  `amo` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lifdata`
--

CREATE TABLE `lifdata` (
  `user` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cha` varchar(100) NOT NULL,
  `cha2` varchar(255) NOT NULL,
  `cha3` varchar(255) NOT NULL,
  `cha4` varchar(255) NOT NULL,
  `cha5` varchar(255) NOT NULL,
  `cha6` varchar(255) NOT NULL,
  `cha7` varchar(255) NOT NULL,
  `cha8` varchar(255) NOT NULL,
  `cha9` varchar(255) NOT NULL,
  `cha10` varchar(255) NOT NULL,
  `cha11` varchar(255) NOT NULL,
  `cha12` varchar(255) NOT NULL,
  `cha13` varchar(255) NOT NULL,
  `cha14` varchar(255) NOT NULL,
  `cha15` varchar(255) NOT NULL,
  `cha16` varchar(255) NOT NULL,
  `cha17` varchar(255) NOT NULL,
  `cha18` varchar(255) NOT NULL,
  `cha19` varchar(255) NOT NULL,
  `cha20` varchar(255) NOT NULL,
  `ramo` varchar(255) NOT NULL,
  `rcomment` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tamo` varchar(100) NOT NULL,
  `pamo` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `com` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `iscode` varchar(100) NOT NULL,
  `isuname` varchar(100) NOT NULL,
  `isrefer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rlcode`
--

CREATE TABLE `rlcode` (
  `user` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `link` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tossdata`
--

CREATE TABLE `tossdata` (
  `user` varchar(255) NOT NULL,
  `amo` varchar(255) NOT NULL,
  `predicted` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(100) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `atoken` varchar(255) NOT NULL,
  `wtoken` varchar(255) NOT NULL,
  `bal` varchar(100) NOT NULL,
  `tfund` varchar(100) NOT NULL,
  `wfund` varchar(100) NOT NULL,
  `tlif` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `botalert` varchar(100) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `cha` varchar(255) NOT NULL,
  `cha2` varchar(255) NOT NULL,
  `cha3` varchar(255) NOT NULL,
  `cha4` varchar(255) NOT NULL,
  `cha5` varchar(255) NOT NULL,
  `cha6` varchar(255) NOT NULL,
  `cha7` varchar(255) NOT NULL,
  `cha8` varchar(255) NOT NULL,
  `cha9` varchar(255) NOT NULL,
  `cha10` varchar(255) NOT NULL,
  `cha11` varchar(255) NOT NULL,
  `cha12` varchar(255) NOT NULL,
  `cha13` varchar(255) NOT NULL,
  `cha14` varchar(255) NOT NULL,
  `cha15` varchar(255) NOT NULL,
  `cha16` varchar(255) NOT NULL,
  `cha17` varchar(255) NOT NULL,
  `cha18` varchar(255) NOT NULL,
  `cha19` varchar(255) NOT NULL,
  `cha20` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colordata`
--
ALTER TABLE `colordata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colorresult`
--
ALTER TABLE `colorresult`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colordata`
--
ALTER TABLE `colordata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colorresult`
--
ALTER TABLE `colorresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
