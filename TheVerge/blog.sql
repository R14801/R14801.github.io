-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 07:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `grid` varchar(2) NOT NULL,
  `title` varchar(80) NOT NULL,
  `location` varchar(60) NOT NULL,
  `link` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`grid`, `title`, `location`, `link`) VALUES
('1', 'Google Pixel 4 and 4 XL Review: the best Android experience', 'resources/vpavic_191019_3725_0300.jpg', 'p4.html'),
('2', 'Apple Watch Series 5 Review: The best smartwatch', 'resources/vpavic_190916_3669_0305.jpg', 'awatch.html'),
('3', 'Google Nest Mini Review: A great sounding upgrade', 'resources/dseifert_171008_2042_4560.0.jpg', 'nest.html'),
('4', 'Apple iPhone 11 Pro and Pro Max Review: The battery life is real', 'resources/akrales_190914_3666_0048.jpg', 'iphone.html'),
('5', 'OnePlus 7 Pro Review: Just look at this screen', 'resources/vpavic_190503_3415_0043.jpg', 'oneplus.html'),
('6', 'Samsung Galaxy Watch Active 2 Review: Samsung made what Google couldn\'t', 'resources/vpavic_191007_3716_4.jpg', 'swatch.html'),
('7', 'Powerbeats Pro review: the best Beats', 'resources/apple_powerbeats_pro_vladsavov19051010.0.jpg', 'beats.html'),
('8', 'Fujifilm X-T3 review: the do-everything camera', 'resources/akrales_000101_2926_0024_2.0.jpg', 'xt3.html'),
('9', 'Apple iPad 2019 review: no competition', 'resources/vpavic_190829_3709_1165.0.jpg', 'ipad'),
('f', 'The best graphs and data for tracking the coronavirus pandemic', 'Where to find the curve and how to see if it\'s flattening', 'curve.html'),
('m', 'Everything you need to know about the coronavirus', 'resources/acastro_200311_3936_coronavirus_0002.0.0.jpg', 'covid-19.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hash`) VALUES
('', '', '', 'd41d8cd98f00b444e9844998ec44427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`grid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
