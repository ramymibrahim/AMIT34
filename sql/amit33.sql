-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 07:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amit33`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Sports'),
(2, 'Fashion'),
(3, 'Media'),
(4, 'Technologies');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rate` float NOT NULL,
  `rate_count` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `publish_date`, `category_id`, `user_id`, `rate`, `rate_count`, `content`) VALUES
(1, 'فوز الاهلي على الزمالك 4/0', 'ahly.jpg', '2019-10-02 19:55:25', 1, 1, 0, 0, 'فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 فوز الاهلي على الزمالك 4/0 '),
(2, 'فوز الاهلي على الزمالك 6/0', 'ahly.jpg', '2019-10-02 19:55:25', 1, 1, 0, 0, 'فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 فوز الاهلي على الزمالك 6/0 '),
(3, 'Ay haga', 'a.jpg', '2019-10-07 19:21:58', 2, 1, 0, 0, 'Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga Ay haga ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `type`) VALUES
(1, 'author1', '123', 'author@amit.com', 'Mohamed Ahmed', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_posts_category_id` (`category_id`),
  ADD KEY `users_posts_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `categories_posts_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `users_posts_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
