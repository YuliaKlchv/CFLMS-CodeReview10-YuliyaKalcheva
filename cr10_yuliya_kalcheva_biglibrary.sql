-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 09:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_yuliya_kalcheva_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_yuliya_kalcheva_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_yuliya_kalcheva_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `author_surname` varchar(55) DEFAULT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `media_title` varchar(55) DEFAULT NULL,
  `media_type` enum('cd','dvd','book','others') DEFAULT NULL,
  `availability` enum('free','reserved') DEFAULT NULL,
  `publisher` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `med_img` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `ISBN`, `author_surname`, `author_first_name`, `media_title`, `media_type`, `availability`, `publisher`, `publish_date`, `description`, `med_img`) VALUES
(1, 123567890, 'Orwell', 'George', '1984', 'book', 'reserved', 'newpublish', '2007-10-19', 'Utopia', 'images/1984.jpg'),
(2, 234567891, 'Ellish', 'Bilie', 'Hey World', 'cd', 'free', 'Sony Music', '2020-01-02', 'Pop', 'images/bili.jpg'),
(3, 345678912, 'Kurt', 'Murat', 'Calculus ', 'dvd', 'free', 'Fen Publisher', '2018-11-02', 'Maths', 'images/calc.jpg'),
(4, 456789124, 'Group', 'Collective', 'English Grammer', '', 'free', 'MK Publications', '2017-12-09', 'English', 'images/English.jpg'),
(5, 567891234, 'Sermutlu', 'Emre', 'Linear Algebra', 'book', 'free', 'Editions', '2020-01-02', 'Maths', 'images/lin.jpg'),
(6, 678912345, 'Metallica', 'NULL', 'One', 'cd', 'free', 'Sony Music', '2001-01-02', 'HRock', 'images/met.jpg'),
(7, 2147483647, 'Calladi', 'Carla', 'Pinochio', 'book', 'free', '4Kids', '2020-01-02', 'Spanish', 'images/pin.jpg'),
(8, 789123456, 'Tzu', 'Sun', 'The Art of War', 'book', 'reserved', 'Dragon Publisher', '1998-08-08', 'Crime', 'images/sun.jpg'),
(9, 891234567, 'Jackson', 'Peter', 'Lord of the Rings', 'dvd', 'free', 'New Line Cinema', '2001-04-07', 'Fantasy Movie', 'images/lord.jpg'),
(10, 891234567, 'Harris', 'Robert', 'Enigma', 'book', 'free', 'Ballantine Book', '1996-09-01', 'Suspense', 'images/enigma.jpg'),
(11, 912345678, 'Lady Gaga', 'Bradley Cooper', 'A Star is Born Sountrack', 'cd', 'reserved', 'Sony Music', '2018-10-08', 'music', 'images/star.jpg'),
(12, 345678912, 'ATATURK', 'Mustafa Kemal', 'Nutuk', 'book', 'free', 'Savas Publisher', '2005-03-13', 'Educational', 'images/nutuk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register_id` int(11) NOT NULL,
  `register_date` date DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `fk_media_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(55) DEFAULT NULL,
  `userEmail` varchar(55) DEFAULT NULL,
  `userPass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `fk_media_id` (`fk_media_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`fk_media_id`) REFERENCES `media` (`media_id`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
