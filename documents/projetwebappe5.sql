-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 08 Avril 2024 à 06:48
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
  `corps_text` text NOT NULL,
  `nombre_commentaires` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `titre`, `auteur`, `date_publication`, `tags`, `nombre_vues`, `description`, `corps_text`, `nombre_commentaires`) VALUES
(1, 'blog-2-806x440', 'Présentation des raccourcis clavier, notre première fonctionnalité en laboratoire', 'Wolfmaul Tarvard', '2024-03-19 13:07:50', 'Jobs', 375, 'Nous voulons rendre plus facile d\'en savoir plus sur une question et de mettre en évidence les faits clés à son sujet, comme la popularité de la question, le nombre de personnes intéressées par elle et qui est le public. Pour accomplir...', 'Nous sommes ravis de vous présenter notre première fonctionnalité en laboratoire : les raccourcis clavier. Ces outils sont conçus pour optimiser votre expérience utilisateur et accroître votre productivité. Nous comprenons l\'importance de simplifier les tâches répétitives et de rendre la navigation plus fluide.\r\n\r\nAvec les raccourcis clavier, nous vous offrons une nouvelle manière d\'interagir avec notre plateforme. Plus besoin de naviguer à travers de multiples menus ou de recourir à des clics répétitifs. Désormais, vous pouvez accomplir vos actions préférées en un clin d\'œil, grâce à des combinaisons de touches simples et intuitives.\r\n\r\nQue vous soyez un habitué des raccourcis clavier ou que vous découvriez cette fonctionnalité pour la première fois, nous avons conçu une expérience accessible à tous. Notre objectif est de rendre votre utilisation de notre plateforme plus efficace et plus agréable.\r\n\r\nRestez à l\'écoute pour découvrir les raccourcis clavier spécifiques que nous avons intégrés, ainsi que les conseils pour les utiliser de manière optimale. Nous sommes impatients de recueillir vos retours et de continuer à améliorer cette fonctionnalité pour répondre au mieux à vos besoins.\r\n\r\nEssayez dès maintenant nos raccourcis clavier et laissez-vous surprendre par leur efficacité !', 1),
(2, 'blog-3-806x440', 'Quelles sont aujourd\'hui les meilleurs langages Web ?', 'FREYERMUTH Matys', '2024-03-19 13:18:31', 'HTML', 14, '\r\nDécouvrez les meilleurs langages Web pour vos projets aujourd\'hui\r\n\r\nLe paysage des langages de programmation Web évolue constamment, offrant aux développeurs une multitude d\'options pour créer des applications Web innovantes et performantes. Voici un aperçu des langages les plus populaires et puissants utilisés aujourd\'hui...', 'Nous allons vous présenter aujourd\'hui les langages Web les plus performants et populaires de notre ère numérique. Dans le domaine du développement Web, la sélection du langage de programmation approprié revêt une importance cruciale pour la création d\'applications et de sites Web dynamiques et interactifs. Parmi les meilleures options disponibles, trois langages se démarquent par leur polyvalence, leur robustesse et leur adaptabilité : JavaScript, Python et TypeScript.\r\n\r\nJavaScript est incontestablement le pilier du développement Web moderne. Il est largement utilisé pour créer des interfaces utilisateur interactives et des fonctionnalités dynamiques sur les sites Web. Avec l\'avènement des frameworks comme React.js et Vue.js, JavaScript a évolué pour devenir un langage incontournable pour le développement tant côté client que côté serveur, grâce à Node.js.\r\n\r\nPython, quant à lui, est réputé pour sa lisibilité et sa simplicité syntaxique. Bien qu\'il soit souvent associé au développement d\'applications de bureau et à l\'analyse de données, Python s\'est également imposé comme un choix de prédilection pour le développement Web. Des frameworks comme Django et Flask offrent des solutions puissantes pour la création rapide de sites Web robustes et évolutifs, faisant de Python une option attrayante pour les développeurs.\r\n\r\nEnfin, TypeScript gagne rapidement en popularité grâce à son typage statique et à sa capacité à détecter les erreurs de manière précoce dans le processus de développement. En étendant JavaScript avec des fonctionnalités de typage, TypeScript offre une sécurité accrue et une meilleure maintenance du code pour les projets de grande envergure. De plus en plus d\'entreprises adoptent TypeScript pour ses avantages en matière de productivité et de fiabilité dans le développement Web.\r\n\r\nEn conclusion, JavaScript, Python et TypeScript se distinguent comme les meilleurs langages Web de notre époque, chacun apportant ses propres avantages et répondant à des besoins spécifiques dans le paysage complexe du développement Web moderne. Que ce soit pour créer des applications dynamiques, des sites Web robustes ou des interfaces utilisateur innovantes, ces langages offrent des solutions puissantes et polyvalentes pour les développeurs du monde entier.', 0),
(3, 'blog-4-806x440', 'Comment renforcer sont mot de passe efficacement ?', 'FREYERMUTH Matys', '2024-03-19 13:20:26', 'Cybersécurité', 12, 'Nous allons vous guider pour renforcer efficacement votre mot de passe\r\n\r\nVotre mot de passe est la première ligne de défense pour protéger vos informations en ligne. Pour vous assurer une sécurité optimale, il est crucial de créer un mot de passe robuste et difficile à deviner. Suivez ces étapes simples pour renforcer efficacement votre mot de passe...', 'Nous comprenons l\'importance cruciale d\'un mot de passe solide pour sécuriser vos informations en ligne. À l\'heure où la cybercriminalité est en constante évolution, il est impératif de prendre des mesures proactives pour renforcer la sécurité de vos comptes. C\'est pourquoi nous allons vous guider à travers les étapes essentielles pour créer et maintenir un mot de passe robuste.\r\n\r\nTout d\'abord, la longueur compte. Optez pour des mots de passe longs, car plus ils sont longs, plus ils sont complexes à décrypter. Idéalement, visez une combinaison d\'au moins 12 caractères, en incluant des lettres majuscules et minuscules, des chiffres et des caractères spéciaux. Cette diversité rend votre mot de passe beaucoup plus difficile à deviner ou à craquer par des techniques automatisées.\r\n\r\nEnsuite, évitez les informations personnelles évidentes. Les mots de passe basés sur des informations comme votre nom, votre date de naissance ou le nom de votre animal de compagnie sont faciles à deviner pour quelqu\'un qui vous connaît bien ou qui a accès à vos informations publiques. Optez plutôt pour des combinaisons aléatoires ou des phrases secrètes qui n\'ont pas de lien avec votre vie personnelle.\r\n\r\nDe plus, ne réutilisez pas les mêmes mots de passe pour différents comptes. Bien que cela puisse sembler pratique, cela augmente considérablement votre vulnérabilité en cas de violation de données sur l\'un de vos comptes. Utilisez plutôt un gestionnaire de mots de passe fiable pour stocker en toute sécurité vos différents mots de passe.\r\n\r\nEnfin, n\'oubliez pas de mettre à jour régulièrement vos mots de passe. Le fait de changer périodiquement vos mots de passe réduit le risque que des personnes non autorisées aient un accès prolongé à vos comptes. Fixez-vous un rappel pour modifier vos mots de passe au moins tous les trois à six mois, ou immédiatement après avoir eu connaissance d\'une éventuelle compromission de compte.\r\n\r\nEn suivant ces conseils simples mais essentiels, vous pouvez renforcer efficacement la sécurité de vos comptes en ligne et protéger vos informations personnelles et financières contre les menaces numériques croissantes. N\'oubliez pas : la sécurité commence par un mot de passe solide !', 0),
(4, 'blog-5-linux', 'Comment installer une machine virtuelle linux en 20 étapes ?', 'Wolfmaul Tarvard', '2024-03-19 13:20:26', 'Linux', 64, 'Nous allons vous guider à travers un processus simple en 20 étapes pour installer une machine virtuelle Linux sur votre système. Suivez attentivement chaque étape pour créer votre propre environnement Linux virtuel.', 'Étape 1 : Choix du logiciel de virtualisation\r\nDéterminez le logiciel de virtualisation que vous souhaitez utiliser, tel que VirtualBox, VMware ou KVM/QEMU.\r\n\r\nÉtape 2 : Téléchargement de l\'image ISO de Linux\r\nTéléchargez l\'image ISO de la distribution Linux de votre choix depuis le site officiel correspondant.\r\n\r\nÉtape 3 : Installation du logiciel de virtualisation\r\nInstallez le logiciel de virtualisation sur votre système en suivant les instructions spécifiques à votre système d\'exploitation.\r\n\r\nÉtape 4 : Création d\'une nouvelle machine virtuelle\r\nOuvrez le logiciel de virtualisation et créez une nouvelle machine virtuelle en spécifiant les paramètres tels que la taille de la mémoire, l\'espace disque et le nombre de processeurs.\r\n\r\nÉtape 5 : Configuration des paramètres de la machine virtuelle\r\nDéfinissez les paramètres de la machine virtuelle tels que le nom, le type et la version du système d\'exploitation.\r\n\r\nÉtape 6 : Attribution de l\'image ISO à la machine virtuelle\r\nMontez l\'image ISO téléchargée sur la machine virtuelle afin de démarrer le processus d\'installation de Linux.\r\n\r\nÉtape 7 : Démarrage de la machine virtuelle\r\nDémarrez la machine virtuelle et suivez les instructions pour démarrer le processus d\'installation de Linux.\r\n\r\nÉtape 8 : Sélection de la langue et du clavier\r\nChoisissez la langue et le clavier appropriés pour votre installation de Linux.\r\n\r\nÉtape 9 : Partitionnement du disque\r\nPartitionnez le disque virtuel selon vos besoins, en créant des partitions pour le système d\'exploitation, la racine, le swap, etc.\r\n\r\nÉtape 10 : Installation du système de base\r\nInstallez le système de base de Linux en suivant les instructions fournies par le programme d\'installation.\r\n\r\nÉtape 11 : Configuration du réseau\r\nConfigurez les paramètres réseau de la machine virtuelle pour permettre la connectivité Internet.\r\n\r\nÉtape 12 : Installation des pilotes et des logiciels additionnels\r\nInstallez les pilotes et les logiciels additionnels nécessaires pour optimiser les performances de la machine virtuelle.\r\n\r\nÉtape 13 : Configuration des mises à jour automatiques\r\nConfigurez les mises à jour automatiques du système pour maintenir votre machine virtuelle à jour.\r\n\r\nÉtape 14 : Configuration des paramètres de sécurité\r\nAppliquez les meilleures pratiques de sécurité en configurant les pare-feu, les politiques de mot de passe, etc.\r\n\r\nÉtape 15 : Personnalisation de l\'environnement de bureau\r\nPersonnalisez l\'environnement de bureau selon vos préférences en installant des thèmes, des icônes et des extensions.\r\n\r\nÉtape 16 : Installation de logiciels supplémentaires\r\nInstallez les applications et les outils supplémentaires dont vous avez besoin pour votre environnement de développement ou d\'utilisation.\r\n\r\nÉtape 17 : Configuration des partages de fichiers\r\nConfigurez les partages de fichiers entre votre système hôte et votre machine virtuelle pour faciliter le transfert de fichiers.\r\n\r\nÉtape 18 : Test de la machine virtuelle\r\nEffectuez des tests pour vous assurer que votre machine virtuelle fonctionne correctement et répond à vos besoins.\r\n\r\nÉtape 19 : Sauvegarde de la machine virtuelle\r\nCréez une sauvegarde de votre machine virtuelle une fois que vous avez terminé la configuration initiale pour éviter toute perte de données.\r\n\r\nÉtape 20 : Exploration et utilisation\r\nExplorez votre nouvelle machine virtuelle Linux et profitez de son potentiel pour vos projets et expérimentations informatiques.\r\n\r\nFélicitations ! Vous avez maintenant une machine virtuelle Linux opérationnelle et prête à être utilisée pour diverses tâches et expérimentations.', 0),
(5, 'blog-6-code', 'Comment se lancer dans le développement informatique ?', 'User_0012', '2024-03-19 13:20:26', 'Code', 13, 'Nous allons vous guider dans vos premiers pas dans le monde passionnant du développement informatique.\r\n\r\nLe développement informatique est un domaine en constante évolution qui offre d\'innombrables opportunités pour ceux qui souhaitent créer, innover et résoudre des problèmes à l\'aide de la technologie. Que vous soyez un novice complet ou que vous ayez déjà une certaine expérience, nos conseils vous aideront à démarrer sur la bonne voie.', '1. Apprenez les bases : Commencez par vous familiariser avec les concepts fondamentaux de la programmation. Apprenez un langage de programmation tel que Python, Java, ou JavaScript, qui sont largement utilisés et offrent une base solide pour développer vos compétences.\r\n\r\n2. Pratiquez régulièrement : La clé pour devenir un bon développeur est la pratique régulière. Créez des projets simples au début, puis progressez vers des projets plus complexes à mesure que vous gagnez en confiance et en compétence.\r\n\r\n3. Utilisez des ressources en ligne : Internet regorge de ressources gratuites et payantes pour apprendre la programmation. Des tutoriels vidéo aux cours en ligne, en passant par les forums de discussion et les communautés de développeurs, profitez de ces ressources pour enrichir vos connaissances et résoudre vos problèmes.\r\n\r\n4. Contribuez à des projets open source : Participer à des projets open source est un excellent moyen d\'apprendre de nouveaux concepts, de travailler en collaboration avec d\'autres développeurs et de renforcer votre CV. Recherchez des projets qui vous intéressent et commencez à contribuer dès que vous vous sentez prêt.\r\n\r\n5. Restez curieux et adaptable : Le domaine de la technologie évolue rapidement, il est donc important de rester curieux et ouvert aux nouvelles idées et aux nouvelles technologies. Soyez prêt à apprendre continuellement et à vous adapter aux changements pour rester pertinent dans le domaine du développement informatique.\r\n\r\nEn suivant ces étapes et en restant persévérant, vous serez sur la voie du succès dans le monde du développement informatique. N\'ayez pas peur de faire des erreurs, c\'est ainsi que l\'on apprend et que l\'on progresse dans ce domaine passionnant. Bonne chance dans votre parcours de développement informatique ', 0),
(6, 'blog-7-php', 'Comment configurer une base de donnés sur PHP MyAdmin ?', 'Kirby Loutre', '2024-03-19 13:20:26', 'PHP', 29, 'Nous allons vous guider à travers les étapes nécessaires pour configurer une base de données en utilisant PHPMyAdmin, un outil de gestion de base de données largement utilisé pour les serveurs web MySQL.', 'Étape 1 : Accès à PHPMyAdmin\r\nTout d\'abord, assurez-vous que vous avez accès à PHPMyAdmin sur votre serveur. Habituellement, vous pouvez y accéder via votre navigateur web en entrant l\'URL suivante : http://localhost/phpmyadmin ou en utilisant l\'adresse fournie par votre hébergeur web.\r\n\r\nÉtape 2 : Connexion à PHPMyAdmin\r\nUne fois sur la page d\'accueil de PHPMyAdmin, vous serez invité à vous connecter. Entrez vos identifiants MySQL (nom d\'utilisateur et mot de passe) pour accéder à l\'interface.\r\n\r\nÉtape 3 : Création d\'une nouvelle base de données\r\nDans l\'interface principale de PHPMyAdmin, recherchez la section "Créer une nouvelle base de données". Entrez un nom pour votre nouvelle base de données dans le champ prévu à cet effet. Assurez-vous de choisir un nom descriptif et unique.\r\n\r\nÉtape 4 : Définition des tables\r\nUne fois la base de données créée, vous pouvez commencer à définir ses tables. Cliquez sur le nom de la base de données que vous venez de créer, puis sur l\'onglet "Structure". À partir de là, vous pouvez ajouter des tables en spécifiant les champs et les types de données pour chaque colonne.\r\n\r\nÉtape 5 : Importation de données (optionnel)\r\nSi vous avez des données existantes à importer dans votre base de données, PHPMyAdmin vous permet également d\'importer des fichiers SQL ou CSV. Cela peut être utile si vous migrez depuis une autre base de données ou si vous souhaitez simplement pré-remplir votre nouvelle base de données avec des données existantes.\r\n\r\nÉtape 6 : Gestion des utilisateurs (optionnel)\r\nEnfin, vous pouvez également utiliser PHPMyAdmin pour gérer les utilisateurs et leurs privilèges d\'accès à la base de données. Cela peut être fait via l\'onglet "Privilèges", où vous pouvez créer de nouveaux utilisateurs, définir leurs privilèges et révoquer l\'accès si nécessaire.\r\n\r\nEn suivant ces étapes simples, vous serez en mesure de configurer et de gérer une base de données avec PHPMyAdmin de manière efficace et sécurisée. Si vous rencontrez des problèmes ou avez des questions, n\'hésitez pas à consulter la documentation officielle de PHPMyAdmin ou à demander de l\'aide sur les forums spécialisés.', 0);

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
(1, 1, 'En vrai.....\r\nL\'article est top !', '2024-03-21 17:32:17', 8),
(3, 4, 'kkk', '2024-04-05 06:18:27', 2),
(4, 4, 'hh', '2024-04-05 06:47:39', 2),
(5, 4, 'jj', '2024-04-05 06:49:01', 2),
(6, 4, 'za', '2024-04-05 06:50:08', 2),
(7, 4, 'test', '2024-04-05 06:52:02', 2),
(8, 1, 'b', '2024-04-05 07:00:37', 2);

