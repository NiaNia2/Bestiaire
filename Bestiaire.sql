-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : mer. 11 juin 2025 à 11:53
-- Version du serveur : 8.0.42
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Bestiaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `creature`
--

CREATE TABLE `creature` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `type_creature_id` int NOT NULL,
  `name_creature` varchar(255) NOT NULL,
  `description_creature` varchar(255) NOT NULL,
  `image_creature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `id` int NOT NULL,
  `name_element` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `name_element`) VALUES
(1, 'lumière'),
(2, 'eau'),
(3, 'air'),
(4, 'feu');

-- --------------------------------------------------------

--
-- Structure de la table `sort`
--

CREATE TABLE `sort` (
  `id` int NOT NULL,
  `element_id` int NOT NULL,
  `name_sort` varchar(255) NOT NULL,
  `image_sort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `userElement`
--

CREATE TABLE `userElement` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `element_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `userElement`
--

INSERT INTO `userElement` (`id`, `users_id`, `element_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 8, 3),
(4, 9, 4),
(5, 10, 1),
(6, 10, 4),
(7, 11, 3),
(8, 12, 1),
(9, 12, 2),
(10, 12, 3),
(11, 12, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `names` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `names`, `user_role`, `pass`) VALUES
(1, 'dobby', 'gens', '$argon2i$v=19$m=65536,t=4,p=1$dmNxWEhUQThnRFJRdVdhVw$TYhFgsLocwRNT30NMKCoAdoVNK+tp9FX61Hn1fgClhU'),
(9, 'chiot', 'gens', '$argon2i$v=19$m=65536,t=4,p=1$M1F5Q1Z6L0UuTFJPN25UNA$96q7hIz94dsUw6bqWwFANmwS3NBLyjQmg7CfapzHxhs'),
(10, 'loup', 'gens', '$argon2i$v=19$m=65536,t=4,p=1$c2V6cnpIVU5iLmFCVkRBMA$fkxd1NRlrGZI2Gez/a2F4VwBhg8Ho9TUQKVGRge4owg'),
(12, 'catherine', 'admin', '$argon2i$v=19$m=65536,t=4,p=1$NE8zSEtaOU1yVVJsSVJzeQ$i61Es4StGc+C1xVZJDEFrAOpXReuxqyT3e2RRNCCSeI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `creature`
--
ALTER TABLE `creature`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userElement`
--
ALTER TABLE `userElement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `creature`
--
ALTER TABLE `creature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sort`
--
ALTER TABLE `sort`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `userElement`
--
ALTER TABLE `userElement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
