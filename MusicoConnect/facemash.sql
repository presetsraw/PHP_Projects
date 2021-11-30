-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 08:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musicosocialize_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sahil and shivam', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `alumni_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(15) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`alumni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE IF NOT EXISTS `bulletin` (
  `bulletin_id` int(11) NOT NULL,
  `what` varchar(1000) NOT NULL,
  `who` varchar(1000) NOT NULL,
  `when` varchar(100) NOT NULL,
  `where` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`bulletin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event`
--

CREATE TABLE IF NOT EXISTS `calendar_event` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `event` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `day` tinyint(2) NOT NULL,
  `month` tinyint(2) NOT NULL,
  `year` int(4) NOT NULL,
  `time_from` varchar(10) NOT NULL,
  `time_until` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_users`
--

CREATE TABLE IF NOT EXISTS `calendar_users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `username`, `recipient`, `message`, `status`, `time`) VALUES
(39, 'parv123', 'parv', 'how are you', 'unread', '2014-11-16 06:51:22'),
(38, 'parv123', 'parv', 'hi ', 'unread', '2014-11-16 06:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `EventInput` varchar(250) NOT NULL,
  `datepicker` varchar(250) NOT NULL,
  `where_text` varchar(250) NOT NULL,
  `WhoInvited` varchar(250) NOT NULL,
  `users_ip` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(25) NOT NULL,
  `id_no` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `course` text NOT NULL,
  `gender` varchar(25) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `title` mediumtext NOT NULL,
  `content` longtext NOT NULL,
  `authors_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_reply`
--

CREATE TABLE IF NOT EXISTS `forum_reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` longtext NOT NULL,
  `poster_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `friend` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_added` varchar(50) NOT NULL,
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friend_id`, `username`, `friend`, `status`, `date_added`) VALUES
(46, 'paras', 'megha', 'accepted', '1408186128'),
(47, 'paras', 'parv', 'accepted', '1408186161'),
(48, 'megha', 'parv', 'accepted', '1408205128'),
(49, 'YASH', 'megha', 'accepted', '1408357609'),
(50, 'parv', 'Paras', 'requesting', '1408383721'),
(51, 'parv', 'yash', 'requesting', '1408386800'),
(52, 'parvn', 'megha', 'accepted', '1410334141'),
(53, 'parv123', 'nancy', 'requesting', '1415110396'),
(54, 'parv123', 'parv', 'accepted', '1415110409'),
(55, 'vrinda', 'parv123', 'requesting', '1416465139'),
(56, 'parv', 'vrinda', 'requesting', '1416466386');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sent` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `b_month` varchar(20) NOT NULL,
  `b_day` varchar(20) NOT NULL,
  `b_year` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `quote` text NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `high_school` varchar(100) NOT NULL,
  `aboutme` text NOT NULL,
  `image` mediumtext NOT NULL,
  `type` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yr_sec` varchar(100) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `id_no` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `confirmation` varchar(5) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `password`, `firstname`, `lastname`, `address`, `contact_no`, `email`, `birthdate`, `b_month`, `b_day`, `b_year`, `gender`, `relationship`, `interest`, `quote`, `hometown`, `college`, `high_school`, `aboutme`, `image`, `type`, `course`, `yr_sec`, `batch`, `id_no`, `status`, `confirmation`) VALUES
(77, 'parv', '123456', 'parv', 'singh', 'A-16 kalkaji', '', 'psingh@gmail.com', 'January/10/1993', 'January', '10', '1993', 'Male', '', '', 'hello', '', '', '', '', 'uploads/IMG-20140613-WA0017.jpg', 'Member', 'India', 'qwerty', '', '15', '', '1'),
(78, 'yash', 'qwerty123', 'yash', 'singh', 'L-2 / 104 b dDA FLATS KALKAJI', '', 'yash@gmail.com', 'January/1/1998', 'January', '1', '1998', 'Male', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', 'qwerty', '', '123', '', '1'),
(75, 'Paras', 'pa123', 'Paras', 'Roy', 'delhi', '', 'pa@gmail.com', 'February/6/2006', 'February', '6', '2006', 'Male', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'Iceland', 'dfd', '', '11', '', '1'),
(79, 'megha', '123456', 'megha', 'sharma', 'L-2 / 104 b dDA FLATS KALKAJI', '', 'megha@yahoo.com', 'January/4/1993', 'January', '4', '1993', 'Female', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', 'qwerty', '', '123456', '', '1'),
(80, 'parvn', '123456', 'parv', 'nautiyal', 'A-16 kalkaji', '123456789', 'parv@gmail.com', 'March/4/2005', 'March', '4', '2005', 'Male', 'Single', 'MUSIC', 'cj', 'new delhi', 'sGTBIMIT', '', 'i luv to play guitar', 'uploads/parv.jpg', 'Member', 'India', 'NOTHING', '', '1234567', '', '1'),
(81, 'nancy', '123456', 'nancy ', 'singh', 'L-2 / 104 b dDA FLATS KALKAJI', '', 'nancy@yahoo.com', 'April/18/1993', 'April', '18', '1993', 'Female', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', '123456', '', '1881993', '', '1'),
(82, 'parv123', '987654', 'parv', 'nautiyal', 'kalkaji', '', 'parvnautiyal@yahoo.com', 'April/10/1993', 'April', '10', '1993', 'Male', '', '', '', '', '', '', '', 'uploads/parv 1.jpg', 'Member', 'India', 'nothing', '', '15654', '', '1'),
(83, 'noddyisbest', 'noddy', 'Prashant', 'Naudiyal', 'FCUK', '', 'noddyisbest@gmail.com', 'October/5/1995', 'October', '5', '1995', 'Male', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', 'FCUK', '', '1012', '', '1'),
(84, 'vrinda', '123456', 'vrinda', 'vs', 'k.g', '', 'vrinda@gmail.com', 'June/6/1994', 'June', '6', '1994', 'Female', '', '', 'heloo', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', 'noth', '', '9875', '', '1'),
(85, 'parv10', '123456', 'parv', 'singh nautiyal', 'kalkaji', '', 'parvyahoo.com', 'April/10/1993', 'April', '10', '1993', 'Male', '', '', '', '', '', '', '', 'uploads/propic.jpg', 'Member', 'India', 'anything', '', '9785', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `recipient` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_sent` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `recipient`, `content`, `status`, `date_sent`) VALUES
(22, 'parv', 'megha', 'hello\r\n', 'unread', '1408353491'),
(23, 'parv', 'megha', 'hello\r\n', 'unread', '1408353880'),
(24, 'parv', '-Select Friend-', '', 'unread', '08/18/2014'),
(25, 'parv', 'paras', 'helloo ', 'unread', '08/18/2014'),
(27, 'parv', '-Select Friend-', 'uiltuyfgkjh', 'unread', '11/14/2014'),
(28, 'parv', 'paras', 'hello', 'unread', '11/20/2014');

