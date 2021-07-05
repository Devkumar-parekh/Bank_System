-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 05:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank system`
--

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `adhar` bigint(16) NOT NULL,
  `pan` text NOT NULL,
  `address` point NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `mnum` int(10) NOT NULL,
  `email` text NOT NULL,
  `balance` int(10) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passbook`
--

CREATE TABLE `passbook` (
  `adhar` bigint(16) NOT NULL,
  `amount` int(10) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `final` int(10) NOT NULL,
  `dates` text NOT NULL,
  `times` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passbook`
--

INSERT INTO `passbook` (`adhar`, `amount`, `mode`, `final`, `dates`, `times`) VALUES
(74009, 8000, 'deposite', 10500, '17/12/2020', '07:43:38pm'),
(74009, 2500, 'withdraw', 8000, '17/12/2020', '07:46:29pm'),
(75008, 1000, 'recieved from 74009', 3500, '17/12/2020', '07:56:32pm'),
(74009, 1000, 'transfer to 75008', 7000, '17/12/2020', '07:56:32pm'),
(74009, 8000, 'deposite', 15000, '18/12/2020', '09:31:07am');

-- --------------------------------------------------------

--
-- Table structure for table `passbook1`
--

CREATE TABLE `passbook1` (
  `adhar` bigint(16) NOT NULL,
  `amount` int(10) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `final` int(10) NOT NULL,
  `dates` text NOT NULL,
  `times` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `birthday` date NOT NULL,
  `uid` int(16) NOT NULL,
  `pwd` int(8) NOT NULL,
  `cpwd` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `gender`, `birthday`, `uid`, `pwd`, `cpwd`) VALUES
('madhav', 'Male', '2000-10-18', 121212, 121, 121),
('dev parekh', 'Male', '2001-06-21', 1313, 123, 123),
('Tony Stark', 'Male', '2001-10-18', 123321, 321, 321);

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE `saving` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `adhar` bigint(16) NOT NULL,
  `pan` varchar(16) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `mnum` int(10) NOT NULL,
  `email` text NOT NULL,
  `balance` int(10) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saving`
--

INSERT INTO `saving` (`fname`, `lname`, `gender`, `dob`, `adhar`, `pan`, `address`, `pincode`, `city`, `state`, `mnum`, `email`, `balance`, `pin`) VALUES
('Tony ', 'Stark', 'Male', '2001-01-18', 74009, 'ABCD999XYZ', 'Chikhli', 396521, 'Chikhli', 'GJ', 2147483647, 'Tonystark1010@gmail.com', 15000, 740),
('Madhav ', 'Patel', 'Male', '0000-00-00', 75008, 'ABC750XYZ', 'Chikhli', 396521, 'chikhli', 'Gujrat', 823896555, 'madhav1818@gmail.com', 3500, 750);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
