-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 02:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workers`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_job`
--

CREATE TABLE `assign_job` (
  `id` int(11) NOT NULL,
  `workersName` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_job`
--

INSERT INTO `assign_job` (`id`, `workersName`, `date`, `job`) VALUES
(20, 'Nitin', '2022-01-01', 'plumber'),
(21, 'Yash', '2022-02-01', 'Electrician'),
(22, 'Kenil', '2022-03-01', 'Cleaner'),
(23, 'Kenil', '2022-03-01', 'Cleaner'),
(24, 'Rahul', '2022-04-01', 'plumber'),
(25, 'Rahul', '2022-04-01', 'plumber');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `First_name`, `Last_name`, `User_name`, `State`, `City`) VALUES
(8, 'Vivek', 'Nakrani', 'Vivek09', 'Gujrat', 'Surat'),
(9, 'Vivek', 'Nakrani', 'Vivek09', 'Gujrat', 'Surat'),
(10, 'Meet', 'Dhameliya', 'Meet29', 'Gujrat', 'Ahamdabad'),
(11, 'Ronak', 'Dudharejiya', 'Ronak9712', 'Gujrat', 'Jamnagar'),
(12, 'Shyam', 'Vasoya', 'Vasoya45', 'Gujrat', 'Rajkot'),
(13, 'Shyam', 'Vasoya', 'Vasoya45', 'Gujrat', 'Rajkot'),
(14, 'Jaymil', 'Kavad', 'Jd7785', 'Gujrat', 'Ahamdabad'),
(15, 'Jaymil', 'Kavad', 'Jd7785', 'Gujrat', 'Ahamdabad'),
(16, 'Hasti', 'Dhameliya', 'Hasti28', 'Gujrat', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `id` int(11) NOT NULL,
  `Login` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`id`, `Login`, `Password`) VALUES
(8, 'Vivek09', '12345'),
(9, 'meet28', '12345'),
(10, 'ronak97', '12345'),
(11, 'shyam5', '12345'),
(12, 'shyam5', '12345'),
(13, 'shyam5', '12345'),
(14, 'Vivek09', '12345'),
(15, 'Vivek09', '12345'),
(16, 'Vivek09', '12345'),
(17, 'Vivek09', '12345'),
(18, 'Vivek09', '12345'),
(19, 'Vivek09', '12345'),
(20, 'Vivek09', '12345'),
(21, 'Vivek09', '12345'),
(22, 'Vivek09', '12345'),
(23, 'Vivek09', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_job`
--
ALTER TABLE `assign_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_job`
--
ALTER TABLE `assign_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loginpage`
--
ALTER TABLE `loginpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
