-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 apr 2022 om 07:14
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentmbo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `deskstaff`
--

DROP TABLE IF EXISTS `deskstaff`;
CREATE TABLE IF NOT EXISTS `deskstaff` (
  `DeskstaffId` int(11) NOT NULL AUTO_INCREMENT,
  `studentnr` int(6) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) DEFAULT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  PRIMARY KEY (`DeskstaffId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `afkorting` varchar(50) COLLATE latin1_bin NOT NULL,
  `naam` varchar(50) COLLATE latin1_bin NOT NULL,
  `achternaam` varchar(50) COLLATE latin1_bin NOT NULL,
  `email` varchar(50) COLLATE latin1_bin NOT NULL,
  `telefoon` varchar(50) COLLATE latin1_bin NOT NULL,
  `klas` varchar(50) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Gegevens worden geëxporteerd voor tabel `item`
--

INSERT INTO `item` (`id`, `afkorting`, `naam`, `achternaam`, `email`, `telefoon`, `klas`) VALUES
(2, 'Dhr', 'Damian', 'Fris', 'Damian@hotmail.com', '0612432534', '2009B');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentid` int(10) NOT NULL AUTO_INCREMENT,
  `studentnr` int(6) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) DEFAULT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacherid` int(10) NOT NULL AUTO_INCREMENT,
  `teacherabbrev` int(6) DEFAULT NULL,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) DEFAULT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mentorclass` varchar(10) NOT NULL,
  PRIMARY KEY (`teacherid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
