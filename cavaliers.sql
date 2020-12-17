-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  jeu. 17 déc. 2020 à 10:28
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe3`
--

-- --------------------------------------------------------

--
-- Structure de la table `cavaliers`
--

DROP TABLE IF EXISTS `cavaliers`;
CREATE TABLE IF NOT EXISTS `cavaliers` (
  `idca` int(11) NOT NULL AUTO_INCREMENT,
  `nomca` varchar(25) NOT NULL,
  `preca` varchar(25) NOT NULL,
  `dnca` date NOT NULL,
  `adrca` int(4) NOT NULL,
  `telca` varchar(14) NOT NULL,
  `mailca` varchar(40) NOT NULL,
  `mdpca` varchar(30) NOT NULL,
  `loginca` int(7) NOT NULL,
  PRIMARY KEY (`idca`),
  KEY `adrca` (`adrca`),
  KEY `loginca` (`loginca`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;


--
-- Contraintes pour la table `cavaliers`
--
ALTER TABLE `cavaliers`
  ADD CONSTRAINT `adresse` FOREIGN KEY (`adrca`) REFERENCES `adresses` (`id_adr`),
  ADD CONSTRAINT `login` FOREIGN KEY (`loginca`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
