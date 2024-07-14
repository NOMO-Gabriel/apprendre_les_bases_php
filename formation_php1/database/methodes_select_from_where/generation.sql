-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 oct. 2020 à 22:22
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(38) NOT NULL,
  `contenu` text NOT NULL,
  `auteur` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `auteur`) VALUES
(1, 'Un premier article ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur esse aut accusantium doloribus facere necessitatibus ad, quas eius aliquid vero. Placeat ad saepe voluptates dignissimos maiores quaerat labore sed iure!', 'gabriel'),
(2, 'Un second article', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur temporibus autem iusto veritatis aspernatur omnis suscipit beatae quidem exercitationem facere illo amet quaerat, perferendis eius velit nostrum aut et?', 'gabriel'),
(3, 'Article numéro 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab iusto voluptatum beatae labore dicta voluptates repudiandae, fugit nostrum aliquid dolorum vitae quam asperiores? Laborum ipsum aspernatur iure architecto explicabo nemo.', 'gabriel'),
(4, 'Le quatrième article', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum sed rem illum eos aut quis. Natus consectetur repellat distinctio, mollitia earum architecto deserunt alias beatae molestiae laudantium dolorum? Voluptate, officia.', 'james');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;