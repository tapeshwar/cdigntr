-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 01:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdigntr`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `discount` int(5) DEFAULT NULL,
  `stock` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online_date` date NOT NULL,
  `enable` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `description`, `category`, `quantity`, `discount`, `stock`, `online_date`, `enable`, `author`, `approved_by`, `comments`) VALUES
(1, '3sdfs', 'sf', 'fsf', 1, 0, 0, 'sf', '0000-00-00', '', 'sfa', 'saf', 'sdfa'),
(2, '3sdfs', 'sf', 'fsf', 1, 0, 0, 'sf', '0000-00-00', '', 'sfa', 'saf', 'sdfa'),
(3, '23333sdfa', 'sda', 'sdaf', 1, 0, 0, 'sd', '0000-00-00', '1', 'sda', 'sa', 'as'),
(4, 'wqrwq', 'sadf', 'saf', 1, 0, 0, 'sa', '0000-00-00', '', '', '', ''),
(5, 'wqrwq', 'sadf', 'saf', 1, 0, 0, 'sa', '0000-00-00', '', '', '', ''),
(6, '32', 'sdfa', 'sdf', 0, 0, 0, 'sda', '0000-00-00', '', '', '', ''),
(7, 'sdfa3223', 'sda', 'sdfas', 1, 0, 0, 'sda', '0000-00-00', '', '', '', ''),
(8, '34', 'sdfs', 'sdf', 1, 0, 0, 'sfa', '0000-00-00', '', '', '', ''),
(9, 'sdfa', 'sdfa', 'sda', 1, 0, 0, 'sdfa', '0000-00-00', '', '', '', ''),
(10, '3232', 'fsdf', 'sdf', 1, 0, 0, 'sda', '0000-00-00', '', '', '', ''),
(11, 'sd3223', 'sdsa', 'sda', 1, 0, 0, 'sfa', '0000-00-00', '', '', '', ''),
(12, '234', 'sfsa', 'sa', 1, 0, 0, 'saf', '0000-00-00', '', '', '', ''),
(13, '234', 'sfsa', 'sa', 1, 0, 0, 'saf', '0000-00-00', '', '', '', ''),
(14, 'sfa', 'sadf', 'saf', 1, 0, 0, 'saf', '0000-00-00', '', '', '', ''),
(15, '2342', 'ewrwer', 'werwe', 1, 0, 0, 'sdf', '0000-00-00', '', '', '', ''),
(16, '24234', 'fsdf', 'afdf', 1, 0, 0, 'sdfa', '0000-00-00', '', '', '', ''),
(17, '234rw', 'fsaf', 'saf', 1, 0, 0, 'sfa', '0000-00-00', '', '', '', ''),
(18, 'sda', 'sda', 'dsa', 1, 0, 0, 'sda', '0000-00-00', '', '', '', ''),
(19, 'sdfaf', 'safs', 'fas', 1, 0, 0, 'saf', '0000-00-00', '', '', '', ''),
(20, '', '', NULL, 0, 0, NULL, '', '0000-00-00', '1', NULL, NULL, NULL),
(21, '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', ''),
(22, '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', ''),
(23, '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', ''),
(24, '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', ''),
(25, 'daffa', 'sfas', 'sdf', 0, 0, 0, 'sdfs', '0000-00-00', '', 'sdfsd', 'sdfsd', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `category_img`) VALUES
(6, 'sdfaf', 'custom_name1612246098'),
(7, 'sdfsadf sfsa', 'custom_name1612258437.jpg'),
(8, 'sdfdf', ''),
(9, 'sfsafsdf', ''),
(10, 'sdfsafsd', 'custom_name1612266344.jpg'),
(11, 'sfsafd', ''),
(12, 'sdfsaf', ''),
(13, 'sdfsf sdfsd', ''),
(14, 'sfsd sdfsf sdf stest', ''),
(15, 'sdfsdfa', ''),
(16, 'sdfsaf sdfsadf', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `product_id`, `name`) VALUES
(1, 19, 'my_custom_file_name1611576412.png'),
(2, 24, 'custom_name1611923380'),
(3, 25, 'custom_name1612181353');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempt` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `mobile`, `attempt`) VALUES
(1, 'adminds', 'adminsdsf', 'testing@yopmail.com', '7812012451', 0),
(2, 'adminui', '$2y$10$srYs28lCv4HsXORue4GeHed6PgPLu99ZdZ7DC26slAWovYaArSx2C', 'sdfsa@safs.sdfa', '', 0),
(3, 'admin', '$2y$10$o1OHdmKJ7CUZ0NvF/n4rnuX3t.5BFkvBbFQoKbAmJLwSbJOIqWd0S', 'sdfsa@safs.sdfa', '', 0),
(4, 'test', '$2y$10$xu/kJDUq3mDg4EyXSCeeHewQCN1tawkO83/noOsUFIDL23ewmDn4a', 'test@yopmail.com', '', 0),
(5, 'adas', '$2y$10$xnh7FqgrB/D.Q21UJvz4YeaazhcYC73oNyH.Wgnq1rmMpBlqSShOu', 'sdfsad@sfsfa.sdfa', '', 0),
(6, 'test', '$2y$10$0PU8Byrz8V6PTH6MQd/KhOAdNEnggt3ODwokcvcjYXnZw9y9eQGvK', 'test@test.com', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
