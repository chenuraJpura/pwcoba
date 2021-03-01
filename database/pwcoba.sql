-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 12:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwcoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `pic_id` int(11) NOT NULL,
  `pic_src` varchar(100) DEFAULT NULL,
  `pic_alt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`pic_id`, `pic_src`, `pic_alt`) VALUES
(14, '14.jpg', 'science day 2019 '),
(15, '15.jpg', 'science day 2019'),
(16, '16.jpg', 'science day 2019'),
(17, '17.jpg', 'reuite'),
(18, '18.jpg', 'reuite'),
(19, '19.jpg', 'reuite '),
(20, '20.jpg', '1st day cambrians 2020'),
(21, '21.jpg', '1st day cambrians 2020'),
(22, '22.jpg', '1st day cambrians 2020'),
(23, '23.jpg', '1st day cambrians 2020'),
(24, '24.jpg', '1st day cambrians 2020'),
(25, '25.jpg', '1st day cambrians 2020');

-- --------------------------------------------------------

--
-- Table structure for table `imgtable`
--

CREATE TABLE `imgtable` (
  `mem_ID` int(11) UNSIGNED NOT NULL,
  `image` varchar(300) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgtable`
--

INSERT INTO `imgtable` (`mem_ID`, `image`) VALUES
(0, 'default.png'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, '20.jpg'),
(21, '21.jpg'),
(22, '22.jpg'),
(23, '23.jpg'),
(27, '27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `mem_ID` int(11) UNSIGNED NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mem_role` enum('root','admin','user') NOT NULL DEFAULT 'user',
  `c_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`mem_ID`, `mail`, `pass`, `mem_role`, `c_code`) VALUES
(17, 's.chenura8@localhost', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin', '138b3G'),
(19, 'udara99@localhost', 'd0a981d2c6df3acb27e68f343deb66fce06f3826', 'user', '272u2U'),
(20, 'hasranga@localhost', 'f21a44ce194e2a512dc742e1038011fb9ec5eb29', 'user', ''),
(21, 'priyashan@localhost', '704ae9308110392c2144508ca05f950a48e1a697', 'user', ''),
(22, 'pasan99@localhost', '8797d0ac4e9d876352a32a5896f1fa633356954a', 'user', ''),
(23, 'pasan.t@localhost', 'f5b8ff949c07ed44c59e883b5dfcc41e84078d10', 'user', ''),
(24, 'omal@localhost', '1bce7c1e9ac313d3d9ec5d9a6806c6182a62e680', 'user', ''),
(25, 'raveenga2@localhost', '9d7584756f701fa66a98ea0463d46fbe2c7c8e96', 'user', ''),
(26, 'avishka.roxx@localhost', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'user', ''),
(27, 'nanayakkara@localhost', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` varchar(600) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` enum('seen','n_seen') NOT NULL DEFAULT 'n_seen',
  `m_time` varchar(10) NOT NULL,
  `m_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_ID`, `name`, `message`, `email`, `state`, `m_time`, `m_date`) VALUES
(7, 'thenuka ', ' The code, text, PHP logo, and graphical elements on this website and the mirror websites (the \"Site\") are Copyright Â© 2001-2019 the PHP Group. All rights reserved.\r\n\r\nExcept as otherwise indicated else', 'thenuka@gmail.com', 'n_seen', '05:47:09pm', '8.12.2019'),
(8, 'savishka', ' The code, text, PHP logo, and graphical elements on this website and the mirror websites (the \"Site\") are Copyright Â© 2001-2019 the PHP Group. All rights reserved.\r\n\r\nExcept as otherwise indicated else', 'thenuka@gmail.com', 'seen', '05:48:00pm', '8.12.2019'),
(12, ' hasindu', ' The code, text, PHP logo, and graphical elements on this website and the mirror websites (the \"Site\") are Copyright Â© 2001-2019 the PHP Group. All rights reserved. Except as otherwise indicated else ', 's.chenura8@gmail.com', 'n_seen', '07:54:13pm', '12.1.2020'),
(13, 'ravindu', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed felis consectetur, ultrices purus ac, luctus quam. Cras dignissim metus quis condimentum pretium. Nulla eu dolor ipsum. Nulla', 'raveen@gmail.com', 'n_seen', '07:57:06pm', '12.1.2020');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(5) NOT NULL,
  `n_h` longtext NOT NULL,
  `n_d` longtext NOT NULL,
  `n-img` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_h`, `n_d`, `n-img`) VALUES
