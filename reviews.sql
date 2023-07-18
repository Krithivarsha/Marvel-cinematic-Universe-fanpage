-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 06:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `pname` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`pname`, `url`) VALUES
('Agent Carter', 'http://localhost/mcuwiki/ac.jpg'),
('Agents of S.H.I.E.L.D.', 'http://localhost/mcuwiki/aos.jpg'),
('Avengers: Age of Ultron', 'http://localhost/mcuwiki/avng2.jpg'),
('Black Widow', 'http://localhost/mcuwiki/bw.jpg'),
('Captain America', 'http://localhost/mcuwiki/ca1.jpg'),
('Captain America: The Civil War', 'http://localhost/mcuwiki/ca2.jpg'),
('Captain America: The Winter Soldier', 'http://localhost/mcuwiki/ca1.jpg'),
('Doctor Strange', 'http://localhost/mcuwiki/dr1.jpg'),
('Doctor Strange: In the Multiverse of Madness', 'http://localhost/mcuwiki/dr2.jpg'),
('Eternals', 'http://localhost/mcuwiki/eter.jpeg'),
('Guardians of the Galaxy', 'http://localhost/mcuwiki/gotg1.jpg'),
('Guardians of the Galaxy 2', 'http://localhost/mcuwiki/gotg2.jpg'),
('Iron Man 1', 'http://localhost/mcuwiki/im1.png'),
('Iron Man 2', 'http://localhost/mcuwiki/im2.jpg'),
('Iron Man 3', 'http://localhost/mcuwiki/im3.jpg'),
('Loki', 'http://localhost/mcuwiki/loki.jpg'),
('Spiderman: Homecoming', 'http://localhost/mcuwiki/sm1.jpg'),
('Spiderman: No Way Home', 'http://localhost/mcuwiki/sm3.jpg'),
('The Avengers', 'http://localhost/mcuwiki/avng1.jpg'),
('The Falcon and The Winter Soldier', 'http://localhost/mcuwiki/faws.jpg'),
('Thor', 'http://localhost/mcuwiki/thor1.jpg'),
('Thor: Dark World', 'http://localhost/mcuwiki/thor2.jpg'),
('Thor: Ragnarok', 'http://localhost/mcuwiki/thor3.jpg'),
('Wanda Vision', 'http://localhost/mcuwiki/wv.png'),
('What If...?', 'http://localhost/mcuwiki/whatif.webp');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `category` varchar(10) NOT NULL,
  `phase` varchar(1) DEFAULT NULL,
  `tvshow` varchar(100) NOT NULL,
  `msname` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` longtext DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `email`, `category`, `phase`, `tvshow`, `msname`, `rating`, `comment`, `time`) VALUES
(25, '', 'fake@fake.com', 'TV Shows', '', 'Disney+ series', 'Loki', 5, 'Loki is literally the best thing Marvel has ever made. Everything in it is AWESOME especially Tom Hiddleston(of course). Im really looking forward to the upcoming seasons.', '2022-06-26 17:56:00'),
(26, 'Harry', 'fake@fake.com', 'TV Shows', '', 'Marvel Heroes', 'Agents of S.H.I.E.L.D.', 3, 'It isnt my favorite series ever but still watchable.', '2022-06-26 18:06:00'),
(29, 'Cal', 'fake@fake.com', 'Movies', '3', '', 'Spiderman: Homecoming', 5, 'Spiderman is backkkkkk. Really loved this new take on spiderman comics and the casting is PERFECT! Im really looking forward to the upcoming films.', '2022-06-26 18:16:13'),
(31, '', 'ajlatha@gmail.com', 'TV Shows', '', 'Disney+ series', 'What If...?', 4, 'This series is everything!!', '2022-06-26 18:39:59'),
(33, 'Izzy', 'fake@fake.com', 'Movies', '2', '', 'Guardians of the Galaxy', 4, 'The Guardians of the Galaxy squad just makes eveything a lot better. The movie was hilarious and conveyed a great message. It would be really great to see this squad again.', '2022-07-01 17:33:00'),
(34, 'Magnus', 'glitterandsprinkles@magic.com', 'TV Shows', '', 'Disney+ series', 'The Falcon and The Winter Soldier', 5, 'One word to describe this series: EXTRAORDINARY! \r\nSam and Bucky duo is literally the best. ', '2022-07-02 07:07:24'),
(35, 'Jace', 'jacewhatever@shadowhunters.com', 'Movies', '3', '', 'Doctor Strange', 5, 'BEST MOVIE EVER! ', '2022-07-02 07:11:01'),
(36, 'Clary', 'clarywhatever@shadowhunters.com', 'Movies', '4', '', 'Eternals', 2, 'Only movie with more family drama than our family but the cast was awesome though.', '2022-07-02 07:12:42'),
(83, 'Izzy', 'ajlatha@gmail.com', 'Movies', '1', '', 'Iron Man 1', 4, 'A good beginning to the Iron Man series.', '2022-07-02 14:02:32'),
(84, 'Jake', 'jake@fake.com', 'Movies', '1', '', 'Iron Man 1', 5, 'Iron Man 1 is the best movie ever and no one can change my mind.', '2022-07-02 14:11:26'),
(86, 'Bella', 'ajlatha@gmail.com', 'Movies', '1', '', 'Iron Man 2', 3, 'Stupid movie', '2022-07-02 15:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subscribe` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`, `subscribe`) VALUES
(9, 'Clary', 'claryfray@gmail.com', 'on'),
(10, 'j', 'dfrfegf@g.com', ''),
(11, 'Jace', 'jace@whatever.com', 'on'),
(12, 'Clary', 'fake@fake.com', 'on'),
(13, 'Clary', 'dsfs@fds.cdsf', ''),
(14, 'Bex', 'gsf@dsff.fd', ''),
(15, 'Janet', 'ajlatha@gmail.com', ''),
(16, 'Janet', 'dfrfegf@g.com', 'on'),
(17, 'fe', 'gsf@dsff.fd', 'on'),
(18, 'Janet', 'ajlatha@gmail.com', 'on'),
(19, 'jiii', 'hi@j.com', 'on'),
(20, 'janet', 'hi@j.com', 'on'),
(21, 'Stupid', 'stupid@gmail.com', ''),
(22, 'Janet', 'dfrfegf@g.com', 'on'),
(23, 'Janet', 'dsfs@fds.cdsf', 'on'),
(24, 'Clary', 'claryfray@gmail.com', 'on'),
(25, 'Clary', 'claryfray@gmail.com', ''),
(26, 'Janet', 'ajlatha@gmail.com', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`pname`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `msname` (`msname`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_posters_pname` FOREIGN KEY (`msname`) REFERENCES `posters` (`pname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
