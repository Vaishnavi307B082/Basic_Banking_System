-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 07:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Priya', 'Ram', 5000, '2022-02-11 15:56:31'),
(2, 'Ram', 'Nisha', 2000, '2022-02-11 15:56:57'),
(3, 'Ridhima', 'Anuj', 1000, '2022-02-11 16:12:52'),
(4, 'Abhi', 'Priya', 5000, '2022-02-11 23:45:32'),
(5, 'Ridhima', 'Anuj', 1000, '2022-02-11 23:46:00'),
(6, 'Ram', 'Priya', 2000, '2022-02-12 00:05:49'),
(7, 'Abhi', 'Prachi', 2000, '2022-02-12 11:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL,
  `ifsc_code` varchar(8) NOT NULL,
  `Account_no` varchar(11) NOT NULL,
  `Mob_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`, `ifsc_code`, `Account_no`, `Mob_no`) VALUES
(1, 'Abhi', 'abhi@gmail.com', 493000, 'sbi00040', '14795175345', 1198764532),
(2, 'Kishor', 'kishor@gmail.com', 80000, 'sbi00040', '75849642535', 1104651234),
(3, 'Shiv', 'shiv@gmail.com', 40000, 'sbi00040', '98564573251', 1245963214),
(4, 'Priya', 'priya@gmail.com', 52000, 'sbi00040', '95175348642', 1247863541),
(5, 'Ram', 'ram@gmail.com', 41000, 'sbi00040', '32415976852', 1398754210),
(6, 'Prachi', 'prachi@gmail.com', 32000, 'sbi00040', '25895176485', 1354674215),
(7, 'Ridhima', 'ridhima@gmail.com', 48000, 'sbi00040', '45897612863', 1489761286),
(8, 'Veer', 'veer@gmail.com', 40000, 'sbi00040', '68542987348', 1685429873),
(9, 'Nisha', 'nisha@gmail.com', 32000, 'sbi00040', '75586209204', 1755862092),
(10, 'Anuj', 'anuj@gmail.com', 52000, 'sbi00040', '95618961914', 1956189619),
(11, 'Vaishu', 'vaishusawant2002@gmail.com', 150000, 'sbi00040', '15897648216', 1589764821),
(12, 'Anuja', 'anuja@gmail.com', 800000, 'sbi00040', '86497351235', 1864973512);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

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
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