-- --------------------------------------------------------

--
-- Table structure for table `photoscomment`
--

CREATE TABLE IF NOT EXISTS `photoscomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `commentby` varchar(100) NOT NULL,
  `PIC` varchar(30) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `date_comment` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `friend` varchar(50) NOT NULL,
  `friend_firstname` varchar(50) NOT NULL,
  `friend_lastname` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `username`, `firstname`, `lastname`, `picture`, `friend`, `friend_firstname`, `friend_lastname`, `content`, `date_created`) VALUES
(40, 'megha', 'megha', 'sharma', 'uploads/kristen.jpg', 'megha', 'megha', 'sharma', 'hello', '1408348123'),
(41, 'parvn', 'parv', 'nautiyal', 'uploads/parv.jpg', 'parvn', 'parv', 'nautiyal', 'heellooo mam', '1414348641'),
(42, 'parvn', 'parv', 'nautiyal', 'uploads/parv.jpg', 'parvn', 'parv', 'nautiyal', 'yo', '1414348653'),
(43, 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 'parv', 'parv', 'singh', 'today is the good day', '1414987722'),
(44, 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 'parv', 'parv', 'singh', 'awsme musam..!!', '1414987738'),
(45, 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 'parv', 'parv', 'singh', 'tomorrow will the competition for music at kalkaji', '1415003247'),
(47, 'parv123', 'parv', 'nautiyal', 'uploads/parv 1.jpg', 'parv123', 'parv', 'nautiyal', 'hello', '1415163940'),
(48, 'vrinda', 'vrinda', 'vs', 'uploads/propic.jpg', 'vrinda', 'vrinda', 'vs', 'awesome day', '1416465108'),
(49, 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 'parv', 'parv', 'singh', 'good day', '1416466346');

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE IF NOT EXISTS `postcomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `commentby` varchar(80) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `post_id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `postcomment`
--

INSERT INTO `postcomment` (`comment_id`, `content`, `commentby`, `firstname`, `lastname`, `picture`, `post_id`, `date_created`) VALUES
(63, 'hello', 'megha', 'megha', 'sharma', 'uploads/kristen.jpg', 40, '1408352171'),
(67, '', 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 45, '1416374624'),
(66, 'At what time', 'parv123', 'parv', 'nautiyal', 'uploads/parv 1.jpg', 45, '1416120732'),
(68, 'kalkaji', 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 45, '1416374635'),
(69, 'hello', 'parv', 'parv', 'singh', 'uploads/IMG-20140613-WA0017.jpg', 49, '1416466358');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_no` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_no` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `course` varchar(50) NOT NULL,
  `yr_sec` varchar(25) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=325 ;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `status` text CHARACTER SET latin1 NOT NULL,
  `image` mediumtext CHARACTER SET latin1 NOT NULL,
  `friend` text CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`update_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `member_id`, `status`, `image`, `friend`, `date`) VALUES
