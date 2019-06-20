-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 09:39 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alluser`
--

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `ID` int(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `E-mail` text NOT NULL,
  `Mobile No.` int(12) NOT NULL,
  `Credit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`ID`, `Name`, `E-mail`, `Mobile No.`, `Credit`) VALUES
(1, 'Al Pacino', 'alpacino@gmail.com', 1425367485, 25377),
(2, 'Johnny Depp', 'johnnydepp@gmail.com', 1245789865, 170257),
(3, 'Kevin Spacey', 'kevinspacey@gmail.com', 1425755965, 13439),
(4, 'Russell Crowe', 'russellcrow@gmail.com', 1545759535, 450),
(5, 'Brad Pitt', 'bradpitt@gmail.com', 1245786535, 24126),
(6, 'Angelina Jolie', 'angelinajolie@gmail.com', 1425859645, 182425),
(7, 'John Travolta', 'JohnTravolta@gmail.com', 1525367595, 2000),
(8, 'Kate Winslet', 'KateWinslet@gmail.com', 1245786535, 460),
(9, 'Morgan Freeman', 'MorganFreeman@gmail.com', 1412759565, 3500),
(10, 'Will Smith', 'WillSmith@gmail.com', 1285957535, 18419);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
