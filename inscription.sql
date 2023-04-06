-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 06 avr. 2023 à 09:08
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `mail`, `password`) VALUES
('gjhgj', 'khbk', 'yftuf@gmail.com', '$2y$10$pK2bO6s6LF9Vgu.ca5/C/e3.vz4QFr9GDfuVQ4RYN28S3jM0qVJo2'),
('azer', 'azer', 'azer@gmail.com', '$2y$10$E6d/TEI0Y8QZ1V4KezkeY.8d27Fq./10sLen7CixEea9/i1I3GUJK'),
('azerty', 'azerty', 'azerty@gmail.com', '$2y$10$HSsIhUGZu0NrYgeQN5xzQeYKpLxvEFKvOXVjwsKOW/UdrHS50Yteu'),
('azert', 'azert', 'azert@gmail.com', '$2y$10$BWjT4S9qfjIbhKDLyr1UrOcNfTWPiVoKkUpQABuRaDa.Pd5mIW9qa'),
('azertyu', 'azertyu', 'azertyu@gmail.com', '$2y$10$P0ANOlp7RC.Bt0rKV/Le.O7HDRxwpjh37XpnBT27ZV1vYLvUYtaSu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