--
-- Déclencheurs `commentaires_blog`
--
DELIMITER $$
CREATE TRIGGER `update_nb_commentaires` AFTER INSERT ON `commentaires_blog` FOR EACH ROW BEGIN
    UPDATE blogs
    SET nb_commentaires = nb_commentaires + 1
    WHERE id_blogs = NEW.blog_id;
END
$$
DELIMITER ;

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
  `auteur` tinytext COLLATE utf8mb4_bin NOT NULL,
  `certifier` int(8) NOT NULL,
  `imageBg` tinytext COLLATE utf8mb4_bin NOT NULL,
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

INSERT INTO `posts` (`id`, `logo`, `auteur`, `certifier`, `imageBg`, `titre`, `contenu`, `resolu`, `note`, `tags`, `index_tri`, `created_at`, `nbReponses`, `nbVues`) VALUES
(1, 'logoProfile_1', 'Meyer Matthieu', 0, 'wowArmorThread1', 'Je suis coincé, quelle est la meilleur arumure sur Wow ?', '🤔 Salut ! Je suis actuellement coincé dans WoW et j\'ai du mal à décider quelle armure serait la meilleure pour mon personnage. J\'ai besoin de conseils pour choisir la meilleure protection possible. Quelle armure me recommandez-vous et pourquoi ? 💼🛡️.', 1, '3.6', 'WorldOfWarcraft', 'JeuxVideo', '2024-03-21 13:10:07', 42, 53),
(2, 'loutrelogo', 'KirbyFanLoutre12', 1, 'entretien-embauche_post2', 'Comment préparer un entretien ?', 'Ne serait-il pas formidable de savoir exactement quelles questions un responsable du recrutement vous poserait lors de votre prochain entretien d\'embauche ? Malheureusement, nous ne pouvons pas lire dans les pensées, mais nous vous offrirons la meilleure alternative : une liste de plus de 40 questions d\'entrevue les plus couramment posées, accompagné...', 0, '4.7', 'Jobs', 'Jobs', '2024-03-21 13:23:28', 2, 19),
(3, 'logoProfile_2', 'Wagner Amber', 0, 'entretien_post4', 'Combien gagnent les développeurs web ?', 'Je pense à faire carrière dans le développement web et je me demandais combien gagnais un développeur débutant dans le WEB.', 0, '?', 'Jobs', 'Jobs', '2024-03-21 13:25:41', 0, 19),
(4, 'logoProfile_1', 'Meyer Matthieu', 1, 'Remnant 2 Challenger_post3', 'Connaissez-vous un jeu similaire à Remnant 2 ?', 'Connaissez-vous un jeu similaire à Remnant 2, de préférence un jeu d\'action-aventure avec des éléments de tir à la troisième personne et un système de combat exigeant, dans un univers post-apocalyptique ou fantastique ? 🎮', 2, '?', 'JeuxVideo', 'JeuxVideo', '2024-03-21 13:26:30', 0, 5),
(5, 'loutrelogo', 'KirbyFanLoutre12\r\n', 1, 'siteDynamique_post5', 'Crée un site dynamique rapidement ?', 'Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un temps record ? Malheureusement, nous ne possédons pas le don de lire dans les pensées, mais nous vous proposons la meilleure alternative : un guide exhaustif pour vous aider à accomplir cette tâche avec efficacité et rapidité. Bien que nous ne puissions pas fournir une solution...', 0, '4.2', 'HTML', 'WEB', '2024-03-21 13:29:55', 2, 21),
(6, 'LogoXiode', 'FREYERMUTH Matys', 1, 'conseils_cv_de_developpeur_post6', 'Comment faire un bon CV pour un entretien ?', 'Imaginez-vous pouvoir présenter un CV qui réponde d\'avance aux attentes du recruteur, comme si vous pouviez lire dans ses pensées lors de votre prochain entretien d\'embauche. Bien que cela soit impossible, je peux vous offrir une solution alternative : un CV soigneusement conçu pour répondre aux attentes et aux questions les plus couramment posées lors des entretiens', 0, '4.6', 'Jobs', '', '2024-04-04 14:33:43', 0, 6);

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
(14, 'Quel âge a Kirby, le célèbre personnage rose de la franchise de jeux vidéo, et comment son apparence juvénile contraste-t-elle avec sa capacité à vaincre des ennemis redoutables et à sauver son univers coloré ?', '2024-03-21 09:52:09', 5);

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
(2, 'verouiller_logo', 'User_0012', 'User', 'test', 'test@gmail.com', '', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', 'Compte utilisateur de test', 99, 96, '2024-03-11 13:44:40', NULL, NULL, NULL, NULL, '', NULL),
(5, 'loutrelogo', 'KirbyFanLoutre12', 'Kirby', 'Loutre', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', 'Je m\'appelle Kirby et je suis un grand fan de loutres ! 🎮 Plonger dans les aventures colorées de Kirby est ma passion, et j\'adore explorer chaque recoin de ces mondes fantastiques avec un enthousiasme débordant. 🌟 \r\nQuand je ne suis pas occupé à sauver Dream Land, je me plonge dans tout ce qui concerne les loutres - de leurs comportements adorables à leurs habitats naturels fascinants. 🦦 \r\nJe suis toujours partant pour partager des faits amusants ou des vidéos mignonnes sur ces créatures aquatiques avec mes amis. \r\n\r\nAvec ma personnalité débordante de joie et mon amour pour Kirby et les loutres, je suis toujours prêt pour une aventure ludique et pleine de surprises ! 🌈', 14, 206, '2024-03-12 12:38:19', 'France', 'Paris', 32, NULL, 'Homme', NULL),
(8, 'LogoXiode', '', 'FREYERMUTH', 'Matys', 'matysfreyermuth@gmail.com', '0788606260', '$2y$10$UjYcCBd1.C0fMUvbadl02uk6BSXzrHXtU9r5tThArHxKoeX8AmkGO', '🌟 Créateur et administrateur passionné de ce site Web 🌐. Dédié à fournir une expérience utilisateur exceptionnelle, je m’engage à maintenir et à enrichir le contenu avec les dernières informations et tendances. Toujours à l’écoute des retours des utilisateurs pour améliorer le site. Ensemble, construisons une communauté florissante ! 💡🔨', 12, 1365, '2024-03-02 09:37:49', 'France', 'Strasbourg', 19, 'https://arial-games.000webhostapp.com/portfolio/portfolio_New/', 'Homme', 8),
(9, 'IconOzu3rol', 'ozu3rol', 'CRUGNOLA', 'LORIS', 'loris067@hotmail.fr', '', '$2y$10$TSj2QoXf.PwFyUZehNMrQ.UZuJiOlMwcnAXtkTURBgsNPld5uC52u', 'LOUTRE !', 12, 0, '2024-03-14 09:38:51', 'France', 'Strasbourg', 20, 'https://loriscrugnola.000webhostapp.com/index.php', 'Homme', NULL),
(10, 'logoAshley', '', 'Andrianarivony', 'Ashley', 'lantoharyashley@gmail.com', '', '$2y$10$Bdi3A5F81LL9K.BiOCq8eebPCqGkvah9jFa6POpDuARL6wZzdNYtK', '', 12, 0, '2024-03-14 09:39:52', 'France', 'Strasbourg', 22, 'https://www.ashley.go.yj.fr/', 'Homme', NULL),
(11, 'LogoWilliam', '', 'CARTA', 'William', 'william57650@yahoo.fr', '', '$2y$10$G4BY8Y2tQAe2hPFni5.MqO2pR9UhQ3o7Lo9MhjzOWxJXI14ds0pSu', '', 12, 0, '2024-03-18 12:52:34', 'France', 'Strasbourg', 23, 'https://william-carta.webador.fr/', 'Homme', NULL),
(13, 'logoProfile_1', '', 'Meyer', 'Matthieu', '', '', '', 'Je suis un esprit curieux, toujours avide d\'apprendre et de découvrir de nouvelles choses. Passionné par le pouvoir des mots, j\'aime explorer les différentes facettes de la langue pour communiquer et créer. Ma créativité s\'épanouit dans l\'écriture, où je cherche à capturer des idées et des émotions de manière authentique. Toujours en quête de défis intellectuels, je trouve de la joie dans la résolution de problèmes et dans la recherche de solutions innovantes. En somme, je suis un explorateur des possibilités infinies du monde et de l\'esprit humain.', 4, 39, '2024-03-25 09:21:32', 'France', 'Eckbolsheim', 29, NULL, 'Homme', NULL),
(15, 'logoProfile_2', '', 'Wagner', 'Ambre', 'test2@gmail.com', '', '', 'Salut, je m’appelle Ambre Wagner. Je suis une jeune débutante passionnée, inscrite depuis le 1er avril 2024. Originaire d’Allemagne, j’ai 18 ans et je me décris comme une femme. Mon site web est accessible ici. 🌟🇩🇪\r\n                        ', 4, 3, '2024-03-25 09:26:20', 'Allemagne', NULL, 18, NULL, 'Femme', NULL),
(16, 'logoProfile_3', '', 'Wolfmaul', 'Tarvard', 'test3@gmail.com', '', '', 'Je suis Tarvad Wolfmaul, un aventurier intrépide. Armé de mon intelligence acérée et de ma force brutale, je traque les mystères du monde avec une détermination sans faille. Mes yeux perçants scrutent l\'horizon, prêts à défendre les faibles et à poursuivre la vérité. Sous ma                        carapace de fer, mon cœur bat avec la ferveur d\'un héros, prêt à affronter tous les défis qui se dressent sur mon chemin. 🐺⚔️🌟', 13, 9, '2024-03-25 09:31:58', 'Midgard', 'Wilenskraft', 32, 'https://worldofwarcraft.blizzard.com/fr-fr/', 'Homme', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