(26, 74, 'are now friends with ', '', 'Paras Roy.', '08/16/2014'),
(35, 76, 'changed profile picture.', 'uploads/kristen.jpg', '', '08/17/2014'),
(28, 73, 'are now friends with ', '', 'Paras Roy.', '08/16/2014'),
(37, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(36, 76, 'just uploaded a photo.', '', '', '08/17/2014'),
(31, 74, 'just uploaded a photo.', '', '', '08/17/2014'),
(32, 74, 'just uploaded a photo.', '', '', '08/17/2014'),
(33, 74, 'just uploaded a photo.', '', '', '08/17/2014'),
(34, 74, 'just uploaded a photo.', '', '', '08/17/2014'),
(38, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(39, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(40, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(41, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(42, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(43, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(44, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(45, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(46, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(47, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(48, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(49, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(50, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(51, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(52, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(53, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(54, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(55, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(56, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(57, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(58, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(59, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(60, 76, 'commented on ', '', 'megha sharma''s post', '08/18/2014'),
(61, 77, 'changed profile picture.', 'uploads/998468_667898976594826_115611069_n.jpg', '', '08/18/2014'),
(62, 78, 'just uploaded a photo.', '', '', '08/18/2014'),
(63, 76, 'are now friends with ', '', 'yash singh.', '08/18/2014'),
(64, 77, 'changed profile picture.', 'uploads/IMG-20140613-WA0017.jpg', '', '08/18/2014'),
(65, 79, 'are now friends with ', '', 'parv nautiyal.', '09/10/2014'),
(66, 80, 'changed profile picture.', 'uploads/parv.jpg', '', '10/17/2014'),
(67, 77, 'just uploaded a photo.', '', '', '11/04/2014'),
(68, 77, 'are now friends with ', '', 'parv nautiyal.', '11/04/2014'),
(69, 82, 'changed profile picture.', 'uploads/parv 1.jpg', '', '11/05/2014'),
(70, 77, 'commented on ', '', 'parv singh''s post', '11/20/2014');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image_name` varchar(20) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`upload_id`, `username`, `image`, `image_name`, `date_created`) VALUES
(31, 'parv', 'uploaded_photos/parv 1.jpg', '', '1415108699'),
(30, 'YASH', 'uploaded_photos/IMG_20140605_195427.jpg', '', '1408357551');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`session_id`, `username`, `password`, `created_date`, `modified_date`, `image`) VALUES
(167, 'parv', '123456', '2014-11-20 08:32:31', '0000-00-00 00:00:00', 'uploads/IMG-20140613-WA0017.jpg'),
(157, 'parv', 'ENTER YOUR PASSWORD', '2014-11-19 14:46:28', '0000-00-00 00:00:00', ''),
(144, 'parv', 'ENTER YOUR PASSWORD', '2014-11-19 08:51:00', '0000-00-00 00:00:00', ''),
(112, 'parvn', '123456', '2014-10-26 18:34:13', '0000-00-00 00:00:00', 'uploads/parv.jpg'),
(156, 'parv', 'ENTER YOUR PASSWORD', '2014-11-19 14:42:14', '0000-00-00 00:00:00', ''),
(162, 'parv', '1234556', '2014-11-20 06:34:47', '0000-00-00 00:00:00', ''),
(90, 'YASH', 'QWERTY123', '2014-08-18 10:25:09', '0000-00-00 00:00:00', 'uploads/propic.jpg'),
(153, 'ENTER USERNAME', 'ENTER YOUR PASSWORD', '2014-11-19 13:15:00', '0000-00-00 00:00:00', ''),
(111, 'parvn', '123456', '2014-10-19 06:06:21', '0000-00-00 00:00:00', 'uploads/parv.jpg'),
(149, '', 'ENTER YOUR PASSWORD', '2014-11-19 13:09:00', '0000-00-00 00:00:00', ''),
(150, '', 'ENTER YOUR PASSWORD', '2014-11-19 13:09:13', '0000-00-00 00:00:00', ''),
(147, 'asds', 'ENTER YOUR PASSWORD', '2014-11-19 13:08:08', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
