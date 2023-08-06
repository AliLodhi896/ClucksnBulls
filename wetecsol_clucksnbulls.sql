-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2023 at 11:08 AM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wetecsol_clucksnbulls`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_description` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `created_at`) VALUES
(1, 'Best Sellings', 'khkjhjhlklkdsads', NULL),
(3, 'Pizza', 'Testing Pizza', NULL),
(4, 'Rolls', 'tsting rlls', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `deal_name` varchar(200) DEFAULT NULL,
  `deal_number` varchar(200) DEFAULT NULL,
  `deal_description` longtext,
  `long_description` longtext,
  `deal_image` longtext,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `deal_name`, `deal_number`, `deal_description`, `long_description`, `deal_image`, `created_at`, `updated_at`) VALUES
(8, 'Classic Two Person', 'Burger Deals 01', 'Two crunchy zinger burger, 500ml Coldrink', 'Rs. 778/-', 'uploads/specials-4.png', '2023-04-18 00:01:15', '2023-04-18 00:01:15'),
(9, 'Burger Deals - Classic Two Person', 'Burger Deals 01', 'Two crunchy zinger burger, 500ml Coldrink', 'Rs. 779/-', 'uploads/BurgerDeal.png', '2023-04-18 00:18:13', '2023-04-18 00:18:13'),
(10, 'Burger Deals - Classic Two Person Deal', 'Burger Deals 03', 'Two crunchy zinger burger, 500ml Coldrink', 'Rs. 779/-', 'uploads/BurgerDeal.png', '2023-04-18 00:19:24', '2023-04-18 00:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `category_id` varchar(200) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` text,
  `image` longtext,
  `price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category_id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Beef Burger', 'Lorem Ipsum has been the industry standard dummy text ever since the ', 'uploads/istockphoto-1188412964-612x612.jpg', 10, NULL, NULL),
(2, '1', 'Chiken Burger', 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'uploads/istockphoto-1188412964-612x612.jpg', 20, NULL, NULL),
(3, '3', 'Fajita Pizza', 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'uploads/pizza-3007395__480.jpg', 300, NULL, NULL),
(4, '3', 'Chicken tikka ', 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'uploads/pizza-3007395__480.jpg', 500, NULL, NULL),
(5, '4', 'Chicken Roll', 'testing chicken rolls', 'uploads/pizza-3007395__480.jpg', 80, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review` longtext NOT NULL,
  `review_by` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `review_by`, `email`, `created_at`) VALUES
(6, 'great experience with CNB ', 'haroon', '', NULL),
(8, 'one of the best fast food restaurent', 'ubaid', '', NULL),
(9, 'This is the best retaurent', 'Ali', '', NULL),
(10, 'best restaurent testing', 'Saad', '', NULL),
(11, 'testing testing testing', 'Qadeer', '', NULL),
(12, 'testing testing testing', 'Qadeer', 'obaidkhan2667@gmail.com', NULL),
(13, 'akdjakls', 'Qadeer', '', NULL),
(14, 'testingggggg', 'asim@yahoo.co', '', NULL),
(15, 'xsxs', 'zxxz', '', NULL),
(16, 'zzzzzzzz', 'zzzz', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-02-21 22:17:26', NULL),
(2, 'sub admin', '2023-02-21 22:18:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `password`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 'Sub', 'Admin', 'admin@gmail.com', 'admin123456', 'active', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
