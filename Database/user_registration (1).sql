-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 07:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES
('Hari Tambade', 'haritambade@gmail.com', 2147483647, 'Provide certificate as well..'),
('Pooja Patil', 'poojap@gmail.com', 2147483647, 'Provide chatbot'),
('Sanika Patil', 'sanika@gmail.com', 2147483647, 'Amazing'),
('Sakshi Jadhav', 'sakshij@gmail.com', 2147483647, 'Amazing platform');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_email`, `question`, `filename`, `uploaded_at`) VALUES
(5, 'mayuri@gmail.com', '1. Write a Java program to check if a given number is prime.', '6811b81c2a879_prime.java', '2025-04-30 11:11:48'),
(6, 'sakshi@gmail.com', '2. Write a Java program to reverse a given string.', '6811b89d3f7e7_string.java', '2025-04-30 11:13:57'),
(7, 'komal@gmail.com', '3. Write a program to print the Fibonacci series up to n terms.', '6811b8c2397fd_fib.java', '2025-04-30 11:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `gender`, `password`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(4, 'Mayuri', 'Chougule', '7980247867', 'mayuri@gmail.com', 'female', '12345', NULL, NULL),
(5, 'Sanket', 'Rane', '5646786587', 'Sanket@gmail.com', 'male', '5678', NULL, NULL),
(6, 'sakshi', 'shinde', '5678942090', 'sakshi@gmail.com', 'female', '0345', NULL, NULL),
(7, 'komal', 'gacchi', '956788309', 'komal@gmail.com', 'female', '0987', NULL, NULL),
(8, 'pooja', 'date', '3214567680', 'pooja@gmail.com', 'female', '8907', NULL, NULL),
(9, 'Ranjeet', 'Chougule', '5673857423', 'ranjeet@gmail.com', 'male', '34567', NULL, NULL),
(10, 'Sam', 'Rane', '5673857423', 'sam@gmail.com', 'other', 'tghyuj', NULL, NULL),
(11, 'neha', 'jadhav', '5674557423', 'neha@gmail.com', 'female', '1234', NULL, NULL),
(12, 'Sanika', 'Gurav', '6835762898', 'Sanika@gmail.com', 'female', 'asdf', NULL, NULL),
(15, 'Sanika', 'Gurav', '6835762898', 'San@gmail.com', 'female', 'asdf', NULL, NULL),
(16, 'Pooja', 'Date', '7038653540', 'datepooja02@gmail.com', 'female', 'pooja@2004', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
