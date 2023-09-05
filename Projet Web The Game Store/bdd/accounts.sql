-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 05 sep. 2023 à 12:31
-- Version du serveur :  8.0.18
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
-- Base de données :  `accounts`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rank` int(11) DEFAULT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `User` text NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`ID`, `Rank`, `Prenom`, `Nom`, `User`, `Mail`, `Password`) VALUES
(3, NULL, 'admin', 'admin', 'admin', 'admin', '$2y$10$vxJX/wTVvrLJ.miUApQJfeSen3oNMI8XKY6ymGm36MnxdBsPRe0ni'),
(4, NULL, 'salut', 'cmoi', 'michel', 'michel@gmail.com', '$2y$10$8AOavsOl5qsC/hKt/FkmI.mXMKJZjibT8IuMjB2lvQHRHr/BFIoGq'),
(5, NULL, 'coucou', 'cmoi', 'paul', 'paul@gmail.com', '$2y$10$e5J2MFI6ltNuZ34.LuD.vefqPaSeFlG61tmY1GDAKUiHE2q.6llHi'),
(6, NULL, 'benjamin', 'benjamind', 'benjamin', 'benjamin@gmail.com', '$2y$10$V2xTEIAgJvDzcUosVDg3hO1Qlzx6UemBIB4/s2qZkIl/jchxS9tHS'),
(7, NULL, 'jean', 'pierre', 'JeanPierreLeThug', 'jean.pierre@gmail.com', '$2y$10$Bmjt/a5SfQ/cu91TcquiNOGWd2RCHWO0AMrSj6lgtVEJ/f/fBT5Ym'),
(8, NULL, 'Jean', 'Michel', 'JeanMiLeThug', 'jeanmi@gmail.com', '$2y$10$JURZkbnM5FKK7ST5hVbsIenXNyWsSzUSLMUBNgvMrZ1AQB7tk9aPu'),
(9, NULL, 'Michel', 'Blala', 'MichelLeThug', 'michel@gmail.com', '$2y$10$Uq/nwELy/Y9GhCOASDo.rufabJ8DdUBqetQ.LRemnOqB8YD.JUAK.'),
(10, NULL, 'Jean ', 'Michel', 'JeanMichelLeThug', 'jeanmichel@gmail.com', '$2y$10$pr8ggPoTdezLFNx.bV2BPuwDpbZ4hE9oM8YpuJMWIgXlgGn.LjpaS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
