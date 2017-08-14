-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 09:42 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`sn`, `name`, `email`, `message`) VALUES
(1, 'Akky', 'akky@gmail.com', 'Hey, your website is very user friendly.'),
(3, 'akira', 'akira@gmail.com', 'I want to enroll into this insititute.'),
(4, 'vikesh', 'vikesh@gmail.com', 'I leraned to play guitar by this website only. Thanku :)'),
(2, 'Vikesh', 'vickxy@gmail.com', 'Wow!! I really like your website.'),
(5, 'Arjoo', 'arjoo@gmail.com', 'Can you please give me some more information regarding your website.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(5, 'vikesh', 'yadav', 'vikesh@gmail.com', '$2y$10$bUs17fqMMNzhE9dzjMaCteQGu0Z9tX6kZCE7w0i9/8BjickIx9QDy', '9c82c7143c102b71c593d98d96093fde', 1),
(4, 'a', 'k', 'ak@gmail.com', '$2y$10$UsXJNg4rgyd17dKiENpN5e7WSzyKyLtOH5tHR5j8SURrQzUI8PV4a', '9232fe81225bcaef853ae32870a2b0fe', 1),
(1, 'as', 'as', 'as@gmail.com', '$2y$10$htRc6WrOQvllQDtsa34E9urjc.5FQ8aQmT1fVOgYznYR2T9JNmySq', '5e9f92a01c986bafcabbafd145520b13', 1),
(2, 'Aakanksha', 'Kashyap', 'kr.aakanksha19@gmail.com', '$2y$10$UI.2sScbpzknN.8jGYLsluPBLIUnJ8h/bMEr2JUwTisQJtucoYuV2', '3a066bda8c96b9478bb0512f0a43028c', 1),
(3, 'admin', 'admin', 'admin@gmail.com', '$2y$10$qhp4V5gcP2BSKW4e2zmoI.akZ7MZ4fxv19Q2.YAqMB024j7writQ6', '9232fe81225bcaef853ae32870a2b0fe', 1),
(11, 'v', 'y', 'vy@gmail.com', '$2y$10$ayztzR0JTsqQ8kD1URgEOe.x3Y/sZFLetOEPwAIeSrg0L12QZv3JG', 'b53b3a3d6ab90ce0268229151c9bde11', 1),
(12, 'a', 'a', 'aa@gmail.com', '$2y$10$UXmcgJOlLG3lnboTQHoklOhfMVapWIi/fYhDFmI5JcaHHk.SI53Lm', '5ef698cd9fe650923ea331c15af3b160', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `sn` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`sn`, `title`, `link`, `type`) VALUES
(1, 'chahun main ya naa', '1.mp4', 'guitar'),
(13, '', '', ''),
(14, '', '', ''),
(2, 'mere nishan', '2.mp4\r\n', 'guitar'),
(3, 'milne hain mujhse aayi', '3.mp4\r\n', 'guitar'),
(4, 'ae dil hai mushkil', '4.mp4\r\n', 'piano'),
(5, 'kal ho na ho', '5.mp4', 'piano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
