-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 08:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_list`
--

CREATE TABLE `emp_list` (
  `id` int(11) NOT NULL,
  `emp_id` text NOT NULL,
  `emp_name` text NOT NULL,
  `emp_age` int(11) NOT NULL,
  `emp_add` text NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gen` text NOT NULL,
  `emp_natl` text NOT NULL,
  `emp_ctc` bigint(20) NOT NULL,
  `emp_email` text NOT NULL,
  `emp_pf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_list`
--

INSERT INTO `emp_list` (`id`, `emp_id`, `emp_name`, `emp_age`, `emp_add`, `emp_dob`, `emp_gen`, `emp_natl`, `emp_ctc`, `emp_email`, `emp_pf`) VALUES
(59, '1213', 'Tony Stark', 50, '10880 Malibu Point, 90265', '1970-05-29', 'Male', 'American', 9121546573, 'stark@businessemail.com', 'Stark.jpg'),
(60, '5239', 'Hayao Miyazaki', 82, 'Tokyo, Japan', '1940-05-01', 'Male', 'Japanese', 9157886573, 'hayao.ghibli@email.com', 'Hayao Miyazaki.jpg'),
(61, '4638', 'Jane Doe', 23, 'Bulakan, Bulacan', '2000-12-25', 'Female', 'Filipino', 9485893723, 'doe@email.com', 'photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_list`
--
ALTER TABLE `emp_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_list`
--
ALTER TABLE `emp_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
