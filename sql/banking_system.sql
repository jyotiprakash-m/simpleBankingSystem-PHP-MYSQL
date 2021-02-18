-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 03:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `slno` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`slno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'Payal Patra', 'Himadri Patra', 5666, '2021-02-16 11:00:51'),
(2, 'Saurav Sharma', 'Jyoti Prakash Mohanta', 500, '2021-02-16 11:02:03'),
(3, 'Nisha Kumari', 'Naba Ratan Patra', 500, '2021-02-16 11:04:59'),
(4, 'Payal Patra', 'Naba Ratan Patra', 980, '2021-02-16 11:06:21'),
(5, 'Kabir Singh', 'Nisha Kumari', 50, '2021-02-16 21:58:21'),
(6, 'Rahim Khan', 'Nisha Kumari', 8000, '2021-02-16 22:10:47'),
(7, 'Rahim Khan', 'Naba Ratan Patra', 700, '2021-02-16 22:11:43'),
(8, 'Nisha Kumari', 'Jyoti Prakash Mohanta', 550, '2021-02-16 22:15:28'),
(9, 'Ankit Kumar Chaini', 'Jyoti Prakash Mohanta', 500, '2021-02-16 22:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `amount`) VALUES
(1, 'Jyoti Prakash Mohanta', 'jpmohanta64@gmail.com', 6550),
(2, 'Nisha Kumari', 'nishaku46@gmail.com', 13000),
(3, 'Himadri Patra', 'himap36@gmail.com', 10766),
(4, 'Naba Ratan Patra', 'nsbaratanpatra21@gmail.com', 2680),
(5, 'Saurav Sharma', 'sauravsharma36@gmail.com', 55507),
(6, 'Rahim Khan', 'rahim645@gmail.com', 90000),
(7, 'Kabir Singh', 'kabirsing365@gmail.com', 937),
(8, 'Payal Patra', 'payal65@gmail.com', 5000),
(9, 'Titu Nayak', 'titunayak98@gmail.com', 897),
(10, 'Ankit Kumar Chaini', 'ankit23@gmail.com', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
