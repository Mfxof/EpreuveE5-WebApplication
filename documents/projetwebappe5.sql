-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 21 Mars 2024 à 08:11
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetwebappe5`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(128) NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(255) DEFAULT NULL,
  `nombre_commentaires` int(11) DEFAULT NULL,
  `nombre_vues` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `titre`, `auteur`, `date_publication`, `tags`, `nombre_commentaires`, `nombre_vues`, `description`) VALUES
(1, 'image/blog-bg/blog-2-806x440.png', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demtester', '2024-03-19 13:07:50', 'Jobs', 2, 179, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en évidence les faits clés à son sujet, comme la popularité de la question, le nombre de personnes intéressées par elle et qui est le public. Pour accomplir...'),
(2, 'image/blog-bg/blog-3-806x440.jpg', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demetester', '2024-03-19 13:18:31', 'Jobs', 0, 6, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...'),
(3, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demetester', '2024-03-19 13:20:26', 'Jobs', 3, 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...'),
(4, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 2\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demetester', '2024-03-19 13:20:26', 'Jobs', 3, 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...'),
(5, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 3\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demetester', '2024-03-19 13:20:26', 'Jobs', 3, 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...'),
(6, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 4\r\n                            clavier, notre première fonctionnalité en laboratoire', 'Demetester', '2024-03-19 13:20:26', 'Jobs', 3, 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `email`, `message`, `created_at`) VALUES
(1, '', 'matysfreyermuth@gmail.com', 'Message de test contacte', '2024-03-11 13:09:29'),
(2, '', 'matysfreyermuth@gmail.com', 'Message de TEST\r\n', '2024-03-11 13:09:40'),
(3, '', 'matysfreyermuth@gmail.com', 'Test 3\r\n', '2024-03-11 13:11:58'),
(4, '', 'matysfreyermuth@gmail.com', 'a\r\n', '2024-03-11 13:14:01'),
(5, '', 'xiode.gam@gmail.com', 'test\r\n', '2024-03-11 13:19:12'),
(6, '', 'xiode.gam@gmail.com', 'test\r\n', '2024-03-11 13:20:10'),
(7, '', 'xiode.gam@gmail.com', 'asas', '2024-03-11 13:20:15'),
(8, '', 'xiode.gam@gmail.com', 'a', '2024-03-11 13:21:43'),
(9, '', 'xiode.gam@gmail.com', 'a', '2024-03-11 13:23:16'),
(10, '', 'xiode.gam@gmail.com', 'a\r\n', '2024-03-11 13:24:30'),
(11, '', 'xiode.gam@gmail.com', 'sa', '2024-03-11 13:25:13'),
(12, '', 'xiode.gam@gmail.com', 'a\r\n', '2024-03-11 13:25:22'),
(13, '', 'xiode.gam@gmail.com', 'asa', '2024-03-11 13:25:51'),
(14, 'matys FREYERMUTH', 'xiode.gam@gmail.com', 'as\r\n', '2024-03-11 13:26:27'),
(15, 'Pablo', 'msa^sa@zdz.dz', 'dad', '2024-03-18 15:54:00'),
(16, 'TestForm', 'test@gmail.com', 'Test', '2024-03-19 12:34:55'),
(17, '', 'matysfreyermuth@gmail.com', '', '2024-03-19 12:39:01'),
(18, 'matys FREYERMUTH', 'matysfreyermuth@gmail.com', '', '2024-03-19 12:39:43'),
(19, '', '', '', '2024-03-19 15:23:33'),
(20, '', '', '', '2024-03-19 15:25:21');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `resolu` int(16) NOT NULL,
  `note` varchar(16) NOT NULL,
  `tags` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nbReponses` int(128) NOT NULL,
  `nbVues` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `posts_inside`
--

