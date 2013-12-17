
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2013 at 04:06 PM
-- Server version: 5.1.58
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a4613277_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `pageUpdateTimes`
--

CREATE TABLE IF NOT EXISTS `pageUpdateTimes` (
  `page` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `updateTime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pageUpdateTimes`
--

INSERT INTO `pageUpdateTimes` VALUES('index', '2013-10-27 14:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `photoLinks`
--

CREATE TABLE IF NOT EXISTS `photoLinks` (
  `caption` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `photoLinks`
--

INSERT INTO `photoLinks` VALUES('PennApps Hackathon.', 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-ash4/774632_10152420533930258_1669267606_o.jpg', '2013-12-13 22:56:13');
INSERT INTO `photoLinks` VALUES('UCLA vs Cal 2013 Game.  38-10 Bruins, br', 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-prn2/1397758_10200898056673839_497850230_o.jpg', '2013-12-13 22:56:29');
INSERT INTO `photoLinks` VALUES('Lakers Game.', 'https://scontent-b-lax.xx.fbcdn.net/hphotos-prn1/603921_10200865211374101_2069131461_n.jpg', '2013-12-13 22:56:55');
INSERT INTO `photoLinks` VALUES('Volunteering with Byron and Christian.', 'https://scontent-a-lax.xx.fbcdn.net/hphotos-frc1/1004631_10201588045689019_1633932063_n.jpg', '2013-12-13 22:57:06');
INSERT INTO `photoLinks` VALUES('Tailgating.', 'https://scontent-b-lax.xx.fbcdn.net/hphotos-frc3/1380399_10200615375013587_756791186_n.jpg', '2013-12-13 22:57:21');
INSERT INTO `photoLinks` VALUES('LA County Fair.', 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc1/906134_10151943189255883_28382816_o.jpg', '2013-12-13 22:57:38');
INSERT INTO `photoLinks` VALUES('Lunch @ Kerckoff', 'https://scontent-a-sjc.xx.fbcdn.net/hphotos-prn1/564395_10151936938885883_474407332_n.jpg', '2013-12-13 22:57:57');
INSERT INTO `photoLinks` VALUES('Lunch @ Wolfgang Puck with Kalvin', 'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-frc3/1267246_10151928283715883_1350591211_o.jpg', '2013-12-13 22:58:12');
INSERT INTO `photoLinks` VALUES('Kickback with Alyssa and Alexa!', 'https://scontent-a-sjc.xx.fbcdn.net/hphotos-frc1/1006303_10151839107095883_1655701542_n.jpg', '2013-12-13 22:58:26');
INSERT INTO `photoLinks` VALUES('Vegas with Molly and crew.', 'https://scontent-a-sjc.xx.fbcdn.net/hphotos-ash4/485557_10151675248625883_427811707_n.jpg', '2013-12-13 22:58:38');
INSERT INTO `photoLinks` VALUES('HKN KBBQ.', 'https://scontent-b-pao.xx.fbcdn.net/hphotos-prn2/v/1479171_10152066005080883_482356811_o.jpg?oh=9c580c10a7b409e11f7fcd01a4fd7715&oe=52AE3FFD', '2013-12-13 23:49:29');
INSERT INTO `photoLinks` VALUES('Cousins.', 'https://scontent-b-pao.xx.fbcdn.net/hphotos-ash3/998921_10151839103500883_1185817140_n.jpg', '2013-12-13 23:52:33');
