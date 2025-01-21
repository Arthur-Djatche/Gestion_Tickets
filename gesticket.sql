-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 jan. 2025 à 02:00
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gesticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `idbus` varchar(15) NOT NULL,
  `immat` varchar(15) DEFAULT NULL,
  `capacité` int DEFAULT NULL,
  `modele` varchar(20) DEFAULT NULL,
  `idvoyage` varchar(10) NOT NULL,
  PRIMARY KEY (`idbus`),
  KEY `idvoyage` (`idvoyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int NOT NULL AUTO_INCREMENT,
  `nomclt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `e_mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `passwrd_clt` varchar(100) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

DROP TABLE IF EXISTS `conducteur`;
CREATE TABLE IF NOT EXISTS `conducteur` (
  `idconduct` varchar(8) NOT NULL,
  `nomc` varchar(50) DEFAULT NULL,
  `prenomc` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idconduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etre_conduit`
--

DROP TABLE IF EXISTS `etre_conduit`;
CREATE TABLE IF NOT EXISTS `etre_conduit` (
  `idbus` varchar(15) NOT NULL,
  `idconduct` varchar(8) NOT NULL,
  `datec` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idbus`,`idconduct`),
  KEY `idconduct` (`idconduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idpaie` varchar(15) NOT NULL,
  `montant` decimal(6,2) DEFAULT NULL,
  `modepaie` varchar(20) DEFAULT NULL,
  `datepaie` date DEFAULT NULL,
  PRIMARY KEY (`idpaie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `idticket` varchar(15) NOT NULL,
  `dateachat` datetime DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `idclient` varchar(10) NOT NULL,
  `idvoyage` varchar(10) NOT NULL,
  `idpaie` varchar(15) NOT NULL,
  PRIMARY KEY (`idticket`),
  KEY `idclient` (`idclient`),
  KEY `idvoyage` (`idvoyage`),
  KEY `idpaie` (`idpaie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `idvoyage` int NOT NULL AUTO_INCREMENT,
  `datedep` date NOT NULL,
  `heuredep` time NOT NULL,
  `lieudep` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lieuarr` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `durée` time DEFAULT NULL,
  PRIMARY KEY (`idvoyage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
