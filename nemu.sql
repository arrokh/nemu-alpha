-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 03:01 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nemu`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

DROP TABLE IF EXISTS `api`;
CREATE TABLE IF NOT EXISTS `api` (
  `token` varchar(32) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_item`
--

DROP TABLE IF EXISTS `assignment_item`;
CREATE TABLE IF NOT EXISTS `assignment_item` (
  `id` int(10) NOT NULL,
  `id_course_chapters` int(10) NOT NULL,
  `order_course_chapters` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type_assignment` enum('ESSAY','MULTIPLE_CHOICES') NOT NULL,
  `e_question` text NOT NULL,
  `e_answer` text NOT NULL,
  `m_question_img` text NOT NULL,
  `m_question_text` text NOT NULL,
  `m_answer_a_img` text NOT NULL,
  `m_answer_a_text` text NOT NULL,
  `m_answer_b_img` text NOT NULL,
  `m_answer_b_text` text NOT NULL,
  `m_answer_c_img` text NOT NULL,
  `m_answer_c_text` text NOT NULL,
  `m_answer_d_img` text NOT NULL,
  `m_answer_d_text` text NOT NULL,
  `m_correct_answer` enum('A','B','C','D') NOT NULL,
  `score_true` int(3) NOT NULL,
  `score_false` int(3) NOT NULL DEFAULT '0',
  `feedback_true` text NOT NULL,
  `feedback_false` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_chapters`
--

DROP TABLE IF EXISTS `course_chapters`;
CREATE TABLE IF NOT EXISTS `course_chapters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_course` int(10) NOT NULL,
  `order_course` int(3) NOT NULL,
  `type` enum('LESSON','ASSIGNMENT') NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_data`
--

DROP TABLE IF EXISTS `course_data`;
CREATE TABLE IF NOT EXISTS `course_data` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img_url` text NOT NULL,
  `start_course` datetime NOT NULL,
  `end_course` datetime NOT NULL,
  `max_participants` int(5) NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
CREATE TABLE IF NOT EXISTS `exercises` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_course_chapters` int(10) NOT NULL,
  `order_course_chapters` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `theory_text` text NOT NULL,
  `theory_pdf` text NOT NULL,
  `theory_video` text NOT NULL,
  `practice_instruction` text NOT NULL,
  `practice_input` text NOT NULL,
  `practice_output` text NOT NULL,
  `score_true` int(3) NOT NULL DEFAULT '100',
  `score_false` int(3) NOT NULL DEFAULT '0',
  `feedback_true` text NOT NULL,
  `feedback_false` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `craeted_at` timestamp NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

DROP TABLE IF EXISTS `personal_data`;
CREATE TABLE IF NOT EXISTS `personal_data` (
  `username` varchar(25) NOT NULL,
  `full_name` int(11) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `id_privilege_data` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privilege_data`
--

DROP TABLE IF EXISTS `privilege_data`;
CREATE TABLE IF NOT EXISTS `privilege_data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `auth_email` varchar(32) NOT NULL,
  `status` enum('VERIFIED','NOT_VERIFIED') NOT NULL DEFAULT 'NOT_VERIFIED',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `auth_email`, `status`, `created_at`, `update_at`) VALUES
(3, 'default', 'alvin.ndsi@gmail.com', '2eb5f74f49734a56fcce5f6634171b5d', '276dd09d104ce152c9131459244e4a9a', 'NOT_VERIFIED', '2018-06-30 18:08:24', '2018-07-01 03:08:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
