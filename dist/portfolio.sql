-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 06:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `minions`
--

CREATE TABLE `minions` (
  `employeeID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minions`
--

INSERT INTO `minions` (`employeeID`, `first_name`, `last_name`) VALUES
(1, 'Brad', 'Pitt'),
(2, 'Courage', 'TheDog'),
(3, 'Monster', 'Mash'),
(4, 'Kenny', 'Spenny'),
(5, 'Jimmy', 'Neutron'),
(6, 'Jimmy', 'Kimmel'),
(7, 'The', 'Sauce'),
(8, 'Orange', 'Juice'),
(9, 'Sir', 'Dewsky'),
(10, 'Benedict', 'Cutcumber'),
(11, 'Minee', 'Hanz'),
(12, 'Kalimba', 'Psy'),
(13, 'Notes', 'Mckenzie'),
(14, 'Fluffle', 'Corndog'),
(15, 'Cesar', 'Pizza'),
(16, 'Cobra', 'Stingy'),
(17, 'Smelly', 'Chap'),
(18, 'Dice', 'Sanchez'),
(19, 'Hulk', 'NotHogan'),
(20, 'Starship', 'Jefferson');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_email` varchar(255) NOT NULL,
  `visitor_sub` varchar(255) NOT NULL,
  `visitor_msg` varchar(255) NOT NULL,
  `visit_date` datetime NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `visitor_name`, `visitor_email`, `visitor_sub`, `visitor_msg`, `visit_date`, `employeeID`) VALUES
(1, 'John Stamos', 'JohnActualStamos@ayyyyy.com', 'sup', 'whats goin on here?', '2020-08-28 10:46:28', 1),
(2, 'Dustin Hoffman', 'TheDuster@FakeEmail.com', 'yo', 'whats goin on over there?', '2020-08-28 10:46:28', 1),
(3, 'Wendy FastFood', 'SquarePattys@thestoreplace.com', 'leave', 'No I wont tweet you', '2020-08-28 10:46:28', 1),
(4, 'Kanye Best', 'Kanye@Kanye.com', 'kanye', 'No I wont cover your song', '2020-08-28 10:46:28', 1),
(5, 'Alucard Transylvania', 'NotAVampireIPromise@ieatpeople.net', 'please?', 'Wheres the sandwich you owe me?', '2020-08-28 10:46:28', 1),
(6, 'Cerberus Doggo', 'DemonDoggo@Styx.com', 'Bark', 'Bark', '2020-08-28 10:46:28', 1),
(7, 'Kaka KarrotCake', 'SuperSand@AlienBoi.com', 'Fight me', 'Wanna tussle homie?', '2020-08-28 10:46:28', 1),
(8, 'Turkey Sandwich', 'ImSoHungry@Sandwich.com', 'Im Starving', 'Seriously Im really hungry, this isnt a joke anymore', '2020-08-28 10:46:28', 1),
(9, 'WelcomeTo Applebees', 'ApplebeesOfficial@Applebees.net', 'hungry?', 'Want some steak and shrimp?', '2020-08-28 10:46:28', 1),
(10, 'Arbys Maybe', 'WeHaveTheMeats@theMeats.com', 'Eat here', 'Why are you talking to wendys?', '2020-08-28 10:46:28', 1),
(11, 'Ronald Macdonald', 'ChickenMacnugget@hungry.net', 'No eat here', 'We have dipping sauce', '2020-08-28 10:46:28', 1),
(12, 'Chikn Filet', 'Chikfilet@chikn.net', 'Chicken', 'Naw bro we got the better sauce', '2020-08-28 10:46:28', 1),
(13, 'Taco BellMan', 'BajaBlast@Taco.com', 'Tacos bruh', 'Naw man you want tacos', '2020-08-28 10:46:28', 1),
(14, 'Pizza Hut', 'CheezePizza@pizzahut.com', 'PIZZA', 'GET A PIZZA WITHOUT PINEAPPLE', '2020-08-28 10:46:28', 1),
(15, 'Herbert TheMovie', 'AnActualCAr@vroom.com', 'Vroom', 'VroomVroom?', '2020-08-28 10:46:28', 1),
(16, 'Stomach Acid', 'Starving4real@helpme.com', 'I hear it', 'My chair is vibrating...', '2020-08-28 10:46:28', 1),
(17, 'Buffalo Wings', 'GarlicParmesian@Buffalo.com', 'Wings', 'Wings sound so good right now', '2020-08-28 10:46:28', 1),
(18, 'Squanchie Squancher', 'TheSquanchisRealm8@Dachacha.com', 'Hey buddy', 'You hungry?', '2020-08-28 10:46:28', 1),
(19, 'Baby Yoda', 'RealAntagonist@StartheWar.com', 'gogoo', 'Gaa Gaa', '2020-08-28 10:46:28', 1),
(20, 'Rick Romano', 'MXCHost@mxc.com', 'Come back to us', 'Finally one that isnt food related', '2020-08-28 10:46:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minions`
--
ALTER TABLE `minions`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `employeeID` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minions`
--
ALTER TABLE `minions`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `minions` (`employeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

use portfolio;
GRANT SELECT, INSERT, UPDATE, DELETE
ON portfolio.*
TO port_user
IDENTIFIED by 'Pa$$w0rd';