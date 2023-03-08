-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `student_id`, `course_id`, `rating`, `description`) VALUES
(3, '3', '2', '2', 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you do that is longer than a few sentences should be organized into paragraphs.'),
(5, '4', '2', '', 'test'),
(6, '1', '2', '2', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'rajeshwaru', 'rani@gmail.com', 'testing', 'nice site'),
(5, 'rajeshwari ganji', 'ranijeshwari@gmail.com', 'subject', 'message'),
(6, 'lavannya gurram', 'lavannya@gmail.com', 'subject', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrolled`
--

CREATE TABLE `tbl_enrolled` (
  `id` int(11) NOT NULL,
  `technology_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enrolled`
--

INSERT INTO `tbl_enrolled` (`id`, `technology_id`, `student_id`, `status`) VALUES
(1, 3, 1, 'active'),
(2, 2, 1, 'active'),
(6, 4, 1, 'active'),
(10, 5, 1, 'active'),
(14, 5, 3, 'active'),
(15, 2, 4, 'active'),
(16, 2, 4, 'active'),
(18, 3, 1, 'active'),
(19, 5, 4, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

CREATE TABLE `tbl_features` (
  `id` int(11) NOT NULL,
  `technology_id` int(50) NOT NULL,
  `file` varchar(256) NOT NULL,
  `chapter` varchar(256) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_features`
--

INSERT INTO `tbl_features` (`id`, `technology_id`, `file`, `chapter`, `status`) VALUES
(1, 2, 'How to make an HTML5 video player in under 5 minutes.mp4', 'first chapter', 'active'),
(2, 2, 'How to make an HTML5 video player in under 5 minutes.mp4', 'seconde chapter', 'active'),
(3, 5, '1_ Introduction to PHP Programming _ PHP Tutorial _ PHP For Beginners _ Learn PHP Programming.mp4', 'Introduction Of PHP', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `education` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `email`, `mobile`, `education`, `address`, `date_of_birth`, `password`, `status`) VALUES
(1, 'rajeshwari shriniwas ganji', 'rajeshwariganji1979@gmail.com', 9767532433, 'diploma computer branch', 'nilam nagar solapur', '2022-05-28', 'rani', 'active'),
(3, 'lavannya gurram', 'lavannya.gurram@gmail.com', 7412569869, 'BCA', 'pune', '2000-02-15', '123', 'active'),
(4, 'ujwala', 'ujwalanuti@gmail.com', 7776803982, 'Btech', ' pune', '2001-10-14', 'abcd', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `short_desc` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`id`, `name`, `image`, `description`, `short_desc`, `status`) VALUES
(2, 'HTML', '485-4850314_transparent-background-html-logo-hd-png-download.png', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">HTML is the standard markup language for Web pages.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">With HTML you can create your own Website.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">HTML is easy to learn - You will enjoy it!</p>', 'HTML is the standard markup language for Web pages.\r\n\r\nWith HTML you can create your own Website.', 'active'),
(3, 'JavaScript', 'js-emblem-orange-shield-and-white-text-vector.jpg', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">JavaScript is the worlds most popular programming language.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">JavaScript is the programming language of the Web.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">JavaScript is easy to learn.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">This tutorial will teach you JavaScript from basic to advanced.</p>', 'JavaScript is the worlds most popular programming language.', 'active'),
(4, 'CSS', 'images.png', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">CSS is the language we use to style an HTML document.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">CSS describes how HTML elements should be displayed.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">This tutorial will teach you CSS from basic to advanced.</p>', 'CSS is the language we use to style an HTML document.\r\n\r\nCSS describes how HTML elements should be displayed.', 'active'),
(5, 'PHP', 'images (1).png', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">PHP is a widely-used, free, and efficient alternative to competitors such as Microsofts ASP.</p>', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.', 'active'),
(6, 'Java', 'images (2).png', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">Java is a popular programming language.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; color: rgb(0, 0, 0); font-family: Verdana, sans-serif;\">Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>', 'Java is a popular programming language.Java is used to develop mobile apps, web apps, desktop apps, games and much more.', 'active'),
(7, 'Big Data Science testing', 'Data-Science-vs.-Big-Data-vs.avif', '<p>description</p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', 'short description', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enrolled`
--
ALTER TABLE `tbl_enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_features`
--
ALTER TABLE `tbl_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_enrolled`
--
ALTER TABLE `tbl_enrolled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_features`
--
ALTER TABLE `tbl_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
