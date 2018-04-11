-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Avril 2018 à 21:22
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  `date` int(11) NOT NULL,
  `msg_like` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `msg_like`) VALUES
(6, 'dukcsdkdbf hd gfqosfg so eidug sÃ§i guz omlf dÃ§obqe, e', 1510241306, 0),
(9, 'buvbujkvbg que quoi', 1511359921, 0),
(10, 'Il est 15:12', 1511359968, 0),
(11, 'Il est 15:23', 1513868306, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `sid` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'user@gmail.com', 'user', '539bdc3a7e0bd506dbcb19ca24dcbad3'),
(2, 'user2@gmail.com', 'user2', 'b5cb28bb627b380a12ade1f6421eac33'),
(3, 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78', '0e4baebacc352e2ca0a795ab3b11f0d7'),
(4, 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '62f46ba852e7d78993e8a631cfaf9482'),
(5, 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '62f46ba852e7d78993e8a631cfaf9482'),
(6, 'k@a.a', 'd41d8cd98f00b204e9800998ecf8427e', '17d8d6a58368903c4f46bc851f2088e9'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '3752a255dcd89275d10ca6e27128861a'),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', '556897725d92a1f2a1c2b9a856a01525'),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', 'a00e06e1c5908775f1b987409c28bb44'),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', '992e87428c1f5f51c763da22eb2b3fb1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
