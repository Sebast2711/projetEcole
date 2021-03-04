-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 mars 2021 à 16:02
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `nom`) VALUES
(1, 'math'),
(2, 'physique'),
(3, 'chimie'),
(4, 'francais'),
(5, 'anglais'),
(6, 'espagnol'),
(7, 'eps'),
(8, 'histoire'),
(9, 'geographie');

-- --------------------------------------------------------

--
-- Structure de la table `cours_eleve`
--

CREATE TABLE `cours_eleve` (
  `id` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours_eleve`
--

INSERT INTO `cours_eleve` (`id`, `id_cours`, `id_eleve`) VALUES
(20, 1, 135),
(21, 1, 136),
(22, 1, 140),
(23, 2, 137),
(24, 2, 142),
(25, 2, 148),
(26, 3, 146),
(27, 3, 148),
(28, 3, 199),
(29, 4, 137),
(30, 4, 135),
(31, 5, 138),
(32, 5, 135),
(33, 6, 148),
(34, 6, 200),
(35, 6, 235),
(36, 7, 235),
(37, 8, 235),
(38, 9, 140);

-- --------------------------------------------------------

--
-- Structure de la table `cours_prof`
--

CREATE TABLE `cours_prof` (
  `id` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours_prof`
--

INSERT INTO `cours_prof` (`id`, `id_cours`, `id_prof`) VALUES
(1, 1, 8),
(2, 2, 113),
(3, 3, 117),
(4, 4, 110),
(5, 5, 114),
(6, 6, 116),
(7, 7, 115),
(8, 8, 118),
(9, 9, 112);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `genre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `mdp`, `type`, `genre`) VALUES
(8, 'oillo', 'sebastien', 'oillosebast@gmail.com', '1234', 1, 'M'),
(110, 'Kording', 'Amélie', 'akording0@devhub.com', 'fEgXeY01Xd', 1, 'M'),
(112, 'Vedenichev', 'Réjane', 'rvedenichev2@aol.com', 'QsLOCsy0e6', 1, 'F'),
(113, 'Dainton', 'Eléonore', 'jdainton3@geocities.com', 'UXlPY1m0pB', 1, 'F'),
(114, 'Rate', 'Célestine', 'erate4@wunderground.com', 'vQAvJ7KfsDhE', 1, 'M'),
(115, 'Spaule', 'Edmée', 'gspaule5@gov.uk', 'lRUKRlJ3Fv', 1, 'M'),
(116, 'Scheffler', 'Desirée', 'tscheffler6@163.com', '7uFmtPWkG', 1, 'M'),
(117, 'Jeans', 'Annotée', 'sjeans7@craigslist.org', '40JfvBGL6V3', 1, 'F'),
(118, 'Vatini', 'Yú', 'gvatini8@photobucket.com', 'gIhatWYk', 1, 'M'),
(135, 'Quinion', 'Shae', 'squinion0@addtoany.com', 'nt6RCDwmCOv', 0, 'M'),
(136, 'Decayette', 'Jessie', 'jdecayette1@fc2.com', '2ln9j17jU', 0, 'M'),
(137, 'Novichenko', 'Lonnie', 'lnovichenko2@domainmarket.com', 'lQhGmRjj', 0, 'F'),
(138, 'Louw', 'Dasie', 'dlouw3@skyrock.com', 'YBUCFUy2id', 0, 'F'),
(140, 'Volonte', 'Brendan', 'bvolonte5@webeden.co.uk', 'qDJVi2Qbq', 0, 'M'),
(142, 'Fellibrand', 'Joan', 'jfellibrand7@storify.com', '0MZmBp9nD4', 0, 'F'),
(146, 'Bourbon', 'Peterus', 'pbourbonb@netlog.com', '6YKK95VMNqF', 0, 'M'),
(148, 'Tucker', 'Timmie', 'ttuckerd@independent.co.uk', 'XnrQUrlTua', 0, 'F'),
(199, 'Corro', 'Skelly', 'scorro1s@unblog.fr', '5TxqQy', 0, 'M'),
(200, 'Hughf', 'Cindy', 'chughf1t@usgs.gov', 'rEjOipUO', 0, 'F'),
(235, 'oillo', 'claude', 'oc@gmail.com', '1234', 0, 'M');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `date` date NOT NULL,
  `note` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `id_eleve`, `id_cours`, `date`, `note`) VALUES
(1, 235, 6, '2021-03-10', 15),
(2, 235, 8, '2021-03-18', 10),
(3, 235, 8, '2021-03-15', 5),
(4, 235, 7, '2021-03-10', 14),
(5, 135, 1, '2021-03-25', 18),
(6, 135, 4, '2021-03-11', 19),
(7, 137, 4, '2021-03-17', 5.5),
(8, 200, 6, '2021-03-10', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours_eleve`
--
ALTER TABLE `cours_eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_eleve` (`id_eleve`);

--
-- Index pour la table `cours_prof`
--
ALTER TABLE `cours_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_eleve` (`id_eleve`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cours_eleve`
--
ALTER TABLE `cours_eleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `cours_prof`
--
ALTER TABLE `cours_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours_eleve`
--
ALTER TABLE `cours_eleve`
  ADD CONSTRAINT `cours_eleve_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_eleve_ibfk_2` FOREIGN KEY (`id_eleve`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cours_prof`
--
ALTER TABLE `cours_prof`
  ADD CONSTRAINT `cours_prof_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_prof_ibfk_2` FOREIGN KEY (`id_prof`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`id_eleve`) REFERENCES `membre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
