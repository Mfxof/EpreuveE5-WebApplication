-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 21 Mars 2024 à 13:30
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
  `image` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `certifier` int(8) NOT NULL,
  `titre` tinytext COLLATE utf8mb4_bin NOT NULL,
  `contenu` text COLLATE utf8mb4_bin NOT NULL,
  `resolu` int(16) NOT NULL,
  `note` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `tags` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `index_tri` tinytext COLLATE utf8mb4_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nbReponses` int(128) NOT NULL,
  `nbVues` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `image`, `certifier`, `titre`, `contenu`, `resolu`, `note`, `tags`, `index_tri`, `date`, `nbReponses`, `nbVues`) VALUES
(1, 'logoProfile_1', 0, 'Je suis coincé, quelle est la meilleur arumure sur Wow ?', '🤔 Salut ! Je suis actuellement coincé dans WoW et j\'ai du mal à décider quelle armure serait la meilleure pour mon personnage. J\'ai besoin de conseils pour choisir la meilleure protection possible. Quelle armure me recommandez-vous et pourquoi ? 💼🛡️.', 1, '3.6', 'WorldOfWarcraft', 'JeuxVideo', '2024-03-21 13:10:07', 42, 378),
(2, 'loutrelogo', 1, 'Comment préparer un entretien ?', 'Ne serait-il pas formidable de savoir exactement quelles questions un responsable du recrutement vous poserait lors de votre prochain entretien d\'embauche ? Malheureusement, nous ne pouvons pas lire dans les pensées, mais nous vous offrirons la meilleure alternative : une liste de plus de 40 questions d\'entrevue les plus couramment posées, accompagné...', 0, '4.7', 'Jobs', 'Jobs', '2024-03-21 13:23:28', 2, 17),
(3, 'logoProfile_2', 0, 'Combien gagnent les développeurs web ?', 'Je pense à faire carrière dans le développement web et je me demandais combien gagnais un développeur débutant dans le WEB.', 0, '?', 'Jobs', 'Jobs', '2024-03-21 13:25:41', 0, 18),
(4, 'logoProfile_1', 1, 'Connaissez-vous un jeu similaire à Remnant 2 ?', 'Connaissez-vous un jeu similaire à Remnant 2, de préférence un jeu d\'action-aventure avec des éléments de tir à la troisième personne et un système de combat exigeant, dans un univers post-apocalyptique ou fantastique ? 🎮', 2, '?', 'JeuxVideo', 'JeuxVideo', '2024-03-21 13:26:30', 0, 2),
(5, 'loutrelogo', 1, 'Crée un site dynamique rapidement ?', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17);

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
(14, '', '', '', '', '', '', '2024-03-21 08:09:39'),
(15, 'mts', 'TheKingXiode@gmail.com', 'sa', 'sa', '', 'sa', '2024-03-21 13:00:48');

-- --------------------------------------------------------

--
-- Structure de la table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(128) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `tags` int(11) DEFAULT NULL,
  `question` text,
  `date_envoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_questions`
--

INSERT INTO `user_questions` (`id`, `pseudo`, `logo`, `nom`, `prenom`, `email`, `tags`, `question`, `date_envoi`) VALUES
(1, '', 'image/icones-user/LogoXiode.jpg', 'Freyermuth', 'Matys', '', 12, 'La programmation web est un domaine fascinant et dynamique qui englobe toutes les technologies et pratiques utilisées pour créer des sites web et des applications web. Que vous soyez un débutant curieux ou un développeur expérimenté cherchant à élargir vos compétences, plongeons dans un cours rapide sur la programmation web.', '2024-03-19 14:34:22'),
(2, '', 'image/icones-user/logoProfile_1.jpg', 'Meyer', 'Matthieu', '', 4, 'Quel est l\'impact des technologies de l\'IA sur la productivité des entreprises et comment peuvent-elles être intégrées de manière efficace pour améliorer les processus opérationnels et la prise de décision ?', '2024-03-21 09:09:09'),
(8, '', 'image/icones-user/logoProfile_1.jpg', 'Meyer', 'Matthieu', '', 4, 'Quelles sont les principales étapes de développement d\'une stratégie de marketing numérique réussie et comment peuvent-elles être adaptées à différents secteurs industriels ?', '2024-03-21 09:09:09'),
(9, 'DragonBorn', 'image/icones-user/logoProfile_3.jpg', 'Wolfmaul', 'Tarvad', '', 13, 'Comment les récentes mises à jour de World of Warcraft ont-elles influencé l\'équilibre du jeu entre les différentes classes de personnages et quelles ont été les réactions de la communauté de joueurs ?', '2024-03-21 09:09:09'),
(10, '', 'image/icones-user/LogoXiode.jpg', 'Freyermuth', 'Matys', '', 12, 'Quelles sont les implications éthiques de l\'utilisation croissante des robots autonomes dans des domaines tels que la médecine, l\'industrie et l\'assistance à la personne ?', '2024-03-21 09:55:22'),
(11, '', 'image/icones-user/logoProfile_2.jpg', 'Wagner', 'Ambre', '', 4, 'Comment les plateformes de streaming vidéo comme Netflix utilisent-elles les algorithmes de recommandation pour personnaliser l\'expérience utilisateur et augmenter l\'engagement ?\r\nQuels sont les défis de sécurit', '2024-03-21 09:51:09'),
(12, 'DragonBorn', 'image/icones-user/logoProfile_3.jpg', 'Wolfmaul', 'Tarvad', '', 13, 'Quels éléments distinctifs distinguent les jeux dark fantasy des autres genres de jeux de rôle, et comment ces jeux explorent-ils les thèmes de la moralité, du pouvoir et de la corruption dans des mondes sombres et fantastiques ?', '2024-03-21 09:52:09'),
(13, '', 'image/icones-user/loutrelogo.jpg', 'Kirby', 'Loutre', '', 14, 'Quels sont les défis de sécurité spécifiques liés à l\'Internet des objets (IoT) et quelles sont les meilleures pratiques pour garantir la protection des données et la confidentialité des utilisateurs ?', '2024-03-21 09:52:09'),
(14, '', 'image/icones-user/loutrelogo.jpg', 'Kirby', 'Loutre', '', 14, 'Quel âge a Kirby, le célèbre personnage rose de la franchise de jeux vidéo, et comment son apparence juvénile contraste-t-elle avec sa capacité à vaincre des ennemis redoutables et à sauver son univers coloré ?', '2024-03-21 09:52:09');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` varchar(16) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `tags` int(11) NOT NULL,
  `points_activite` int(128) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `logo`, `pseudo`, `nom`, `prenom`, `email`, `num`, `mot_de_passe`, `tags`, `points_activite`, `created_at`) VALUES
