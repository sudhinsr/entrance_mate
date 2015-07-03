-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 03:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `entrance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES
('user01', 'user01');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `question_id` int(3) NOT NULL,
  `answer` text NOT NULL,
  `c_answer` text NOT NULL,
  `flag` int(2) NOT NULL DEFAULT '0',
  `mark` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`no`, `user_id`, `question_id`, `answer`, `c_answer`, `flag`, `mark`) VALUES
(47, 10040, 1, 'Aniline', 'Benzamide', 0, -1),
(48, 10040, 2, 'amine', 'amine', 0, 4),
(49, 10040, 3, 'pepsin', 'celluloid', 0, -1);

-- --------------------------------------------------------

--
-- Table structure for table `mark_list`
--

CREATE TABLE IF NOT EXISTS `mark_list` (
  `user_id` bigint(5) NOT NULL,
  `mark1` int(2) NOT NULL,
  `mark2` int(2) NOT NULL,
  `mark3` int(2) NOT NULL,
  `sum` float NOT NULL,
  `time` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark_list`
--

INSERT INTO `mark_list` (`user_id`, `mark1`, `mark2`, `mark3`, `sum`, `time`) VALUES
(10040, 0, 0, 0, 2, 1427030987),
(10042, 2, 3, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` bigint(3) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `optionA` text NOT NULL,
  `optionB` text NOT NULL,
  `optionC` text NOT NULL,
  `optionD` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`) VALUES
(1, 'A nitrogen containing organic compound gave an oily liquid on heating with bromine and potassium hydroxide solution. On shaking the product with acetic anhydride, an antipyretic drug was obtained. The reactions indicate that the starting compound is:', 'Acetamide', 'Nitrobenzene', 'Aniline', 'Benzamide', 'Benzamide'),
(2, 'The silver salt of a fatty acid on refluxing with an alkyl halide gives an:\r\n', 'ether', 'amine', 'acid', 'ester', 'amine'),
(3, 'Pick out the one which does not belong to the family:', 'patyalin', 'lipase', 'pepsin', 'celluloid', 'celluloid'),
(4, 'Pick out the alkane which differs from the other members of the group:', '2 - methyl butane', '2,2- dimethyl butane', '2, 2 - dimethyl prop', 'Pentane', '2,2- dimethyl butane'),
(5, '56 g of nitrogen and 8 g of hydrogen gas are heated in a closed vessel. At equilibrium 34 g of ammonia are present. The equilibrium number of moles of nitrogen, hydrogen and ammonia are respectively:\r\n', '1,1,2', '2,1,2', '1,2,2', '2,2,1', '1,1,2'),
(6, 'In a galvanic cell, the electrons flow from: V \r\n', 'Anode to cathode thr', 'Cathode to anode thr', 'Anode to cathode thr', 'Cathode to anode thr', 'Anode to cathode thr'),
(7, 'On treating a mixture of two alkyl halides with sodium metal in dry ether, 2-methyl propane was obtained. The alkyl halide. are:', 'Chloromethane and Ch', 'Chloromethane and 1-', '2 - Chloromethane an', '2 - Chloromethane an', '2 - Chloromethane an'),
(8, 'Which of the following statements about benzyl chloride is incorrect?', 'It is a lachrymatory', 'It gives a white pre', 'It is less reactive ', 'It can be oxidised t', 'It is less reactive '),
(9, 'In the electrothermal process, the compound displaced by silica from calcium phosphate is:', 'Phosphorus', 'Phosphorus pentoxide', 'Calcium phosphide', 'Phosphine', 'Phosphorus pentoxide'),
(10, 'jnj', '45', '4', '2', '6', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(6) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10043 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(10040, 'Sudhin', 'Suresh', 'sudhin@in.com', 9072422272, 'e10adc3949ba59abbe56e057f20f883e'),
(10042, '123', '456', 'a@a.com', 123456789, 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mark_list`
--
ALTER TABLE `mark_list`
  ADD CONSTRAINT `mark_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
