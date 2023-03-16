-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 juin 2022 à 13:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mon_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom_prenom`, `mail`, `tel`, `message`) VALUES
(1, 'dzqd', 'dzq@dzdz', 'dzq', 'dzdzq'),
(2, 'juan', 'escobar@cocaina.com', '0707070707', 'dzqsqdzqdsqdzqdqsdqzdzdsqdqzdsqdzqdqsdqzdq'),
(3, 'gavira emilio', 'yohanj14@gmail.com', '0707070707', 'dzqdqzdqzdqzdzq'),
(4, 'dzdzd-dzqdzd', 'ddzqdsq@dzd', '07 07 07-07-07', 'dzqds dzds.dzqdzdz'),
(5, 'dzqdqz', 'dqzd@dzdq', '7878', '@*â‚¬#_'),
(6, 'dzqd', 'yohanj14@gmail.com', '0101010101', 'l\'esgyg\'\'hvj \"dxfg'),
(7, 'juan', 'debase@gmail.com', '0707070707', 'Ã©');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `niveau` int(1) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idu`, `pseudo`, `mdp`, `niveau`) VALUES
(1, 'nebula', 'les mots font peur, mais pas les chiffres', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
