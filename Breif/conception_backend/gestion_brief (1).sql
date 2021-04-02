-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 avr. 2021 à 10:39
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_brief`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudaints`
--

CREATE TABLE `etudaints` (
  `id_etudaint` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_formateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudaints`
--

INSERT INTO `etudaints` (`id_etudaint`, `id_user`, `id_formateur`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `id_formateur` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`id_formateur`, `id_user`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `contexte` varchar(255) DEFAULT NULL,
  `dead_line` varchar(30) DEFAULT NULL,
  `date_prj` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_formateur` int(11) DEFAULT NULL,
  `url` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `titre`, `description`, `contexte`, `dead_line`, `date_prj`, `id_formateur`, `url`) VALUES
(1, 'boite commentaire', 'dazbfosdbdqouedbgfoiugqdsbnpviqs', 'fqlzenfnqldsknf', '1semaine', '2021-04-01 17:41:36', 1, NULL),
(2, 'khadija yadly', 'ksdnkjfsljbfqhusldbnfljsdqnvliqd', 'dsqjnfkjdsqblsdquhbfluqsd', '1semaine', '2021-04-01 17:42:01', 1, NULL),
(3, 'asmaa talha', 'fqhsblsduiqbfljqbslidbfqbedfqjbosdqnuqfnqoindfoqiusd', 'qsdjknfliusdblifbqsbdfiqs', '1semaine', '2021-04-01 17:42:31', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `url`
--

CREATE TABLE `url` (
  `id_url` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `id_etudaint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `url`
--

INSERT INTO `url` (`id_url`, `url`, `id_etudaint`) VALUES
(1, 'Breif-projet/Breif/Etudiant/chat.php', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass_word`, `role`) VALUES
(1, 'khadija', 'khadija@gmail.com', '12345', ''),
(2, 'youssef', 'youssef@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Structure de la table `validation`
--

CREATE TABLE `validation` (
  `id_validation` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_formateur` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_projet` int(11) DEFAULT NULL,
  `validated` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudaints`
--
ALTER TABLE `etudaints`
  ADD PRIMARY KEY (`id_etudaint`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_formateur` (`id_formateur`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`id_formateur`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `id_formateur` (`id_formateur`),
  ADD KEY `url` (`url`);

--
-- Index pour la table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id_url`),
  ADD KEY `id_etudaint` (`id_etudaint`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `validation`
--
ALTER TABLE `validation`
  ADD PRIMARY KEY (`id_validation`),
  ADD KEY `id_formateur` (`id_formateur`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_projet` (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudaints`
--
ALTER TABLE `etudaints`
  MODIFY `id_etudaint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `id_formateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `url`
--
ALTER TABLE `url`
  MODIFY `id_url` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `validation`
--
ALTER TABLE `validation`
  MODIFY `id_validation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudaints`
--
ALTER TABLE `etudaints`
  ADD CONSTRAINT `etudaints_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `etudaints_ibfk_2` FOREIGN KEY (`id_formateur`) REFERENCES `formateurs` (`id_formateur`);

--
-- Contraintes pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD CONSTRAINT `formateurs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`id_formateur`) REFERENCES `formateurs` (`id_formateur`),
  ADD CONSTRAINT `projets_ibfk_2` FOREIGN KEY (`url`) REFERENCES `url` (`id_url`);

--
-- Contraintes pour la table `url`
--
ALTER TABLE `url`
  ADD CONSTRAINT `url_ibfk_1` FOREIGN KEY (`id_etudaint`) REFERENCES `etudaints` (`id_etudaint`);

--
-- Contraintes pour la table `validation`
--
ALTER TABLE `validation`
  ADD CONSTRAINT `validation_ibfk_1` FOREIGN KEY (`id_formateur`) REFERENCES `formateurs` (`id_formateur`),
  ADD CONSTRAINT `validation_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `etudaints` (`id_etudaint`),
  ADD CONSTRAINT `validation_ibfk_3` FOREIGN KEY (`id_projet`) REFERENCES `projets` (`id_projet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
