-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2020-03-23 13:55:54
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- 表的结构 `11`
--

CREATE TABLE IF NOT EXISTS `11` (
  `id` int(20) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `number` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `11`
--

INSERT INTO `11` (`id`, `name`, `number`, `price`, `path`) VALUES
(100, 'JJ 林俊杰《圣所：WONDERLAND》世界巡回演唱会——上海站', 1, 1680, ' ../image/market/ticket.jpg'),
(102, 'Sanctuary World Tour 2.0 Just Follow Me Baseball T', 1, 200, ' ../image/market/sc3.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `stock`, `path`) VALUES
(0, '0', 0, 0, '0'),
(1, '乐行者_专辑', 200, 3000, '../image/album/1.jpg'),
(2, '江南_专辑', 200, 4995, '../image/album/2.jpg'),
(3, '编号89757_专辑', 200, 4998, '../image/album/3.jpg'),
(4, '曹操_专辑', 200, 4995, '../image/album/4.jpg'),
(5, '西界_专辑', 200, 5000, '../image/album/5.jpg'),
(6, 'JJ陆_专辑', 200, 5000, '../image/album/6.jpg'),
(7, '她说_专辑', 200, 5000, '../image/album/7.jpg'),
(8, '学不会_专辑', 200, 5000, '../image/album/8.jpg'),
(9, '因你而在_专辑', 200, 5000, '../image/album/13.jpg'),
(10, '新地球_专辑', 200, 5000, '../image/album/12.jfif'),
(11, '和自己对话_专辑', 200, 5000, '../image/album/14.jpg'),
(12, '不为谁而作的歌_专辑', 200, 5000, '../image/album/9.jpg'),
(14, '伟大的渺小_专辑', 200, 4974, '../image/album/11.jpg'),
(100, 'JJ 林俊杰《圣所：WONDERLAND》世界巡回演唱会——上海站', 1680, 9997, '../image/market/ticket.jpg'),
(101, 'Sanctuary World Tour2.0 Logo Tee 圣所2.0世界巡演圣所logoT恤', 200, 29998, '../image/market/sc2.jpg'),
(102, 'Sanctuary World Tour 2.0 Just Follow Me Baseball Tee 《圣所2.0》棒球T恤 军绿', 200, 29999, '../image/market/sc3.jpg'),
(103, 'Sanctuary World Tour 2.0 Bear 圣所熊朋友-布朗尼', 200, 59999, '../image/market/bear.jpg'),
(104, 'SanctuaryWorldTour2.0 Popsockets Grip 圣所2.0世界巡演手机支架', 100, 30000, '../image/market/phonecut.jpg'),
(105, 'Sanctuary World Tour 2.0 X’mas Bear 《圣所2.0》 圣所圣诞熊\r\n', 298, 30000, '../image/market/bear1.jpg'),
(106, 'Sanctuary World Tour 2.0 Quick Pocket 圣所2.0世界巡演随身背袋（PVC）', 229, 30000, '../image/market/sbag.jpg'),
(107, 'SANCTUARY World Tour 2.0 Hoodie《圣所2.0》连帽卫衣 黑色', 458, 30000, '../image/market/sc4.jpg'),
(108, 'Sanctuary World Tour 2.0 Sports Cap 圣所2.0世界巡演 运动帽', 200, 30000, '../image/market/sh.jpg'),
(200, 'SMG 纯色多袋大衣', 799, 300, '../image/market/c4.jpg'),
(201, 'SMG【限量】多袋连帽羽绒服', 849, 300, '../image/market/cloth1.jpg'),
(202, 'SMG V领短袖衬衫', 219, 300, '../image/market/c6.jpg'),
(203, 'SMG 拼接撞色羽绒服', 1139, 300, '../image/market/c7.jpg'),
(204, 'SMG 字母印花长款羽绒服', 1074, 3000, '../image/market/c3.jpg'),
(205, 'SMG 多袋灯芯绒休闲长裤', 419, 3000, '../image/market/c5.jpg'),
(300, '听见林俊杰 电影CD 1080p蓝光', 200, 90000, '../image/market/tjljj.jpg'),
(301, '记得 影像自传图书 ', 500, 90000, '../image/market/book1.jpg'),
(302, '1307周边挂绳', 50, 90000, '../image/market/gs.jpg'),
(303, '周边克罗地亚钥匙扣', 50, 90000, '../image/market/ysk.jpg'),
(304, '周边海报 挂式画报', 50, 90000, '../image/market/gl.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `clicknum` int(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `music`
--

INSERT INTO `music` (`name`, `clicknum`) VALUES
('Until The Day', 0),
('丹宁执着', 0),
('伟大的渺小', 100),
('剪云者', 0),
('四点四十四', 1),
('圣所', 56),
('小瓶子', 1),
('我继续', 1),
('穿越', 3),
('身为风帆', 1),
('黑夜问白天', 32);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `birthday`, `tel`, `email`) VALUES
(11, 'alice', '123456', 'LFJJ', '1998-12-18', '12345678910', '775326703@qq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
