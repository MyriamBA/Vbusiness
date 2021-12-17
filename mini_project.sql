-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 déc. 2021 à 20:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `user_name` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `genre` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `avatar` varchar(222) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id`, `user_name`, `name`, `genre`, `password`, `avatar`) VALUES
(2, 'Mickel LI', 'Mickel asm', 'male', '123mm', '    https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png'),
(6, 'Myriam BA', 'Myriam BEN AHMED', 'Female', 'myriam 123', ' https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png'),
(10, 'Rihab', 'Rihab JERBI', 'Female', 'rihab 123', '  https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png'),
(13, 'Mira Brown', 'Miraa Brown', 'Female', 'Mira 11111', '  https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-512.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