(2, 'verouiller_logo', '', 'test', 'test', 'test@gmail.com', '0', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', 0, 0, '2024-03-11 13:44:40'),
(5, 'loutrelogo', 'KirbyFanLoutre12', 'Kirby', 'Loutre<3', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', 14, 206, '2024-03-12 12:38:19'),
(8, 'LogoXiode', '', 'FREYERMUTH', 'matys', 'matysfreyermuth@gmail.com', '', '$2y$10$UjYcCBd1.C0fMUvbadl02uk6BSXzrHXtU9r5tThArHxKoeX8AmkGO', 12, 23406, '2024-03-14 09:37:49'),
(9, 'IconOzu3rol', 'ozu3rol', 'CRUGNOLA', 'LORIS', 'loris067@hotmail.fr', '', '$2y$10$TSj2QoXf.PwFyUZehNMrQ.UZuJiOlMwcnAXtkTURBgsNPld5uC52u', 12, 3, '2024-03-14 09:38:51'),
(10, 'logoAshley', '', 'Andrianarivony', 'Ashley', 'lantoharyashley@gmail.com', '', '$2y$10$Bdi3A5F81LL9K.BiOCq8eebPCqGkvah9jFa6POpDuARL6wZzdNYtK', 12, 187, '2024-03-14 09:39:52'),
(11, 'LogoWilliam', '', 'CARTA', 'William', 'william57650@yahoo.fr', '', '$2y$10$G4BY8Y2tQAe2hPFni5.MqO2pR9UhQ3o7Lo9MhjzOWxJXI14ds0pSu', 12, 1264, '2024-03-18 12:52:34'),
(12, '', 'TestUser', 'test', 'user', 'testuser@gmail.com', '', '$2y$10$relW9vW3KAwApPv1c4x/WOfUB.z.Qvkysp.WX2lup9kvXgk9Y8/ue', 0, 0, '2024-03-19 22:54:51');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `posts_inside`
--
ALTER TABLE `posts_inside`
  MODIFY `idPrimaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
