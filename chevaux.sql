-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 17 déc. 2020 à 14:25
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
-- Structure de la table `chevaux`
--

DROP TABLE IF EXISTS `chevaux`;
CREATE TABLE IF NOT EXISTS `chevaux` (
  `idche` int(11) NOT NULL AUTO_INCREMENT,
  `nomche` varchar(25) NOT NULL,
  `dnche` date NOT NULL,
  `tailleche` varchar(25) NOT NULL,
  `idrobe` int(11) NOT NULL,
  `idrace` int(11) NOT NULL,
  PRIMARY KEY (`idche`),
  KEY `idrace` (`idrace`),
  KEY `idrobe` (`idrobe`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chevaux`
--

INSERT INTO `chevaux` (`idche`, `nomche`, `dnche`, `tailleche`, `idrobe`, `idrace`) VALUES
(1, 'tonerre', '2020-11-04', '185', 2, 2),
(3, 'biscotte', '2020-11-18', '120', 1, 2),
(15, 'ponpon', '2020-12-23', '155', 2, 2),
(16, 'ponpon', '2020-12-23', '155', 2, 2),
(17, 'salut', '2020-12-01', '111', 2, 3),
(19, 'framboise', '2020-12-25', '144', 2, 1),
(20, 'louis', '2020-12-01', '185', 3, 2),
(21, 'clement', '2020-02-06', '175', 2, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chevaux`
--
ALTER TABLE `chevaux`
  ADD CONSTRAINT `clef etrangere race` FOREIGN KEY (`idrace`) REFERENCES `race` (`idrace`),
  ADD CONSTRAINT `clef etrangere robe` FOREIGN KEY (`idrobe`) REFERENCES `robe` (`idrobe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
