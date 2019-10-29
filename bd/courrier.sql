-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 26 août 2019 à 19:33
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `courrier`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` int(10) NOT NULL,
  `telnum` int(14) NOT NULL,
  `civi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`telnum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `prenom`, `codepostal`, `telnum`, `civi`, `email`, `feedback`) VALUES
('Ghailan', 'Oumaima', 14000, 643540193, 'mme', 'oumaima.ghailan@gmail.com', 'hello!'),
('Ghailan', 'Jihad', 14000, 671346427, 'mme', 'jihad@gmail.com', 'Bonsoir.'),
('Ghailan', 'Amina', 14000, 671346428, 'mme', 'amina@outlook.com', 'bonjour!'),
('lee', 'amy', 14000, 73684930, 'mme', 'lee@gmal.com', 'helllloooooo');

-- --------------------------------------------------------

--
-- Structure de la table `entitesdestination`
--

DROP TABLE IF EXISTS `entitesdestination`;
CREATE TABLE IF NOT EXISTS `entitesdestination` (
  `entite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entiteDes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entitesdestination`
--

INSERT INTO `entitesdestination` (`entite`, `entiteDes`, `reference`) VALUES
('DGH', 'DI', 1),
('DGH', 'DAH', 2),
('DI', 'DGI', 3),
('DGH', 'SI', 4),
('DG', 'DI', 5);

-- --------------------------------------------------------

--
-- Structure de la table `entitesinternes`
--

DROP TABLE IF EXISTS `entitesinternes`;
CREATE TABLE IF NOT EXISTS `entitesinternes` (
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbole` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entiteApp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` int(255) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entitesinternes`
--

INSERT INTO `entitesinternes` (`reference`, `designation`, `symbole`, `responsable`, `entiteApp`, `grade`) VALUES
('DGH', 'Direction Générale d\'Hydraulique', 'DGH', 'Mr. Alami', '.', 1),
('DI', 'Direction Informatique', 'DI', 'Mr. Ali', 'DGH', 2),
('SI ', 'Service Informatique', 'SI', 'Mr. Kassimi', 'DI', 10),
('M', 'Marché', 'SI', 'Mr. Alami', 'DI', 5);

-- --------------------------------------------------------

--
-- Structure de la table `instruction`
--

DROP TABLE IF EXISTS `instruction`;
CREATE TABLE IF NOT EXISTS `instruction` (
  `instruction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`instruction`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `instruction`
--

INSERT INTO `instruction` (`instruction`) VALUES
('avis et étude'),
('M\'en parler'),
('Pour exécution');

-- --------------------------------------------------------

--
-- Structure de la table `supportcourrier`
--

DROP TABLE IF EXISTS `supportcourrier`;
CREATE TABLE IF NOT EXISTS `supportcourrier` (
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `supportcourrier`
--

INSERT INTO `supportcourrier` (`reference`, `designation`) VALUES
('L', 'Lettre'),
('F', 'Fax'),
('LR', 'Lettre Recommandée');

-- --------------------------------------------------------

--
-- Structure de la table `typecourrier`
--

DROP TABLE IF EXISTS `typecourrier`;
CREATE TABLE IF NOT EXISTS `typecourrier` (
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typecourrier`
--

INSERT INTO `typecourrier` (`reference`, `designation`) VALUES
('D', 'Document'),
('M', 'Marché'),
('R', 'Rapport'),
('Dos', 'Dossier');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `REFERENCE` int(5) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MDP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ROLE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ETAT` int(1) DEFAULT NULL,
  PRIMARY KEY (`REFERENCE`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`REFERENCE`, `NOM`, `MDP`, `ROLE`, `EMAIL`, `ETAT`) VALUES
(1, 'admin', '123456789', 'ADMIN', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_nv`
--

DROP TABLE IF EXISTS `utilisateur_nv`;
CREATE TABLE IF NOT EXISTS `utilisateur_nv` (
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` int(255) NOT NULL,
  `entite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur_nv`
--

INSERT INTO `utilisateur_nv` (`nom`, `prenom`, `reference`, `entite`, `email`, `mdp`) VALUES
('Ismail', 'Pirouch', 4, 'RH', 'pirouch@ismail.com', 'gigi'),
('lee', 'Amy', 10, 'DG', 'lee.ev@hotmail.fr', 'lee'),
('lee', 'Amy', 13, 'DG', 'lee.ev@hotmail.fr', 'gigi'),
('Ghailan', 'Oumaima', 2, 'DGH', 'oumaima.ghailan@gmail.com', 'ouou'),
('jihad', 'ghailan', 6, 'RH', 'ghailan@gmail.com', 'jiji'),
('Zaimat', 'Oumaima', 8, 'DI', 'zh@gmail.com', 'zhzh'),
('Amraoui', 'Hind', 9, 'DI', 'Hind@gmail.com', 'hind1996');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
