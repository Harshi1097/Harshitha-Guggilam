-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 04:17 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harshi`
--

-- --------------------------------------------------------

--
-- Table structure for table `custsignup`
--

CREATE TABLE `custsignup` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(50000) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `phnumber` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custsignup`
--

INSERT INTO `custsignup` (`firstname`, `lastname`, `email`, `address`, `pan`, `phnumber`, `password`) VALUES
('ganguru', 'aadhya', 'adhyasri@gmail.com', 'ramesh blocks,benz circle,vijayawada', 'aadhy7890a', 2147483647, 'adhya20'),
('guggilam', 'divya', 'divya123@gmail.com', 'rkpuram,hitech city,hyd', 'divya5678a', 2147483647, '5678aA@'),
('somavarapu', 'prasad', 'prasad56@gmail.com', 'keerthi blocks,madhapur,hyd', 'prasa7890h', 2147483647, 'prasad7');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `rating` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`rating`, `feedback`) VALUES
('4', 'Nice quality'),
('3', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `sellersignup`
--

CREATE TABLE `sellersignup` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(50000) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `phnumber` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellersignup`
--

INSERT INTO `sellersignup` (`firstname`, `lastname`, `email`, `address`, `pan`, `phnumber`, `password`) VALUES
('sannidhi', 'aadhya', 'adhyasannidhi@gmail.com', 'keerthi blocks,madhapur,hyd', 'adhya1234a', 2147483647, 'adhya456'),
('gangireddy', 'anusha', 'anusha@gmail.com', 'vivek towers,ramesh nagar,hyd', 'efghi5678a', 2147483647, 'anusha27'),
('guggilam', 'harshitha', 'guggilamharshitha@gmail.com', 'ramanthapur,aparna towers,hyd', 'haree5678a', 2147483647, '12345aA@'),
('devanaboina', 'divya', 'latha@gmail.com', 'gachibowli,aruna flats,hyd', 'latha4567a', 2147483647, 'latha345'),
('madhu', 'gollapudi', 'madhu@gmail.com', '42-4-96,gkstreet,hyd', 'hjikl6789a', 2147483647, 'hare4'),
('kosuru', 'niharika', 'niharika345@gmail.com', 'himayat nagar,ramapuram,hyd', 'nihaa3456a', 2147483647, 'niha49'),
('gundu', 'pushpa', 'pushpa@gmail.com', 'himachalnagar,rama blocks,hyd', 'efghi7890t', 2147483647, 'pushpa1'),
('sannidhi', 'sujatha', 'sujatha345@gmail.com', 'aruna towers,madhapur,hyderabad', 'harsh5678i', 2147483647, 'harshi2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custsignup`
--
ALTER TABLE `custsignup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sellersignup`
--
ALTER TABLE `sellersignup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
