-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2019 at 01:15 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `date_created`, `category_status`) VALUES
(1, 'Frequently Asked Questions', '2019-01-26 06:22:46', 1),
(2, 'IT Help Desk Forum', '2019-01-26 06:33:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `username`, `password`, `date_joined`, `account_status`) VALUES
(1, 'noli', '80b153bf05d4dc063405a8d38d3def84', '2019-01-28 01:09:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `login_id`, `first_name`, `last_name`, `birthdate`, `age`, `email`, `contact_number`, `status`) VALUES
(1, 1, 'Noli', 'Albay', '1995-10-11', 23, 'pahiram.albay@gmail.com', '09124583714', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reply_tbl`
--

CREATE TABLE `reply_tbl` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `reply_icon` varchar(50) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reply_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply_tbl`
--

INSERT INTO `reply_tbl` (`id`, `login_id`, `category_id`, `sub_category_id`, `topic_id`, `content`, `reply_icon`, `date_posted`, `reply_status`) VALUES
(1, 1, 1, 1, 3, '<h1>asfasfasfasf</h1>', 'Standard', '2019-01-28 07:11:26', 1),
(2, 1, 1, 1, 3, '<p>zxczxczxczxc</p>', 'Lamp', '2019-01-28 07:11:26', 1),
(3, 1, 1, 1, 3, '<h1>Hello World!&nbsp;<img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></h1>', 'Question Mark', '2019-01-28 07:11:26', 1),
(6, 1, 1, 1, 3, '<h1 style=\"text-align: center;\">Post Forum</h1>\r\n<p><em><strong>Content of Post</strong></em></p>', 'Lamp', '2019-01-28 07:11:26', 1),
(7, 1, 1, 1, 3, '<h1 style=\"text-align: center;\"><em><strong>2nd Post Forum</strong></em></h1>\r\n<p><em><strong>2nd Content</strong></em></p>', 'Smiley', '2019-01-28 07:22:24', 1),
(8, 1, 1, 1, 1, '<h1>1st post in&nbsp;</h1>\r\n<h1 id=\"post-title\">My PC is broken</h1>\r\n<h1>Hayyyys</h1>', 'Standard', '2019-01-28 07:23:38', 1),
(9, 1, 1, 1, 3, '<h1>Hello Ido Pong</h1>', 'Thumb Down', '2019-01-28 07:38:58', 1),
(10, 1, 1, 1, 6, '<h1 style=\"text-align: center;\">asfasfasfasf</h1>', 'Standard', '2019-01-28 08:05:26', 1),
(11, 1, 1, 1, 7, '<h1 style=\"text-align: center;\">This is a reply</h1>', 'Thumb Up', '2019-01-28 08:09:18', 1),
(12, 1, 2, 2, 8, '<h1 style=\"text-align: center;\">This is great!</h1>\r\n<p>Hello! This is great!&nbsp;<img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></p>', 'Thumb Up', '2019-01-28 08:48:48', 1),
(13, 1, 1, 1, 7, '<h1 style=\"text-align: center;\">This is sample data</h1>\r\n<p><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></p>', 'Thumb Up', '2019-01-28 09:12:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_category_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category`, `description`, `date_created`, `sub_category_status`) VALUES
(1, 1, 'General Discussion', 'This is where all issues are being tackled.', '2019-01-26 07:01:41', 1),
(2, 2, 'All about IT Help Desk', 'This is a sample description', '2019-01-28 07:29:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic_tbl`
--

CREATE TABLE `topic_tbl` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `topic` varchar(70) NOT NULL,
  `description` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_views` int(11) NOT NULL,
  `topic_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic_tbl`
--

INSERT INTO `topic_tbl` (`id`, `login_id`, `category_id`, `sub_category_id`, `topic`, `description`, `content`, `date_posted`, `page_views`, `topic_status`) VALUES
(1, 1, 1, 1, 'My PC is broken', 'Automatically shutting down.', '<p>Hellooooooooooooooo, somebody answer me?</p>', '2019-01-26 07:25:03', 0, 1),
(2, 1, 1, 1, 'My PC is slowing down', 'Fucking PC', '<p>Fuck the system</p>', '2019-01-26 08:22:59', 0, 1),
(3, 1, 1, 1, 'Sample topic', 'This is just a sample topic', '<p>zxczxczxc</p>', '2019-01-28 01:26:23', 0, 1),
(4, 1, 2, 1, 'Forum Activity', 'End of activity', '<p>This is my new topic</p>', '2019-01-28 07:25:35', 0, 1),
(5, 1, 1, 1, 'New topic', 'asdasdasd', '<p>asdasdasdasdasd</p>', '2019-01-28 07:55:10', 0, 1),
(6, 1, 1, 1, 'This is a new topic', 'asdas', '<p>asdasd</p>', '2019-01-28 08:05:00', 0, 1),
(7, 1, 1, 1, 'This is a new topic', 'I dont know what to say', '<h1 style=\"text-align: center;\">This is a new Topic</h1>\r\n<p><strong><em>Hello World!</em></strong></p>', '2019-01-28 08:06:31', 0, 1),
(8, 1, 2, 2, 'This is all about IT Help Desk Forum', 'A little description', '<h1 style=\"text-align: center;\">IT Help Desk Forum</h1>\r\n<p>Hello World!&nbsp;<img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../assets/js/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></p>', '2019-01-28 08:47:55', 0, 1),
(9, 1, 2, 2, 'This is a new topic', 'Add description', '<h1 style=\"text-align: center;\">Hello World!</h1>', '2019-01-28 08:55:31', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `topic_tbl`
--
ALTER TABLE `topic_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topic_tbl`
--
ALTER TABLE `topic_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD CONSTRAINT `personal_details_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_details` (`id`);

--
-- Constraints for table `reply_tbl`
--
ALTER TABLE `reply_tbl`
  ADD CONSTRAINT `reply_tbl_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_details` (`id`),
  ADD CONSTRAINT `reply_tbl_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `reply_tbl_ibfk_3` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`),
  ADD CONSTRAINT `reply_tbl_ibfk_4` FOREIGN KEY (`topic_id`) REFERENCES `topic_tbl` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `topic_tbl`
--
ALTER TABLE `topic_tbl`
  ADD CONSTRAINT `topic_tbl_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login_details` (`id`),
  ADD CONSTRAINT `topic_tbl_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `topic_tbl_ibfk_3` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
