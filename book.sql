-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018-12-27 00:36:30
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- 表的结构 `lyb`
--

CREATE TABLE `lyb` (
  `ID` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `content` text,
  `author` varchar(40) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `addtime` datetime DEFAULT CURRENT_TIMESTAMP,
  `sex` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lyb`
--

INSERT INTO `lyb` (`ID`, `title`, `content`, `author`, `Email`, `IP`, `addtime`, `sex`) VALUES
(57, '佳林', '佳林佳林佳林佳林佳林佳林佳林测试测试', '佳林', '222@163.com', '127.0.0.1', '2018-12-11 21:16:10', NULL),
(74, '', '', '', '', '::1', '2018-12-14 15:31:50', NULL),
(75, '', '山东省都是', '', '', '::1', '2018-12-14 15:31:53', NULL),
(79, '', '3人2', '', '', '::1', '2018-12-14 15:32:07', NULL),
(80, '', '3人的', '', '', '::1', '2018-12-14 15:32:12', NULL),
(81, '', '二万人魏汝稳热望', '', '', '::1', '2018-12-14 15:32:15', NULL),
(82, '', 'erwtf ew ', '', '', '::1', '2018-12-14 17:04:40', NULL),
(83, '', 'sdf s ', '', '', '::1', '2018-12-14 17:04:42', NULL),
(84, '', '佳林', '', '', '::1', '2018-12-14 22:08:22', NULL),
(85, '佳林', '佳林测试', '佳林佳林', '222', '::1', '2018-12-15 20:44:57', NULL),
(86, '', '', '', '', '::1', '2018-12-15 20:58:28', NULL),
(87, 'rgfd ', 'df ', 'fdgdf ', 'fdgdf ', '::1', '2018-12-15 22:32:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lyb`
--
ALTER TABLE `lyb`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lyb`
--
ALTER TABLE `lyb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
