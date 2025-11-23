-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : database
-- Généré le : dim. 23 nov. 2025 à 13:46
-- Version du serveur : 8.0.44
-- Version de PHP : 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `uma`
--

CREATE TABLE `uma` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `stable_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `uma`
--

INSERT INTO `uma` (`id`, `name`, `race`, `style`, `stable_id`) VALUES
(1, 'Special Week', 'medium', 'pace', 1),
(2, 'Silence Suzuka', 'medium', 'front', 1),
(3, 'Tokai Teio', 'medium', 'pace', 1),
(4, 'El Condor Pasa', 'Mile', 'pace', 2),
(5, 'Air Groove', 'medium', 'late', 2),
(6, 'Grass Wonder', 'long', 'late', 2),
(7, 'Nice Nature', 'medium', 'late', 3),
(8, 'Ikuno Dictus', 'medium', 'pace', 3),
(9, 'Matikanetannhauser', 'long', 'pace', 3),
(10, 'Satono Crown', 'medium', 'late', 4),
(11, 'Satono Diamond', 'long', 'late', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `uma`
--
ALTER TABLE `uma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_479D378DA6FA1C8B` (`stable_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `uma`
--
ALTER TABLE `uma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `uma`
--
ALTER TABLE `uma`
  ADD CONSTRAINT `FK_479D378DA6FA1C8B` FOREIGN KEY (`stable_id`) REFERENCES `stable` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
