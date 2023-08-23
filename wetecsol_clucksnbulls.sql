-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 12:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `deal_description` longtext DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `deal_image` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `description` text DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category_id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Beef Burger', 'healthy', 'uploads/istockphoto-1188412964-612x612.jpg', 10, NULL, NULL),
(2, '1', 'Chiken Burger', 'healthy', 'uploads/istockphoto-1188412964-612x612.jpg', 20, NULL, NULL),
(3, '3', 'Fajita Pizza', 'healthy', 'uploads/pizza-3007395__480.jpg', 300, NULL, NULL),
(4, '3', 'Chicken tikka ', 'healthy', 'uploads/pizza-3007395__480.jpg', 500, NULL, NULL),
(5, '4', 'Chicken Roll', 'testing chicken rolls', 'uploads/pizza-3007395__480.jpg', 80, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_sizes`
--

CREATE TABLE `menu_sizes` (
  `id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `menu_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_sizes`
--

INSERT INTO `menu_sizes` (`id`, `size_name`, `price`, `menu_item_id`) VALUES
(1, 'small', '100', 3),
(2, 'medium', '200', 3),
(3, 'large', '300', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `modal_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `modal_images`) VALUES
(1, 'assets/img/specials-1.png'),
(2, 'assets/img/specials-2.png'),
(3, 'assets/img/specials-3.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(16, 'zzzzzzzz', 'zzzz', '', NULL),
(18, 'asdjsaaaaaaaaaaaaaaaaadasdjsaaaaaaaaaaaaaaaaadasdjsaaaaaaaaaaaaaaaaad', 'new', '', NULL),
(19, 'sadjasdssssssssssadjasdssssssssssadjasdsssssssss', 'ubaid', '', NULL),
(20, 'asassssssssssssssssssssssssssssssssssasassssssssssssssssssssssssssssssssssasassssssssssssssssssssssssssssssssss', 'Uhyyt', '', NULL),
(21, 'asassssssssssssssssssssssssssssssssss\r\nasassssssssssssssssssssssssssssssssss\r\nasassssssssssssssssssssssssssssssssss', 'sasajskaj', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Indexes for table `menu_sizes`
--
ALTER TABLE `menu_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_item_id` (`menu_item_id`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
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
-- AUTO_INCREMENT for table `menu_sizes`
--
ALTER TABLE `menu_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_sizes`
--
ALTER TABLE `menu_sizes`
  ADD CONSTRAINT `menu_item_id` FOREIGN KEY (`menu_item_id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
