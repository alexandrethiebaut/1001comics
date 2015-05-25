-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 25 Mai 2015 à 14:05
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `alt_1001comics`
--

-- --------------------------------------------------------

--
-- Structure de la table `1001_wp_userlist_issue`
--

CREATE TABLE IF NOT EXISTS `1001_wp_userlist_issue` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Issue_name` text NOT NULL,
  `Volume_name` text NOT NULL,
  `Issue_number` int(11) NOT NULL,
  `Cover_source` text NOT NULL,
  `reading_status` tinyint(1) NOT NULL DEFAULT '0',
  KEY `Id` (`Id`,`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `1001_wp_userlist_issue`
--

INSERT INTO `1001_wp_userlist_issue` (`Id`, `User_id`, `Issue_name`, `Volume_name`, `Issue_number`, `Cover_source`, `reading_status`) VALUES
(277587, 1, 'Avengers vs. Pet Avengers', 'Avengers vs. Pet Avengers', 1, 'http://static.comicvine.com/uploads/scale_large/2/22664/1894179-avg_vs_pav.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