(1, 'The Annual Prize Giving of the year 2018', 'The Annual Prize Giving of the year 2018 of Prince of Wales\' College Moratuwa was held on 01st of November 2019.The Prize giving was organized to felicitate the students who excelled in the field of education for their alma mater in the year 2018.', '1.jpg'),
(2, 'Universo 2019\" the Annual Science Day', 'Universo 2019\" the Annual Science Day and Awards Ceremony of Prince of Wales\' College, Moratuwa was held on 04th of November 2019 at the Tissa Gunawaradhana hall. The Science day was organized to felicitate the students who performed well in \"Universo 2019\" the Quiz competition, which was held in parallel with â€œKumaru Hasaru Prathibaâ€, the Science and Innovative exhibition.', '2.jpg'),
(3, '\"Jubilation 2019\" the Annual Commerce Day', '\"Jubilation 2019\" the Annual Commerce Day of Prince of Wales\' College, Moratuwa was held on 30th of October 2019 at the Tissa Gunawaradhana hall. Students who performed well in \"Jubilation 2019\" commerce competition, which was held in the month of October 2019 were rewarded at the Ceremony.', '3.jpg'),
(5, 'Sadbhashana \'19, the Media Day1', 'Sadbhashana \'19, the Media Day and Awards Ceremony organized to crown the winners of the all island inter-school media competition conducted by the Prince of Wales\'s College, Moratuwa was concluded successfully on the 28th of October 2019 under the patronage of Dr.Dharmakeerthi Sri Ranjan ( Senior lecturer in mass media, Sri Palee Campus, University Of Colombo) at the S. de S. Jayasinghe Hall, Dehiwala.1', '5.jpg'),
(6, 'The Hockey Encounter \'19', 'The Hockey Encounter \'19 Was held on 04th of October 2019 at the astro turf Colombo.\r\nThe first match was played between the old boys of both schools where the old boys of Prince of Wales College Moratuwa registered a 2-1 victory over the old boys of Presidentâ€™s College Maharagama and the 02nd match was played between the U19 sides of both the schools where Prince of Wales College Moratuwa registered a 2-0 victory over Presidentâ€™s College Maharagama', '6.jpg'),
(11, '143rd Anniversary Celebrations 2019', '143rd anniversary celebrations of Prince of Wales College Moratuwa was held on 20th of September 2019 at the college premises.This was organized to celebrate the 143rd birthday of the school.', '11.png');

-- --------------------------------------------------------

--
-- Table structure for table `pwcobamem`
--

CREATE TABLE `pwcobamem` (
  `mem_ID` int(11) UNSIGNED NOT NULL,
  `mem_fName` varchar(50) NOT NULL,
  `mem_lName` varchar(50) DEFAULT NULL,
  `mem_eMail` varchar(50) DEFAULT NULL,
  `mem_4No` int(10) NOT NULL,
  `mem_DBA` date DEFAULT NULL,
  `mem_Age` int(2) DEFAULT NULL,
  `mem_BatchN` enum('2019 A/L','2018 A/L','2017 A/L','2016 A/L','2015 A/L','2014 A/L','2013 A/L','2012 A/L','2011 A/L','2010 A/L') NOT NULL,
  `mem_town` varchar(50) DEFAULT NULL,
  `mem_club` enum('Science/Maths Society','Commerce Society','Art Society','','','','') DEFAULT NULL,
  `mem_sports` enum('Cricket','Rugby','Basketball','Football','Chess','Table Tenis','Hocky') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwcobamem`
--

INSERT INTO `pwcobamem` (`mem_ID`, `mem_fName`, `mem_lName`, `mem_eMail`, `mem_4No`, `mem_DBA`, `mem_Age`, `mem_BatchN`, `mem_town`, `mem_club`, `mem_sports`) VALUES
(17, 'chenura', 'fernando', 's.chenura8@localhost', 725414247, '1999-05-14', 20, '2018 A/L', 'katubadda', 'Science/Maths Society', 'Chess'),
(19, 'udara', 'perera', 'udara99@localhost', 715968989, '1999-06-17', 20, '2018 A/L', 'katubadda', 'Science/Maths Society', 'Football'),
(20, 'hasaranga', 'dinujaya', 'hasranga@localhost', 728919454, '1999-01-12', 20, '2018 A/L', 'rawathawatha', 'Science/Maths Society', 'Cricket'),
(21, 'avishka', 'priyashan', 'priyashan@localhost', 729255696, '1999-11-08', 20, '2018 A/L', 'piliyandala', 'Science/Maths Society', 'Table Tenis'),
(22, 'pasan', 'ganidu ', 'pasan99@localhost', 716254545, '1999-04-08', 20, '2018 A/L', 'katubadda', 'Commerce Society', 'Hocky'),
(23, 'pasan', 'tharindu', 'pasan.t@localhost', 768890123, '2000-01-04', 19, '2018 A/L', 'rathmalana', 'Science/Maths Society', 'Basketball'),
(24, 'omal ', 'dananjaya', 'omal@localhost', 724748364, '1999-10-29', 20, '2018 A/L', 'piliyandala', 'Commerce Society', 'Rugby'),
(25, 'raveenga', 'fernando', 'raveenga2@localhost', 717892323, '1999-05-17', 20, '2018 A/L', 'panadura', 'Science/Maths Society', 'Cricket'),
(26, 'avishka', 'bandara', 'avishka.roxx@localhost', 712364545, '1999-03-11', 20, '2018 A/L', 'rawathawatha', 'Art Society', 'Rugby'),
(27, 'pasindu', 'nanayakkara', 'nanayakkara@localhost', 765895656, '1997-10-14', 23, '2016 A/L', 'moratuwa', 'Science/Maths Society', 'Rugby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `imgtable`
--
ALTER TABLE `imgtable`
  ADD PRIMARY KEY (`mem_ID`),
  ADD UNIQUE KEY `mem_ID` (`mem_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`mem_ID`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `mem_ID` (`mem_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`),
  ADD UNIQUE KEY `n-img` (`n-img`);

--
-- Indexes for table `pwcobamem`
--
ALTER TABLE `pwcobamem`
  ADD PRIMARY KEY (`mem_ID`),
  ADD UNIQUE KEY `mem_ID` (`mem_ID`),
  ADD UNIQUE KEY `mem_eMail` (`mem_eMail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `mem_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pwcobamem`
--
ALTER TABLE `pwcobamem`
  MODIFY `mem_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
