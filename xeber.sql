-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 01:51 PM
-- Server version: 10.1.9-MariaDB
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
  `news_status` tinyint(1) NOT NULL,
  `news_url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xeber`
--

INSERT INTO `xeber` (`news_id`, `news_title`, `news_desc`, `news_text`, `news_thumb`, `news_img`, `news_date`, `news_time`, `news_status`, `news_url`) VALUES
(12, 'Chuvak m', 'Chuvak''s news ', 'Ceyhun says: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'image/file22548.jpg', 'image/file22548.jpg', '2016-03-01', '', 1, 'https://www.news.az/#1'),
(13, 'Eldar Muellim', 'Eldar muellim bunu yoxlayacaq qisa olaraq', 'Eldar muellim bunu hele oxumur :D', 'image/file18621.png', 'image/file18621.png', '2016-03-16', '', 1, 'https://www.news.az/#2'),
(14, 'Elovset m.', 'Elovset chuvaka menimsedildi', 'Chvak says: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'image/file2715.png', 'image/file2715.png', '2016-03-15', '', 1, 'https://www.news.az/#3'),
(15, 'Samir Muellim', 'We trust in Lorem', ' Samir m. says: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'image/file19320.jpg', 'image/file19320.jpg', '2016-03-08', '03:53', 1, 'https://www.news.az/#4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xeber`
--
ALTER TABLE `xeber`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xeber`
--
ALTER TABLE `xeber`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
