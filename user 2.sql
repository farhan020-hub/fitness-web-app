-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2022 at 05:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`) VALUES
(26, 'ggggg', 'ggggg@gmail.com', '$2y$10$KrhvxHmMJk9Ik6.g3EVz0.cCLpXxJYbFF4HtZFW.mRoiuh4aJ7ciG'),
(28, 'judy', 'judy@yahoo.com', '$2y$10$9ZhsphoqktMDeaVea1LYZusWQ9KbRsxwZHXeLgmKiLoZUvyte0MVW'),
(29, 'jamesu', 'jamesu@gmail.com', '$2y$10$z.Z/6SPp746gVuaCr5yi8OxJJGq.qgx8HYwYuIoJL4hreEZ28PRXW'),
(30, 'mark', 'mark@gmail.com', '$2y$10$vU5UlYkEQC15md7x9Cjcku6L9ps.6h2TbG6RKr2qXhOyHBMEFwhBK'),
(31, 'james', 'james@gmail.com', '$2y$10$fsyo1FQNaPns90qjEoam1uNDn13/WpV2HxarUGokrgnnK2fm/rV2q'),
(32, 'huhuhu', 'huhuhu@gmail.com', '$2y$10$LN0NgzNO4v5qW0gl2NbJpeFXOdG.F2uLpP5aW5gRAYmtYRX3VrndO'),
(33, 'jurant', 'jurant@yahoo.com', '$2y$10$xO5.K.gJEoEiQxfxhQaA9OGY4041p158aaDW6SkdvBI3iEIrylQSG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