CREATE TABLE `posts_inside` (
  `idPrimaire` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `titre` text,
  `categorie` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts_inside`
--

INSERT INTO `posts_inside` (`idPrimaire`, `pseudo`, `email`, `titre`, `categorie`, `fichier`, `contenu`, `date_creation`) VALUES
(1, '', '', '', '', '', '', '2024-03-21 07:49:32'),
(2, '', '', '', '', '', '', '2024-03-21 07:49:38'),
(3, '', '', '', '', '', '', '2024-03-21 07:51:22'),
(4, '', '', '', '', '', '', '2024-03-21 07:52:27'),
(5, '', '', '', '', '', '', '2024-03-21 07:54:12'),
(6, '', '', '', '', '', '', '2024-03-21 07:54:52'),
(7, 'matys FREYERMUTH', 'matys@gmail.com', 'Artcile OUi', 'dfg', '', 'azerty', '2024-03-21 07:55:26'),
(8, 'matys FREYERMUTH', 'matys@gmail.com', 'Artcile OUi', 'dfg', '1695901324974.jpg', 'aze', '2024-03-21 07:56:49'),
(9, 'matys FREYERMUTH', 'matys@gmail.com', 'Artcile OUi', 'dfg', '1695901324974.jpg', 'aze', '2024-03-21 07:56:53'),
(10, 'matys FREYERMUTH', 'matys@gmail.com', 'Artcile OUi', 'dfg', '', 'bn,', '2024-03-21 08:00:58'),
(11, '', '', '', '', '', ';', '2024-03-21 08:04:48'),
(12, '', '', '', '', '', '', '2024-03-21 08:09:19'),
(13, '', '', '', '', '', '', '2024-03-21 08:09:34'),
(14, '', '', '', '', '', '', '2024-03-21 08:09:39');

-- --------------------------------------------------------

--
-- Structure de la table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `tags` int(11) NOT NULL,
  `question` text,
  `date_envoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_questions`
--

INSERT INTO `user_questions` (`id`, `logo`, `nom`, `prenom`, `tags`, `question`, `date_envoi`) VALUES
(1, 'image/icones-user/LogoXiode.png', 'Freyermuth', 'Matys', 12, 'La programmation web est un domaine fascinant et dynamique qui englobe toutes les technologies et pratiques utilisées pour créer des sites web et des applications web. Que vous soyez un débutant curieux ou un développeur expérimenté cherchant à élargir vos compétences, plongeons dans un cours rapide sur la programmation web.', '2024-03-19 14:34:22');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` varchar(16) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `nom`, `prenom`, `email`, `num`, `mot_de_passe`, `created_at`) VALUES
(2, '', 'test', 'test', 'test@gmail.com', '0', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', '2024-03-11 13:44:40'),
(5, 'KirbyFanLoutre12', 'Kirby', 'Loutre<3', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', '2024-03-12 12:38:19'),
(8, 'Mf', 'FREYERMUTH', 'matys', 'matysfreyermuth@gmail.com', '', '$2y$10$UjYcCBd1.C0fMUvbadl02uk6BSXzrHXtU9r5tThArHxKoeX8AmkGO', '2024-03-14 09:37:49'),
(9, 'ozu3rol', 'CRUGNOLA', 'LORIS', 'loris067@hotmail.fr', '', '$2y$10$TSj2QoXf.PwFyUZehNMrQ.UZuJiOlMwcnAXtkTURBgsNPld5uC52u', '2024-03-14 09:38:51'),
(10, 'Ashley', 'Andrianarivony', 'Ashley', 'lantoharyashley@gmail.com', '', '$2y$10$Bdi3A5F81LL9K.BiOCq8eebPCqGkvah9jFa6POpDuARL6wZzdNYtK', '2024-03-14 09:39:52'),
(11, 'wcarta', 'CARTA', 'William', 'william57650@yahoo.fr', '', '$2y$10$G4BY8Y2tQAe2hPFni5.MqO2pR9UhQ3o7Lo9MhjzOWxJXI14ds0pSu', '2024-03-18 12:52:34'),
(12, 'TestUser', 'test', 'user', 'testuser@gmail.com', '', '$2y$10$relW9vW3KAwApPv1c4x/WOfUB.z.Qvkysp.WX2lup9kvXgk9Y8/ue', '2024-03-19 22:54:51');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_old`
--

CREATE TABLE `utilisateurs_old` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` varchar(16) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs_old`
--

INSERT INTO `utilisateurs_old` (`id`, `pseudo`, `nom`, `prenom`, `email`, `num`, `mot_de_passe`, `created_at`) VALUES
(1, '', 'FREYERMUTH', 'matys', 'matysfreyermuth@gmail.com', '0', '$2y$10$Hs44h6mRmQUXavpE/Y1lD.KyCD.y5HcSkocsl7B8eiECP2.8JeQZa', '2024-03-11 13:44:40'),
(2, '', 'test', 'test', 'test@gmail.com', '0', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', '2024-03-11 13:44:40'),
(4, '', 'sas', 'as', 'ass@as.as', '', '$2y$10$0GoHP1fvWHT3S.6UOPzOH.zMQRyrJNt9.dopNl//BJuqv/jIjws02', '2024-03-11 13:48:38'),
(5, 'KirbyFanLoutre12', 'Kirby', 'Loutre<3', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', '2024-03-12 12:38:19'),
(7, 'matys FREYERMUTH', '', '', 'moi@sa.sa', '', '$2y$10$rN0sHRrCJz2XrYtUDNQF4uXf/j42J0iPGYb16dhDjMdSVo7iU18KS', '2024-03-12 14:44:10'),
(9, 'matys FREYERMUTH', 'zerty', 'ertyu', 'rtyu@sa.sa', '', '$2y$10$XOv8w/PiiCdfvLvzJmq/O.g3.K8fww4IH8EKjpdiMklN1ivjMZROe', '2024-03-19 12:50:44');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts_inside`
--
ALTER TABLE `posts_inside`
  ADD PRIMARY KEY (`idPrimaire`);

--
-- Index pour la table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `utilisateurs_old`
--
ALTER TABLE `utilisateurs_old`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `posts_inside`
--
ALTER TABLE `posts_inside`
  MODIFY `idPrimaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `utilisateurs_old`
--
ALTER TABLE `utilisateurs_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
