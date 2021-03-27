-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 09:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`name`, `price`, `id`) VALUES
('Canon EOS', 36000, 1),
('Nikon DSLR', 40000, 2),
('Sony DSLR', 45000, 3),
('Olympus DSLR', 50000, 4),
('Titan #301', 13000, 5),
('Titan #201', 3000, 6),
('HMT Milan', 8000, 7),
('Faber Luba', 18000, 8),
('H&W', 800, 9),
('Luis Phil', 1000, 10),
('Joh Zok', 1500, 11),
('Jhalsani', 1300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(15) NOT NULL,
  `category` enum('book','stationery','other','') NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `category`, `id`) VALUES
('harry_potter', 'book', 1),
('deception_point', 'book', 2),
('drunkards_walk', 'book', 3),
('the_kite_runner', 'book', 4),
('animal_farm', 'book', 5),
('night_lamp', 'other', 6),
('pencil_box', 'stationery', 7),
('fountain_pen', 'stationery', 8),
('study_bed_table', 'other', 9),
('personal_diary', 'stationery', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `contact`, `city`, `address`, `id`) VALUES
('Vaibhav Anuragi', 'vaibhaverma132@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '9871530819', 'Ghaziabad', 'D-53 National C.P.W.D. Academy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Confirmed','Added to cart') NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `item_id` (`user_id`),
  KEY `user_id` (`user_id`) KEY_BLOCK_SIZE=1024
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`user_id`, `item_id`, `status`, `id`) VALUES
(1, 1, 'Confirmed', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`user_id`, `product_id`, `purchase_timestamp`, `id`) VALUES
(12, 3, '2016-10-10 12:40:12', 1),
(12, 6, '2016-10-12 12:40:12', 2),
(8, 6, '2016-10-29 06:42:12', 3),
(4, 6, '2016-10-15 07:35:04', 4),
(10, 9, '2016-10-09 20:45:16', 5),
(7, 4, '2016-10-10 03:04:42', 6),
(5, 1, '2016-10-19 11:28:54', 7),
(4, 5, '2016-10-14 06:05:32', 8),
(8, 5, '0000-00-00 00:00:00', 9),
(7, 7, '2016-10-04 07:42:35', 10),
(12, 2, '2016-10-14 06:53:41', 11),
(12, 7, '2016-10-21 08:45:13', 12),
(7, 2, '2016-10-05 10:38:02', 13),
(7, 8, '2016-10-06 12:04:49', 14),
(1, 2, '2016-10-13 10:07:51', 15),
(11, 6, '2016-10-15 04:33:01', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
