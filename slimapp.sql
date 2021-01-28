-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 01:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slimapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `city`, `state`) VALUES
(13, 'Sarai', 'Walsh', '(516) 683-4274', 'ewolff@example.com', '679 Ena Valley\nNorth Alayna, OK 81329', 'Clovismouth', 'North Dakota'),
(14, 'Amely', 'Jast', '+1-449-252-0770', 'oconnell.angelica@example.net', '1763 Kaci Spur Suite 106\nLake Robert, OH 41228-9583', 'Merleshire', 'Indiana'),
(15, 'Aurelie', 'Bahringer', '+1.405.273.9015', 'upton.melody@example.com', '8673 Runolfsson Drive\nMohrmouth, AL 10129-3391', 'North Meredithview', 'New Hampshire'),
(16, 'Salvatore', 'Schowalter', '(745) 953-2632', 'scot01@example.com', '59587 Claire Fork\nOrlofort, WV 02075', 'New Cassandre', 'Massachusetts'),
(17, 'Earnestine', 'Legros', '+16158141341', 'becker.hazel@example.com', '328 Homenick Harbors\nNorth Elenorafort, HI 34869-2809', 'East Stanleyhaven', 'South Dakota'),
(20, 'Tavares', 'Blick', '(512) 227-9826', 'rogers.nader@example.org', '8922 Rosenbaum Plains Apt. 648\nTorpberg, DE 56593-3342', 'Lake Mitchelton', 'Idaho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
