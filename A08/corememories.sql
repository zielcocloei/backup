-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 05:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'loving1.png', ' A good daughter and sister, embracing the bonds of loyalty, care, and endless support.', 'F3C35F'),
(2, 1, 'loving2.png', 'A sweet partner, nurturing love with kindness and understanding, creating memories that last a lifetime.', 'F3C35F'),
(3, 1, 'loving3.png', 'A kind friend, offering a shoulder to lean on, laughter to share, and unwavering encouragement. ', 'F3C35F'),
(4, 2, 'ind1.png', 'Struggling to choose the right college course, balancing passion and practicality in the journey of self-discovery.', '85B8ED'),
(5, 2, 'ind2.png', 'Torn between desires and necessities, finding it hard to prioritize what truly matters.', '85B8ED'),
(6, 2, 'ind3.png', 'The everyday struggle of deciding what to eat—because everything looks delicious, yet nothing feels right.', '85B8ED'),
(7, 3, 'adv1.jpg', 'A brave seeker of the unknown, eager to uncover the world\'s hidden wonders and mysteries.', 'BE2ED6'),
(8, 3, 'adv2.png', 'A wanderer chasing horizons, driven by curiosity and the promise of what lies beyond.', 'BE2ED6'),
(9, 3, 'adv3.png', ' A pioneer carving new paths, breaking boundaries, and daring to tread where few have ventured.', 'BE2ED6'),
(10, 4, 'foodie1.png', 'A lover of diverse flavors, delighting in the unique tastes and culinary traditions from around the world.', '8BC664'),
(12, 4, 'foodie2.png', 'A creator of delicious dishes, blending ingredients with care and imagination to craft meals that bring joy.', '8BC664'),
(13, 4, 'foodie3.png', ' A connoisseur with a refined palate, savoring every bite and sharing thoughtful insights on food experiences.', '8BC664');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Loving', 'A loving and caring individual, always there to support others', 'I value deep connections and genuine relationships. I\'m the kind of person who listens attentively, offers comfort, and celebrates the joys of others. I find joy in nurturing relationships and creating a warm and loving environment for those around me.', 'FDFD96', 'joy.png', 'inactive'),
(2, 'Indecisive', 'A bit indecisive, often weighing options carefully.', 'I tend to overthink things, often finding it difficult to make decisions. I like to consider all the possibilities, even the most unlikely ones. I’m always seeking the best possible outcome, but the fear of making the wrong decision can sometimes hold me back.', '78A2CC', 'sad.png', 'inactive'),
(3, 'Adventurous', 'Adventurous and thrill-seeking, always up for a new challenge.', 'I have a constant itch to explore, a desire to push my limits, and a love for the unknown. I\'m always seeking out new experiences. I\'m not afraid to step outside of my comfort zone and embrace the unexpected.', 'B19CD9', 'fear.png', 'inactive'),
(4, 'Foodie', 'A passionate foodie, always on the lookout for the next culinary adventure.', 'I am always eager to try new flavors and cuisines. From street food to fine dining, I appreciate the artistry and passion that goes into every dish. I love cooking, experimenting with different ingredients, and sharing delicious meals with friends and family. ', 'B2FBA5', 'disgust.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
