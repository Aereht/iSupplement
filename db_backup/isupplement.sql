-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 03:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isupplement`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(1, 'Supplements', 'In id tristique ex, at dapibus est. Nulla at eros ac mauris laoreet pharetra. Sed diam ligula, rhoncus in aliquam quis, ultrices accumsan diam. Etiam feugiat imperdiet ex at vestibulum. Pellentesque ac sem purus. Sed tincidunt odio a aliquam molestie.', 'supplements.jpg', 'supplements', '2019-02-09 00:00:00', '2019-02-09 00:00:00'),
(2, 'Vitamins', 'In id tristique ex, at dapibus est. Nulla at eros ac mauris laoreet pharetra. Sed diam ligula, rhoncus in aliquam quis, ultrices accumsan diam. Etiam feugiat imperdiet ex at vestibulum. Pellentesque ac sem purus. Sed tincidunt odio a aliquam molestie.', 'vitamins.jpg', 'vitamins', '2019-02-09 00:00:00', '2019-02-09 00:00:00'),
(3, 'Weights', 'In id tristique ex, at dapibus est. Nulla at eros ac mauris laoreet pharetra. Sed diam ligula, rhoncus in aliquam quis, ultrices accumsan diam. Etiam feugiat imperdiet ex at vestibulum. Pellentesque ac sem purus. Sed tincidunt odio a aliquam molestie. Nunc varius enim mi, nec porttitor lectus interdum ut. Aliquam imperdiet aliquet dolor eu laoreet. Cras eleifend ullamcorper nulla.', 'weights.jpg', 'weights', '2019-02-09 00:00:00', '2019-02-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(2, 1, 'About iSupplement', 'iSupplement is where the world goes to shop supplements , sell, and give.\r\nWe give sellers the platform they need to grow their businesses and thrive.', '2019-02-26 20:38:14', '2019-02-22 00:00:00'),
(3, 2, 'Our sales', 'Donec semper pellentesque dignissim. Nulla vitae lacus turpis. Duis ultrices mollis libero, ac tempor sapien vehicula vel. Morbi id molestie est. Fusce erat neque, tempor vel aliquam sit amet, varius vel risus. Mauris non orci non lectus bibendum auctor. Mauris sapien odio, placerat et vulputate in, bibendum vel velit. Integer dictum lectus id purus ullamcorper, sit amet pretium leo tristique. Fusce lectus tellus, consectetur quis vehicula et, varius vitae leo. Quisque bibendum posuere turpis. Mauris ut convallis neque, quis porta eros.', '2019-02-26 20:52:47', '2019-02-22 00:00:00'),
(9, 5, 'Contact me', '<section class=\"resume-section p-3 p-lg-5 d-flex d-column\" id=\"about\">\r\n      <div class=\"my-auto\">\r\n        <h1 class=\"mb-0 text-success\">Ariel <span class=\"text-secondary\">-</span>\r\n          <span class=\"text-danger\">Zada</span></h1><h1 class=\"mb-0 text-success\"><span class=\"text-danger\"><br></span>\r\n        </h1>\r\n        <div class=\"subheading mb-5\">Rambam 42 · Rishon Leziyon · 054-3379474 ·\r\n          <a class=\"text-blue\" href=\"mailto:arielzada305@gmail.com\">arielzada305@gmail.com</a>\r\n        </div>\r\n        <p class=\"lead mb-5\">\r\n          I am a Junior Full Stack Web Developer , <br></p>\r\n        <div class=\"social-icons\">\r\n          <a href=\"https://www.facebook.com/ariel.zada.7\" target=\"_blank\">\r\n            <i class=\"fab fa-facebook-f\"></i>\r\n          </a>\r\n\r\n          <a href=\"https://www.instagram.com/zadaariel/\" target=\"_blank\">\r\n            <i class=\"fab fa-instagram\"></i>\r\n          </a>\r\n          <a href=\"skype:arielz123\" target=\"_blank\">\r\n            <i class=\"fab fa-skype\"></i>\r\n          </a>\r\n        </div>\r\n\r\n    </div></section>', '2019-02-26 20:43:53', '2019-02-26 20:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About', 'about-us', 'About Us', '2019-02-22 00:00:00', '2019-02-22 00:00:00'),
(2, 'Sales', 'sales', 'Our Sales', '2019-02-22 00:00:00', '2019-02-22 00:00:00'),
(5, 'Contact Us', 'contact-us', 'Contact Us', '2019-02-26 20:41:16', '2019-02-26 20:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `data` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `data`, `updated_at`, `created_at`) VALUES
(1, 4, '330.00', 'a:3:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:24:\"Whey-Protein-MusclePharm\";s:5:\"price\";d:50;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"Whey-Protein-BPI\";s:5:\"price\";d:60;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:7:\"Phase-8\";s:5:\"price\";d:55;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2019-02-21 15:17:14', '2019-02-21 15:17:14'),
(2, 4, '165.00', 'a:3:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:24:\"Whey-Protein-MusclePharm\";s:5:\"price\";d:50;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"Whey-Protein-BPI\";s:5:\"price\";d:60;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:7:\"Phase-8\";s:5:\"price\";d:55;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2019-02-21 15:22:00', '2019-02-21 15:22:00'),
(3, 4, '178.00', 'a:4:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:24:\"Whey-Protein-MusclePharm\";s:5:\"price\";d:50;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"Whey-Protein-BPI\";s:5:\"price\";d:60;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:7:\"Phase-8\";s:5:\"price\";d:55;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:8:\"Curcumin\";s:5:\"price\";d:13;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2019-02-21 15:23:20', '2019-02-21 15:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `categorie_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `price`, `purl`, `updated_at`, `created_at`, `categorie_name`) VALUES
(1, 2, 'Omega 3', 'Omega−3 fatty acids, also called ω−3 fatty acids or n−3 fatty acids, are polyunsaturated fatty acids characterized by a double bond three atoms away from the terminal methyl group.', 'capsule-1079838_640.jpg', '14.00', 'omega-3', '2019-02-28 21:24:32', '2019-02-09 00:00:00', 'vitamins'),
(2, 2, 'Curcumin', 'Curcumin is a bright yellow chemical produced by some plants. It is the principal curcuminoid of turmeric, a member of the ginger family, Zingiberaceae. It is sold as an herbal supplement, cosmetics ingredient, food flavoring, and food coloring.', 'nutrient-additives-2358477_640.jpg', '13.00', 'curcumin', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'vitamins'),
(3, 1, 'Whey-Protein-MusclePharm', 'Whey Protein is essential for building muscle mass', 'musclepharm.PNG', '50.00', 'whey-protein-muscle-pharm', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'supplements'),
(4, 1, 'Whey-Protein-BPI', 'Whey Protein is essential for building muscle mass', 'bpi.PNG', '60.00', 'whey-protein-bpi', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'supplements'),
(5, 1, 'Phase-8', 'Whey Protein is essential for building muscle mass', 'phase8.PNG', '55.00', 'phase-8', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'supplements'),
(6, 2, 'Matrix-Red-Pill', 'This is your last chance. You take the red pill—you stay in Wonderland, and I show you how deep the rabbit hole goes.', 'capsule-3446222_640.jpg', '999999.00', 'matrix-red-pill', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'vitamins'),
(7, 3, '5-Kilo', '5 kilogram ', 'fitness-1882721_640.jpg', '40.00', '5-kilo-gram', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'weights'),
(8, 3, '40-Kilo', '40 Kilo Gram Dumbbell', 'dumbbell-1966702_640.jpg', '100.00', '40-kilo-gram', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'weights'),
(9, 3, '60-Kilo-Gram', '60 kilo gram', 'dumbbell-1966704_640.jpg', '150.00', '60-kilo-gram', '2019-02-09 00:00:00', '2019-02-09 00:00:00', 'weights'),
(10, 2, 'Matrix-Blue-Pill', 'This is your last chance. After this, there is no turning back. You take the blue pill—the story ends, you wake up in your bed and believe whatever you want to believe', 'blue-1441449_640.jpg', '999999.00', 'matrix-blue-pill', '2019-02-18 00:00:00', '2019-02-18 00:00:00', 'vitamins'),
(11, 1, 'Whey-Protein-Elite', 'Whey protein is essential for building muscle', 'Elite-Whey.PNG', '50.00', 'whey-protein-elite', '2019-02-24 00:00:00', '2019-02-24 00:00:00', 'supplements'),
(12, 1, 'Whey-Protein-Syntha', 'Whey protein is essential for building muscle', 'Syntha.PNG', '60.00', 'whey-protein-syntha', '2019-02-24 00:00:00', '2019-02-24 00:00:00', 'supplements'),
(13, 1, 'ISO100', 'Whey protein is essential for building muscle', 'ISO100.PNG', '70.00', 'whey-protein-iso', '2019-02-24 00:00:00', '2019-02-24 00:00:00', 'supplements');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(2, '--', '--', '--', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(3, '---', '---', '---', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(4, 'Admin', 'admin@isupplement.com', '$2y$10$mAEOBPTQf9A2of.HRJPPX.youICstGqA7kM0R18.khFTmSYhbcpaq', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(5, 'Shlomi Lahav', 'shlomil.mail@gmail.com', '$2y$10$huQkyBuXAy4yUWFa5rHsj.q0/2oUwPG60qaUsiXIWY1RtF8T57crK', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(6, 'Summer Hasona', 'summerhasona@gmail.com', '$2y$10$huQkyBuXAy4yUWFa5rHsj.q0/2oUwPG60qaUsiXIWY1RtF8T57crK', '2019-02-19 00:00:00', '2019-02-19 00:00:00'),
(7, 'jesus christ', 'jesus@christ.com', '$2y$10$Aj3Vrgi0Btm8ghANon7qbu4iE7IrO0pJ12aJRtwXCB46icZNKrf0O', '2019-02-21 13:55:38', '2019-02-21 13:55:38'),
(8, 'Elohim', 'Elo@him.com', '$2y$10$YRObRGyyV9CDkPtYSTQDxO8FS5544wZ6U9G6Bf6U9YjhTh7OlpE9u', '2019-02-21 13:57:50', '2019-02-21 13:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `rid`) VALUES
(4, 6),
(5, 7),
(6, 7),
(7, 7),
(8, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
