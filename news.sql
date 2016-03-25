-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 05:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xeber`
--

CREATE TABLE `xeber` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` varchar(250) NOT NULL,
  `news_text` text NOT NULL,
  `news_thumb` varchar(255) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `news_time` varchar(255) DEFAULT NULL,
  `news_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xeber`
--

INSERT INTO `xeber` (`news_id`, `news_title`, `news_desc`, `news_text`, `news_thumb`, `news_img`, `news_date`, `news_time`, `news_status`) VALUES
(12, 'New', 'Description', 'Full', 'image/file22548.jpg', 'image/file22548.jpg', '2016-03-01', '', 1),
(13, 'Eldar Muellim', 'Eldar muellim bunu yoxlayacaq qisa olaraq', 'Eldar muellim bunu hele oxumur :D', 'image/file18621.png', 'image/file18621.png', '2016-03-16', '', 1),
(14, 'News 3 ', 'Description 3', 'asdasd', 'image/file2715.png', 'image/file2715.png', '2016-03-15', '', 1),
(15, 'Samir Muellim', 'Descriptonipo', 'Full Text', 'image/file19320.jpg', 'image/file19320.jpg', '2016-03-08', '03:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `xeber`
--
ALTER TABLE `xeber`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `xeber`
--
ALTER TABLE `xeber`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
