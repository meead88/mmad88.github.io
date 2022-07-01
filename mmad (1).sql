-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220625.0c1859477d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 09:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passward` varchar(200) NOT NULL,
  `role` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `passward`, `role`) VALUES
(1, 'ahmed tibin', 'ahmed1234@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `display` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `display`) VALUES
(1, 'Meead mohammed', 'meeadmoh@gmail.com', 'this is a comment this is a comment this is a comment this is a comment this is a comment', 0),
(2, 'suha hassan', 'suhaa@gmail.com', 'comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment ', 0),
(3, 'ali ahmed', 'ali@gmail.com', 'comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment ', 1),
(4, 'meead', 'meead123@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(5, 'meead moh', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(6, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(7, 'meead moh', 'mona@gmail.com', 'hi , this is a good website', 0),
(8, 'meead moh', 'mona@gmail.com', 'hi , this is a good website', 0),
(9, 'meead moh', 'mona@gmail.com', 'hi , this is a good website', 1),
(11, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(12, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(13, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(14, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(15, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(16, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(17, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(18, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(19, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(20, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 1),
(21, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 0),
(22, 'mohammed', 'mohammedmeead@gmail.com', ' comment comment comment comment comment comment comment comment comment comment comment ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `image`, `category`) VALUES
(1, 'Html basics', 'this is a description text this is a description text this is a description text this is a description text this is a description text this is a description text', '', 'frontend'),
(2, 'php', 'this is a description text this is a description text this is a description text this is a description text this is a description text this is a description text', '', 'backend'),
(3, 'css course', 'this is a description text this is a description text this is a description text this is a description text', '', 'frontend'),
(4, 'ellllllllllllllllllllllll', '', '', ''),
(5, 'ellllllllllllllllllllllll', '', '', ''),
(6, 'ellllllllllllllllllllllll', '', '', 'frontend'),
(7, 'meead moh', '', '', 'frontend'),
(8, 'eeeeeeeeeeeeeeeeeee', 'vdfddddddddddddddddddd', '', 'frontend'),
(9, 'eeeeeeeeeeeeeeeeeee', 'vdfddddddddddddddddddd', '', 'frontend'),
(10, 'mohammed', 'vdfddddddddddddddddddd', '', 'frontend'),
(11, 'mohammed', 'vdfddddddddddddddddddd', '', 'frontend'),
(12, 'meead', '', '', ''),
(13, 'meead', 'vdfddddddddddddddddddd', '', 'backend'),
(14, 'meead', 'pokhhhhhhhhhhhhht', '', 'frontend'),
(15, 'meead', 'pokhhhhhhhhhhhhht', '', 'frontend'),
(16, 'aaa', 'pokhhhhhhhhhhhhht', '../courseimages/background.jpg', 'frontend'),
(17, 'aaa', 'pokhhhhhhhhhhhhht', '../courseimages/background.jpg', 'frontend'),
(18, 'text1', 'ttt', '../courseimages/code-programming-wallpaper-preview.jpg', 'frontend');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `courseid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `name`, `url`, `courseid`) VALUES
(7, 'ttyi', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, 'ahmed', 'hassan', '', '          message          message          message          message          message'),
(2, 'ahmed', 'mohammed', '', 'emailemailemailemailemailemail');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentid` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passward` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `firstname`, `lastname`, `email`, `passward`, `role`) VALUES
(1, 'meead', 'mohammed', 'meead123@gmail.com', '123', 0),
(2, 'meead', 'mohammed', 'mohammedemeead@gmail.com', '123', 0),
(3, 'sara', 'ahmed', 'sara123@gmail.com', '123', 0),
(4, 'suha', 'ali', 'suha@gmail.com', '123', 0),
(5, 'ahmed', 'tibin', 'ahmedtibin123@gmail.com', '123', 0),
(6, 'maab', 'mohammed', 'maab@gmail.com', '123', 0),
(7, 'mohy', 'mohammed', 'mohy@gmail.com', '123', 0),
(8, 'ahmed', 'hassan', 'ahmed1@gmail.com', '123', 0),
(9, 'aya', 'ali', 'ayaa@gmail.com', '123', 0),
(10, 'aaaa', 'aa', 'aaa@gmail.com', '123', 0),
(11, 'aa', 'aa', 'aa@gmail.com', '123', 0),
(12, 'mona', 'salah', 'mona@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



