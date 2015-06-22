-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Juin 2015 à 15:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `coaching`
--

-- --------------------------------------------------------

--
-- Structure de la table `coaching`
--

CREATE TABLE IF NOT EXISTS `coaching` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `teacher_id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) NOT NULL,
  `receptor_id` bigint(20) NOT NULL,
  `coaching_id` bigint(20) NOT NULL,
  `grade` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) NOT NULL,
  `thread_id` bigint(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creator_id` bigint(20) NOT NULL,
  `interlocutor_id` bigint(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL,
  `coaching_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idriot` varchar(50) NOT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `mumble` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `teamspeak` varchar(50) DEFAULT NULL,
  `twitch` varchar(50) DEFAULT NULL,
  `league` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
