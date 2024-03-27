-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 27 Mars 2024 à 09:24
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
  `nombre_vues` int(11) DEFAULT NULL,
  `description` text,
  `nombre_commentaires` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `titre`, `auteur`, `date_publication`, `tags`, `nombre_vues`, `description`, `nombre_commentaires`) VALUES
(1, 'image/blog-bg/blog-2-806x440.png', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:07:50', 'Jobs', 233, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en évidence les faits clés à son sujet, comme la popularité de la question, le nombre de personnes intéressées par elle et qui est le public. Pour accomplir...', 1),
(2, 'image/blog-bg/blog-3-806x440.jpg', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:18:31', 'Jobs', 13, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...', 0),
(3, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:20:26', 'Jobs', 10, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...', 0),
(4, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 2\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:20:26', 'Jobs', 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...', 0),
(5, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 3\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:20:26', 'Jobs', 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...', 0),
(6, 'image/blog-bg/blog-4-806x440.jpg', 'Présentation des raccourcis 4\r\n                            clavier, notre première fonctionnalité en laboratoire', 'User_0012', '2024-03-19 13:20:26', 'Jobs', 9, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en\r\n                            évidence les faits clés à son sujet, comme la popularité de la question, le nombre de\r\n                            personnes intéressées par elle et qui est le public. Pour accomplir...', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_blog`
--

CREATE TABLE `commentaires_blog` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `contenu` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires_blog`
--

INSERT INTO `commentaires_blog` (`id`, `blog_id`, `contenu`, `created_at`, `user_id`) VALUES
(1, 1, 'En vrai.....\r\nL\'article est top !', '2024-03-21 17:32:17', 8);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_thread`
--

CREATE TABLE `commentaires_thread` (
  `id` int(11) NOT NULL,
  `thread_id` int(11) DEFAULT NULL,
  `contenu` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `pseudo`, `email`, `message`, `created_at`) VALUES
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
(20, '', '', '', '2024-03-19 15:25:21'),
(21, 'matys FREYERMUTH', 'matysfreyermuth@gmail.com', 'fghjkl:!', '2024-03-25 13:23:41');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `logo` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `certifier` int(8) NOT NULL,
  `titre` tinytext COLLATE utf8mb4_bin NOT NULL,
  `contenu` text COLLATE utf8mb4_bin NOT NULL,
  `resolu` int(16) NOT NULL,
  `note` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `tags` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `index_tri` tinytext COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nbReponses` int(128) NOT NULL,
  `nbVues` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `logo`, `certifier`, `titre`, `contenu`, `resolu`, `note`, `tags`, `index_tri`, `created_at`, `nbReponses`, `nbVues`) VALUES
(1, 'logoProfile_1', 0, 'Je suis coincé, quelle est la meilleur arumure sur Wow ?', '🤔 Salut ! Je suis actuellement coincé dans WoW et j\'ai du mal à décider quelle armure serait la meilleure pour mon personnage. J\'ai besoin de conseils pour choisir la meilleure protection possible. Quelle armure me recommandez-vous et pourquoi ? 💼🛡️.', 1, '3.6', 'WorldOfWarcraft', 'JeuxVideo', '2024-03-21 13:10:07', 42, 378),
(2, 'loutrelogo', 1, 'Comment préparer un entretien ?', 'Ne serait-il pas formidable de savoir exactement quelles questions un responsable du recrutement vous poserait lors de votre prochain entretien d\'embauche ? Malheureusement, nous ne pouvons pas lire dans les pensées, mais nous vous offrirons la meilleure alternative : une liste de plus de 40 questions d\'entrevue les plus couramment posées, accompagné...', 0, '4.7', 'Jobs', 'Jobs', '2024-03-21 13:23:28', 2, 17),
(3, 'logoProfile_2', 0, 'Combien gagnent les développeurs web ?', 'Je pense à faire carrière dans le développement web et je me demandais combien gagnais un développeur débutant dans le WEB.', 0, '?', 'Jobs', 'Jobs', '2024-03-21 13:25:41', 0, 18),
(4, 'logoProfile_1', 1, 'Connaissez-vous un jeu similaire à Remnant 2 ?', 'Connaissez-vous un jeu similaire à Remnant 2, de préférence un jeu d\'action-aventure avec des éléments de tir à la troisième personne et un système de combat exigeant, dans un univers post-apocalyptique ou fantastique ? 🎮', 2, '?', 'JeuxVideo', 'JeuxVideo', '2024-03-21 13:26:30', 0, 2),
(5, 'loutrelogo', 1, 'Crée un site dynamique rapidement ?', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(6, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(7, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(8, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(9, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(10, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17),
(11, 'loutrelogo', 1, '-- TEMPORAIRE --', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 17);

-- --------------------------------------------------------

--
-- Structure de la table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `question` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_messages`
--

INSERT INTO `user_messages` (`id`, `question`, `created_at`, `utilisateur_id`) VALUES
(1, 'La programmation web est un domaine fascinant et dynamique qui englobe toutes les technologies et pratiques utilisées pour créer des sites web et des applications web. Que vous soyez un débutant curieux ou un développeur expérimenté cherchant à élargir vos compétences, plongeons dans un cours rapide sur la programmation web.', '2024-03-19 14:34:22', 8),
(2, 'Quel est l\'impact des technologies de l\'IA sur la productivité des entreprises et comment peuvent-elles être intégrées de manière efficace pour améliorer les processus opérationnels et la prise de décision ?', '2024-03-21 09:09:09', 13),
(8, 'Quelles sont les principales étapes de développement d\'une stratégie de marketing numérique réussie et comment peuvent-elles être adaptées à différents secteurs industriels ?', '2024-03-21 09:09:09', 13),
(9, 'Comment les récentes mises à jour de World of Warcraft ont-elles influencé l\'équilibre du jeu entre les différentes classes de personnages et quelles ont été les réactions de la communauté de joueurs ?', '2024-03-21 09:09:09', 16),
(10, 'Quelles sont les implications éthiques de l\'utilisation croissante des robots autonomes dans des domaines tels que la médecine, l\'industrie et l\'assistance à la personne ?', '2024-03-21 09:55:22', 8),
(11, 'Comment les plateformes de streaming vidéo comme Netflix utilisent-elles les algorithmes de recommandation pour personnaliser l\'expérience utilisateur et augmenter l\'engagement ?\r\nQuels sont les défis de sécurit', '2024-03-21 09:51:09', 15),
(12, 'Quels éléments distinctifs distinguent les jeux dark fantasy des autres genres de jeux de rôle, et comment ces jeux explorent-ils les thèmes de la moralité, du pouvoir et de la corruption dans des mondes sombres et fantastiques ?', '2024-03-21 09:52:09', 16),
(13, 'Quels sont les défis de sécurité spécifiques liés à l\'Internet des objets (IoT) et quelles sont les meilleures pratiques pour garantir la protection des données et la confidentialité des utilisateurs ?', '2024-03-21 09:52:09', 5),
(14, 'Quel âge a Kirby, le célèbre personnage rose de la franchise de jeux vidéo, et comment son apparence juvénile contraste-t-elle avec sa capacité à vaincre des ennemis redoutables et à sauver son univers coloré ?', '2024-03-21 09:52:09', 5),
(16, 'test', '2024-03-25 15:14:23', 2);

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
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tags` int(11) NOT NULL,
  `points_activite` int(128) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pays` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `site_web` varchar(255) DEFAULT NULL,
  `sexe` tinytext NOT NULL,
  `admin_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `logo`, `pseudo`, `nom`, `prenom`, `email`, `num`, `mot_de_passe`, `description`, `tags`, `points_activite`, `created_at`, `pays`, `ville`, `age`, `site_web`, `sexe`, `admin_id`) VALUES
(2, 'verouiller_logo', 'User_0012', 'User', 'test', 'test@gmail.com', '', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', '', 99, 96, '2024-03-11 13:44:40', NULL, NULL, NULL, NULL, '', NULL),
(5, 'loutrelogo', 'KirbyFanLoutre12', 'Kirby', 'Loutre', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', 'Je m\'appelle Kirby et je suis un grand fan de loutres ! 🎮 Plonger dans les aventures colorées de Kirby est ma passion, et j\'adore explorer chaque recoin de ces mondes fantastiques avec un enthousiasme débordant. 🌟 \r\nQuand je ne suis pas occupé à sauver Dream Land, je me plonge dans tout ce qui concerne les loutres - de leurs comportements adorables à leurs habitats naturels fascinants. 🦦 \r\nJe suis toujours partant pour partager des faits amusants ou des vidéos mignonnes sur ces créatures aquatiques avec mes amis. \r\n\r\nAvec ma personnalité débordante de joie et mon amour pour Kirby et les loutres, je suis toujours prêt pour une aventure ludique et pleine de surprises ! 🌈', 14, 206, '2024-03-12 12:38:19', 'France', 'Paris', 32, NULL, 'Homme', NULL),
(8, 'LogoXiode', '', 'FREYERMUTH', 'Matys', 'matysfreyermuth@gmail.com', '', '$2y$10$UjYcCBd1.C0fMUvbadl02uk6BSXzrHXtU9r5tThArHxKoeX8AmkGO', '🌟 Créateur et administrateur passionné de ce site Web 🌐. Dédié à fournir une expérience utilisateur exceptionnelle, je m’engage à maintenir et à enrichir le contenu avec les dernières informations et tendances. Toujours à l’écoute des retours des utilisateurs pour améliorer le site. Ensemble, construisons une communauté florissante ! 💡🔨', 12, 1365, '2024-03-02 09:37:49', 'France', 'Strasbourg', 19, 'https://arial-games.000webhostapp.com/portfolio/portfolio_New/', 'Homme', 8),
(9, 'IconOzu3rol', 'ozu3rol', 'CRUGNOLA', 'LORIS', 'loris067@hotmail.fr', '', '$2y$10$TSj2QoXf.PwFyUZehNMrQ.UZuJiOlMwcnAXtkTURBgsNPld5uC52u', 'LOUTRE !', 12, 0, '2024-03-14 09:38:51', 'France', 'Strasbourg', 20, 'https://loriscrugnola.000webhostapp.com/index.php', 'Homme', NULL),
(10, 'logoAshley', '', 'Andrianarivony', 'Ashley', 'lantoharyashley@gmail.com', '', '$2y$10$Bdi3A5F81LL9K.BiOCq8eebPCqGkvah9jFa6POpDuARL6wZzdNYtK', '', 12, 0, '2024-03-14 09:39:52', 'France', 'Strasbourg', 22, 'https://www.ashley.go.yj.fr/', 'Homme', NULL),
(11, 'LogoWilliam', '', 'CARTA', 'William', 'william57650@yahoo.fr', '', '$2y$10$G4BY8Y2tQAe2hPFni5.MqO2pR9UhQ3o7Lo9MhjzOWxJXI14ds0pSu', '', 12, 0, '2024-03-18 12:52:34', 'France', 'Strasbourg', 23, 'https://william-carta.webador.fr/', 'Homme', NULL),
(13, 'logoProfile_1', '', 'Meyer', 'Matthieu', '', '', '', '', 4, 0, '2024-03-25 09:21:32', 'France', 'Eckbolsheim', 29, NULL, 'Homme', NULL),
(15, 'logoProfile_2', '', 'Wagner', 'Ambre', 'test2@gmail.com', '', '', 'Salut, je m’appelle Ambre Wagner. Je suis une jeune débutante passionnée, inscrite depuis le 1er avril 2024. Originaire d’Allemagne, j’ai 18 ans et je me décris comme une femme. Mon site web est accessible ici. 🌟🇩🇪\r\n                        ', 4, 0, '2024-03-25 09:26:20', 'Allemagne', NULL, 18, NULL, 'Femme', NULL),
(16, 'logoProfile_3', '', 'Wolfmaul', 'Tarvard', 'test3@gmail.com', '', '', 'Je suis Tarvad Wolfmaul, un aventurier intrépide. Armé de mon intelligence acérée et de ma force brutale, je traque les mystères du monde avec une détermination sans faille. Mes yeux perçants scrutent l\'horizon, prêts à défendre les faibles et à poursuivre la vérité. Sous ma                        carapace de fer, mon cœur bat avec la ferveur d\'un héros, prêt à affronter tous les défis qui se dressent sur mon chemin. 🐺⚔️🌟', 13, 0, '2024-03-25 09:31:58', 'Midgard', 'Wilenskraft', 32, 'https://worldofwarcraft.blizzard.com/fr-fr/', 'Homme', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_droits`
--

CREATE TABLE `utilisateurs_droits` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs_droits`
--

INSERT INTO `utilisateurs_droits` (`id`, `user_id`, `is_admin`) VALUES
(8, 15, 0),
(9, 16, 0),
(10, 8, 1),
(11, 2, 0),
(12, 9, 0),
(13, 5, 0),
(14, 10, 0),
(15, 11, 0),
(16, 13, 0),
(17, 15, 0),
(18, 16, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`blog_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Index pour la table `commentaires_thread`
--
ALTER TABLE `commentaires_thread`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Index pour la table `utilisateurs_droits`
--
ALTER TABLE `utilisateurs_droits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentaires_thread`
--
ALTER TABLE `commentaires_thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `utilisateurs_droits`
--
ALTER TABLE `utilisateurs_droits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  ADD CONSTRAINT `commentaires_blog_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `utilisateurs_droits` (`id`);

--
-- Contraintes pour la table `utilisateurs_droits`
--
ALTER TABLE `utilisateurs_droits`
  ADD CONSTRAINT `utilisateurs_droits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
