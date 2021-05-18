-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2021 at 03:06 PM
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
-- Database: `validation 2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmd_produit`
--

DROP TABLE IF EXISTS `cmd_produit`;
CREATE TABLE IF NOT EXISTS `cmd_produit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_cmd` int(10) NOT NULL,
  `id_produit` int(10) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmd_produit`
--

INSERT INTO `cmd_produit` (`id`, `id_cmd`, `id_produit`, `qty`) VALUES
(1, 23, NULL, 0),
(2, 23, NULL, 0),
(3, 23, NULL, 0),
(4, 23, NULL, 0),
(5, 23, NULL, 0),
(6, 24, 1, 0),
(7, 24, 2, 0),
(8, 24, 3, 0),
(9, 24, 4, 0),
(10, 25, 1, 0),
(11, 25, 2, 0),
(12, 25, 3, 0),
(13, 26, 1, 0),
(14, 26, 2, 0),
(15, 26, 3, 0),
(16, 27, 1, 0),
(17, 27, 3, 0),
(18, 30, 3, 3),
(19, 31, 2, 1),
(20, 31, 3, 1),
(21, 32, 2, 1),
(22, 32, 3, 1),
(23, 33, 2, 1),
(24, 33, 3, 1),
(25, 34, 2, 1),
(26, 34, 3, 1),
(27, 35, 2, 3),
(28, 35, 3, 2),
(29, 36, 2, 3),
(30, 36, 3, 2),
(31, 37, 1, 1),
(32, 38, 1, 1),
(33, 38, 2, 1),
(34, 39, 1, 1),
(35, 39, 2, 1),
(36, 39, 3, 1),
(37, 39, 4, 1),
(38, 40, 1, 4),
(39, 40, 2, 1),
(40, 40, 3, 1),
(41, 40, 4, 1),
(42, 41, 1, 1),
(43, 41, 2, 1),
(44, 42, 1, 1),
(45, 42, 2, 1),
(46, 43, 1, 1),
(47, 43, 2, 1),
(48, 44, 1, 1),
(49, 45, 1, 1),
(50, 46, 1, 1),
(51, 47, 1, 1),
(52, 48, 1, 1),
(53, 49, 1, 1),
(54, 50, 1, 1),
(55, 50, 2, 1),
(56, 51, 1, 1),
(57, 51, 2, 1),
(58, 51, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id_commande`, `total`, `user_id`, `etat`) VALUES
(50, 20, 1, 'Non Valid'),
(49, 16, 1, 'Non Valid'),
(48, 20, 1, 'Non Valid'),
(47, 16, 1, 'Non Valid'),
(46, 16, 1, 'Non Valid'),
(45, 16, 1, 'Non Valid'),
(44, 20, 1, 'Non Valid'),
(43, 25, 1, 'Non Valid'),
(35, 55, 1, 'Valid'),
(37, 10, 1, 'Non Valid'),
(42, 25, 1, 'Non Valid'),
(41, 25, 1, 'Non Valid'),
(40, 107, 1, 'Non Valid'),
(39, 47, 1, 'Non Valid'),
(36, 55, 1, 'Valid'),
(51, 45, 1, 'Non Valid');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(20) NOT NULL,
  `Valid` int(11) NOT NULL DEFAULT 1,
  `pourcentage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `Valid`, `pourcentage`) VALUES
(1, 4545, 1, 20),
(2, 7777, 1, 80),
(3, 7788, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 1, 'Royal Canin', 20, 20, '', 'royal.jpg', 'fromage,gruyere'),
(2, 12, 3, 'Litiere minerale', 5, 10, '', 'litere.jpg', 'cereal'),
(3, 1, 4, 'Cage Evoque Medium', 20, 30, '', 'cage.png', 'jus'),
(4, 12, 3, 'Croquettes Chien', 2, 40, '', 'croq.jpg', 'Nwasser');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `role`) VALUES
(1, 'iheb', 'feriani', 'ferianiiheb@gmail.com', '123456789', '24843222', 'gafsa', 1),
(2, 'houba', 'feriani', 'iheb.feriani@esprit.tn', '12345678', '12', 'gafsa', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
