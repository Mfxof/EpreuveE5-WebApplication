-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 12 Mars 2024 à 17:00
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
(14, 'matys FREYERMUTH', 'xiode.gam@gmail.com', 'as\r\n', '2024-03-11 13:26:27');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `utilisateur` text NOT NULL,
  `likes` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `titre`, `contenu`, `utilisateur`, `likes`, `date`) VALUES
(14, 'L\'inflations des loutres', 'Lâ€™inflation des loutres est un phÃ©nomÃ¨ne fascinant qui a captivÃ© lâ€™attention des chercheurs et des amateurs de la faune. Bien que le terme â€œinflationâ€ puisse Ã©voquer des images de ballons gonflÃ©s, dans le cas des loutres, il sâ€™agit dâ€™un tout autre processus.\r\n\r\nLâ€™histoire de la Loutre dâ€™Europe\r\nLa Loutre dâ€™Europe (Lutra lutra) est une espÃ¨ce semi-aquatique qui vit dans les riviÃ¨res, les lacs et les zones humides dâ€™Europe et dâ€™Asie. Autrefois largement rÃ©pandue, elle a subi un dÃ©clin dramatique au cours du 20e siÃ¨cle. La fourrure de la loutre Ã©tait trÃ¨s prisÃ©e, et sa viande Ã©tait consommÃ©e pendant le carÃªme. De plus, lâ€™homme la considÃ©rait comme un concurrent, qualifiant souvent cet animal de â€œnuisibleâ€.\r\n\r\nAu dÃ©but des annÃ©es 80, la Loutre dâ€™Europe nâ€™Ã©tait prÃ©sente que dans certaines rÃ©gions de France, notamment le cÅ“ur du Massif Central et certains grands marais du littoral atlantique. Heureusement, des mesures de protection ont Ã©tÃ© mises en place, interdisant la chasse Ã  la loutre depuis 1972 et lui accordant le statut dâ€™espÃ¨ce protÃ©gÃ©e en 1981. Ces protections lÃ©gales, associÃ©es Ã  des amÃ©liorations environnementales, ont permis de freiner son dÃ©clin et dâ€™amorcer un mouvement de recolonisation.\r\n\r\nLe Plan National dâ€™Actions pour la Loutre\r\nEn France, la Loutre dâ€™Europe bÃ©nÃ©ficie dâ€™un Plan National dâ€™Actions (PNA) mis en place par le MinistÃ¨re de lâ€™Ã‰cologie. Ce plan vise Ã  Ã©laborer des stratÃ©gies pour la conservation de lâ€™espÃ¨ce. Le premier PNA, rÃ©digÃ© en 2009 par la SociÃ©tÃ© FranÃ§aise pour lâ€™Ã‰tude et la Protection des MammifÃ¨res (SFEPM), a permis dâ€™impulser une dynamique positive autour de la loutre. Actuellement, un second PNA est en cours pour la pÃ©riode 2019-2028, toujours animÃ© par la SFEPM. Son objectif est de poursuivre la recolonisation de lâ€™aire de rÃ©partition originelle de la loutre, tout en minimisant les risques anthropiques tels que les collisions avec des vÃ©hicules.\r\n\r\nLoutres et Ã©cosystÃ¨mes\r\nLa rÃ©introduction des loutres dans certaines rÃ©gions a eu des effets sur les Ã©cosystÃ¨mes locaux. Par exemple, au large de Vancouver, au Canada, les loutres ont dÃ©vorÃ© les crustacÃ©s dont dÃ©pendaient les pÃªcheurs locaux. Cependant, une analyse rÃ©vÃ¨le que les retombÃ©es Ã©conomiques sont positives pour la rÃ©gion. Les loutres contribuent Ã  la santÃ© des Ã©cosystÃ¨mes aquatiques en rÃ©gulant les populations de proies et en favorisant la biodiversitÃ©.\r\n\r\nEn somme, lâ€™inflation des loutres, bien quâ€™elle ne soit pas littÃ©ralement liÃ©e Ã  des ballons gonflables, est un phÃ©nomÃ¨ne qui mÃ©rite notre attention. ProtÃ©ger ces adorables crÃ©atures contribue non seulement Ã  leur survie, mais aussi Ã  lâ€™Ã©quilibre de nos Ã©cosystÃ¨mes. ðŸ¦¦ðŸŒ¿', 'KirbyFanLoutre12', -214748373, '2024-03-11 15:49:20'),
(28, 'Les patates ? Leurs histoire ?', 'Lâ€™inflation des loutres est un phÃ©nomÃ¨ne fascinant qui a captivÃ© lâ€™attention des chercheurs et des amateurs de la faune. Bien que le terme â€œinflationâ€ puisse Ã©voquer des images de ballons gonflÃ©s, dans le cas des loutres, il sâ€™agit dâ€™un tout autre processus.\r\n\r\nLâ€™histoire de la Loutre dâ€™Europe\r\nLa Loutre dâ€™Europe (Lutra lutra) est une espÃ¨ce semi-aquatique qui vit dans les riviÃ¨res, les lacs et les zones humides dâ€™Europe et dâ€™Asie. Autrefois largement rÃ©pandue, elle a subi un dÃ©clin dramatique au cours du 20e siÃ¨cle. La fourrure de la loutre Ã©tait trÃ¨s prisÃ©e, et sa viande Ã©tait consommÃ©e pendant le carÃªme. De plus, lâ€™homme la considÃ©rait comme un concurrent, qualifiant souvent cet animal de â€œnuisibleâ€.\r\n\r\nAu dÃ©but des annÃ©es 80, la Loutre dâ€™Europe nâ€™Ã©tait prÃ©sente que dans certaines rÃ©gions de France, notamment le cÅ“ur du Massif Central et certains grands marais du littoral atlantique. Heureusement, des mesures de protection ont Ã©tÃ© mises en place, interdisant la chasse Ã  la loutre depuis 1972 et lui accordant le statut dâ€™espÃ¨ce protÃ©gÃ©e en 1981. Ces protections lÃ©gales, associÃ©es Ã  des amÃ©liorations environnementales, ont permis de freiner son dÃ©clin et dâ€™amorcer un mouvement de recolonisation.\r\n\r\nLe Plan National dâ€™Actions pour la Loutre\r\nEn France, la Loutre dâ€™Europe bÃ©nÃ©ficie dâ€™un Plan National dâ€™Actions (PNA) mis en place par le MinistÃ¨re de lâ€™Ã‰cologie. Ce plan vise Ã  Ã©laborer des stratÃ©gies pour la conservation de lâ€™espÃ¨ce. Le premier PNA, rÃ©digÃ© en 2009 par la SociÃ©tÃ© FranÃ§aise pour lâ€™Ã‰tude et la Protection des MammifÃ¨res (SFEPM), a permis dâ€™impulser une dynamique positive autour de la loutre. Actuellement, un second PNA est en cours pour la pÃ©riode 2019-2028, toujours animÃ© par la SFEPM. Son objectif est de poursuivre la recolonisation de lâ€™aire de rÃ©partition originelle de la loutre, tout en minimisant les risques anthropiques tels que les collisions avec des vÃ©hicules.\r\n\r\nLoutres et Ã©cosystÃ¨mes\r\nLa rÃ©introduction des loutres dans certaines rÃ©gions a eu des effets sur les Ã©cosystÃ¨mes locaux. Par exemple, au large de Vancouver, au Canada, les loutres ont dÃ©vorÃ© les crustacÃ©s dont dÃ©pendaient les pÃªcheurs locaux. Cependant, une analyse rÃ©vÃ¨le que les retombÃ©es Ã©conomiques sont positives pour la rÃ©gion. Les loutres contribuent Ã  la santÃ© des Ã©cosystÃ¨mes aquatiques en rÃ©gulant les populations de proies et en favorisant la biodiversitÃ©.\r\n\r\nEn somme, lâ€™inflation des loutres, bien quâ€™elle ne soit pas littÃ©ralement liÃ©e Ã  des ballons gonflables, est un phÃ©nomÃ¨ne qui mÃ©rite notre attention. ProtÃ©ger ces adorables crÃ©atures contribue non seulement Ã  leur survie, mais aussi Ã  lâ€™Ã©quilibre de nos Ã©cosystÃ¨mes. ðŸ¦¦ðŸŒ¿\r\n\r\n1: Le Plan National dâ€™Actions pour la Loutre | SFEPM 2: AprÃ¨s avoir frÃ´lÃ© lâ€™extinction, les loutres font leur grand retour\r\n\r\nEn savoir plus\r\n1\r\n\r\nsfepm.org\r\n2\r\n\r\nnationalgeographic.fr\r\n3\r\n\r\ninsee.fr\r\n4\r\n\r\nsfepm.org\r\n5\r\n\r\ngeo.fr\r\n+1 plus\r\n\r\n\r\nVous\r\nCrÃ©e moi un cours sur les patate\r\nCopilot\r\nLa pomme de terre, Ã©galement appelÃ©e patate dans le registre informel ou en franÃ§ais canadien, suisse ou belge, est un tubercule comestible produit par lâ€™espÃ¨ce Solanum tuberosum. Originaire de la cordillÃ¨re des Andes au PÃ©rou, elle est cultivÃ©e dans plus de 150 pays sous presque toutes les latitudes habitÃ©es. Voici quelques points clÃ©s sur la pomme de terre :\r\n\r\nHistoire et Origine:\r\nLa pomme de terre est utilisÃ©e depuis environ 8 000 ans dans les Andes.\r\nElle a Ã©tÃ© introduite en Europe Ã  la fin du XVIe siÃ¨cle aprÃ¨s la dÃ©couverte de lâ€™AmÃ©rique par les conquistadors espagnols.\r\nNutrition et Culture:\r\nLa pomme de terre est une source importante de glucides, principalement sous forme de fÃ©cule.\r\nSelon son mode de cuisson, elle peut apporter des quantitÃ©s notables de protÃ©ines et de vitamines.\r\nCultivÃ©e localement et recommandÃ©e par lâ€™ONU pour atteindre la sÃ©curitÃ© alimentaire1.\r\nElle est la principale denrÃ©e alimentaire non cÃ©rÃ©aliÃ¨re du monde.\r\nProductivitÃ© et Utilisation:\r\nLa pomme de terre est la culture alimentaire la plus productive, produisant plus de matiÃ¨re sÃ¨che Ã  lâ€™hectare que les cÃ©rÃ©ales.\r\nEnviron 85 % de la matiÃ¨re sÃ¨che produite par la plante est comestible pour lâ€™homme.\r\nSon rendement moyen est dâ€™environ 17 tonnes Ã  lâ€™hectare au niveau mondial.\r\nIndustrie de Transformation:\r\nLa fÃ©cule de pomme de terre est utilisÃ©e dans lâ€™industrie agro-alimentaire, cosmÃ©tique, pharmaceutique et industrielle.\r\nEn somme, la patate est bien plus quâ€™un simple tubercule : elle est un aliment essentiel Ã  lâ€™humanitÃ© et joue un rÃ´le crucial dans notre sÃ©curitÃ© alimentaire1. ðŸ¥”ðŸŒŽ', 'FanDePatateMaisPasDeFristes', 13, '2024-03-11 16:11:46'),
(29, 'Test DÃ©pos documents', 'Oui que un test', 'MOI', 1, '2024-03-11 16:15:29'),
(30, 'Artcile OUi', 'as', 'sa', 0, '2024-03-12 13:05:05'),
(31, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:41'),
(32, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:44'),
(33, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:45'),
(34, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:45'),
(35, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:45'),
(36, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:46'),
(37, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:46'),
(38, 'Quelle est la meilleur armure sur Wow ?', 'En vrai ? \r\nJSP', 'FanDePatateMaisPasDeFristes', 0, '2024-03-12 13:05:47');

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
(1, '', 'FREYERMUTH', 'matys', 'matysfreyermuth@gmail.com', '0', '$2y$10$Hs44h6mRmQUXavpE/Y1lD.KyCD.y5HcSkocsl7B8eiECP2.8JeQZa', '2024-03-11 13:44:40'),
(2, '', 'test', 'test', 'test@gmail.com', '0', '$2y$10$dPnsYY/NDcVR4.VCucAUfegihcP2O/d6emCFM0lex6A2r89UH5dSa', '2024-03-11 13:44:40'),
(4, '', 'sas', 'as', 'ass@as.as', '', '$2y$10$0GoHP1fvWHT3S.6UOPzOH.zMQRyrJNt9.dopNl//BJuqv/jIjws02', '2024-03-11 13:48:38'),
(5, 'KirbyFanLoutre12', 'Kirby', 'Loutre<3', 'fanloutre@gmail.com', '', '$2y$10$.8fvtLun8u5cLsE0NK2bWuAqaGD6y4lxdxgRYwkPe4iFFY4V6VaG.', '2024-03-12 12:38:19'),
(7, 'matys FREYERMUTH', '', '', 'moi@sa.sa', '', '$2y$10$rN0sHRrCJz2XrYtUDNQF4uXf/j42J0iPGYb16dhDjMdSVo7iU18KS', '2024-03-12 14:44:10');

--
-- Index pour les tables exportées
--

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
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
