-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 juin 2020 à 15:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `user`
--

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(7) NOT NULL,
  `question` varchar(250) NOT NULL,
  `continent` varchar(8) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `pays` varchar(25) NOT NULL,
  `drapeaux` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COMMENT='cette table contient les questionnaires';

--
-- Déchargement des données de la table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `theme`, `question`, `continent`, `longitude`, `latitude`, `pays`, `drapeaux`) VALUES
(1, 'amusant', 'Les îles Canaries se trouvent sur mes côtes, je suis un pays de deux syllabes et Tanger est une de mes villes. Quel pays suis-je ?\r\n          ', 'afrique', -7.3362482, 31.1728205, 'maroc', 'country-flags-master/png250px/ma.png'),
(2, 'amusant', 'Je suis un pays d\'Afrique de l\'Ouest.\r\nLe president de mon pays est Faure Gnassingbé.\r\nMon nom est constitué de 2 syllabes.', 'afrique', 1.0199765, 8.7800265, 'togo', 'country-flags-master/png250px/tg.png'),
(3, 'amusant', 'Isis fut une de mes déeses et un fleuvre me traverse. Qui suis-je ?', 'afrique', 29.2675469, 26.2540493, 'egypte', 'country-flags-master/png250px/eg.png'),
(4, 'amusant', 'Mon plat national est le thiep ?', 'afrique', -14.4529612, 14.4750607, 'senegal', 'country-flags-master/png250px/sn.png'),
(5, 'amusant', 'Avec plusieurs de mon premier, on forme une phrase.\r\nMon deuxieme est l\'aliment principal chinois.\r\nMon troisieme esi le \'ton\' au feminin.\r\nMon quaatrieme est le le lit des oiseaux.\r\nMon tout est un pays désertique.', 'afrique', -9.2399263, 20.2540382, 'mauritanie', 'country-flags-master/png250px/mr.png'),
(6, 'curieux', 'Dans quel pays se situe le cap de Bonne-Espérance ?\r\n', 'afrique', 24.991639, -28.8166236, 'afrique du sud', 'country-flags-master/png250px/za.png'),
(7, 'curieux', 'Lequel pays fut une colonie portugaise durant 5 siècles ?', 'afrique', 35.953516, -17.903274, 'mozambie', 'country-flags-master/png250px/mz.png'),
(8, 'curieux', 'Dans quel pays se situe le Kilimandjaro ?', 'afrique', 35.7878438, -6.5247123, 'tanzanie', 'country-flags-master/png250px/tz.png'),
(9, 'curieux', 'Quel état insulaire d\'Afrique constitue la cinquième île du monde en superficie ?', 'afrique', 46.4416422, -18.9249604, 'madagascar', 'country-flags-master/png250px/mg.png'),
(10, 'curieux', 'Je suis situé entre la Méditerranée et l\'Atlantique et je suis voisin du Sahara, chez moi on paye avec le dirham.\r\n', 'afrique', -7.3362482, 31.1728205, 'maroc', 'country-flags-master/png250px/ma.png'),
(19, 'amusant', ' Quel est le pays le plus froid en amerique ?\r\n', 'amerique', -107.9917071, 61.0666922, 'canada', 'country-flags-master/png250px/ca.png'),
(20, 'amusant', ' Donald Trump est le président de quel pays ?\r\n', 'amerique', -100.4458825, 39.7837304, 'usa', 'country-flags-master/png250px/us.png'),
(21, 'amusant', 'Le sombrero est associé à quel pays?', 'amerique', -100.0000375, 22.5000485, 'mexique', 'country-flags-master/png250px/mx.png'),
(22, 'amusant', 'Dans quel pays se touve l\'île Big Major Cay où on peut nager avec les cochons?', 'amerique', -78.0000547, 24.7736546, 'bahamas', 'country-flags-master/png250px/bs.png'),
(23, 'amusant', 'Étant principalement dans l\'hémisphére sud, c\'est Pedro Alvarez qui m\'a découvert au XVIe siecle puis je suis devenu le 1er producteur de café au monde.', 'amerique', -53.2, -10.3333333, 'bresil', 'country-flags-master/png250px/br.png'),
(24, 'curieux', 'Quel pays se trouve la plus grande ville d\'amerique?', 'amerique', -100.0000375, 22.5000485, 'mexique', 'country-flags-master/png250px/mx.png'),
(25, 'curieux', 'Par quel pays sont bordés les États-Unis, au nord?', 'amerique', -107.9917071, 61.0666922, 'canada', 'country-flags-master/png250px/ca.png'),
(26, 'curieux', 'Dans quelle ville se situe l\'Empire State Building?', 'amerique', -100.4458825, 39.7837304, 'usa', 'country-flags-master/png250px/us.png'),
(27, 'curieux', 'Quel pays se trouve à l\'extrémité sud de l\'amerique centrale et à l\'extrémité nord de l\'amerique du sud?', 'amerique', -80.087811, 8.459103, 'panama', 'country-flags-master/png250px/pa.png'),
(28, 'amusant', 'Quel est le pays dont les citoyens se déplacent le plus à vélo ?', 'europe', 5.5412468, 52.2476498, 'pays bas', 'country-flags-master/png250px/nl.png'),
(29, 'amusant', 'La bière vous fait pensez à quel pays ?', 'europe', 10.4234469, 51.0834196, 'allemagne', 'country-flags-master/png250px/de.png'),
(30, 'amusant', 'Où trouve-t-on le plus grand nombre de voitures par habitant ?', 'europe', 6.1296751, 49.8158683, 'luxembourg', 'country-flags-master/png250px/lu.png'),
(31, 'amusant', 'Je suis connue pour mes pommes de terre cultivées dans une terre sablonneuse.', 'europe', 1.8883335, 46.603354, 'france', 'country-flags-master/png250px/fr.png'),
(32, 'amusant', 'Sa devise nationale est \"Alt for Norge\"', 'europe', 11.5280364, 64.5731537, 'norvege', 'country-flags-master/png250px/no.png'),
(33, 'curieux', 'Dans quel pays se trouve le village qui a donné son nom aux accords de « Schengen »?', 'europe', 6.1296751, 49.8158683, 'luxembourg', 'country-flags-master/png250px/lu.png'),
(34, 'curieux', 'Où se trouve le Cap Nord?', 'europe', 11.5280364, 64.5731537, 'norvege', 'country-flags-master/png250px/no.png'),
(35, 'curieux', 'Dans quel pays se situe la Banque centrale européenne?', 'europe', 10.4234469, 51.0834196, 'allemagne', 'country-flags-master/png250px/de.png'),
(36, 'curieux', 'Quel pays s\'est récemment opposé au nouvel accord commercial avec les Etats-Unis?', 'europe', 1.8883335, 46.603354, 'france', 'country-flags-master/png250px/fr.png'),
(37, 'curieux', 'Quel est le pays qui a rejoint l\'Union européenne le plus récemment ?', 'europe', 17.0118954, 45.5643442, 'croatie', 'country-flags-master/png250px/hr.png'),
(38, 'amusant', 'Quel pays se trouve la ville où est né le covid-19?', 'asie', 104.999927, 35.000074, 'chine', 'country-flags-master/png250px/cn.png'),
(39, 'amusant', 'Quel pays ARIGATŌ signifie MERCI ?', 'asie', 139.2394179, 36.5748441, 'japon', 'country-flags-master/png250px/jp.png'),
(40, 'amusant', 'Colomb croyait être chez moi, un pays où les habitants preferent avoir des garçons que des filles et où les vaches possédent une carte d\'identité. Qui suis-je?', 'asie', 78.6677428, 22.3511148, 'inde', 'country-flags-master/png250px/in.png'),
(41, 'amusant', 'Chez moi le CHOLLIMA, un cheval mythique est l\'animal national.', 'asie', 127.6961188, 36.638392, 'coree du sud', 'country-flags-master/png250px/kr.png'),
(42, 'amusant', 'Je suis à l\'origine de deux choses, le red bull et chat siamois?', 'asie', 100.83273, 14.8971921, 'thailande', 'country-flags-master/png250px/th.png'),
(43, 'curieux', ' Où se trouve la Mecque ?', 'asie', 42.3528328, 25.6242618, 'arabie saoudite', 'country-flags-master/png100px/sa.png'),
(44, 'curieux', 'Quel est le deuxieme pays le plus peuplé du monde?', 'asie', 78.6677428, 22.3511148, 'inde', 'country-flags-master/png250px/in.png'),
(45, 'curieux', 'Où se trouve la mer d\'Okhotsk ?\r\n', 'asie', 97.7453061, 64.6863136, 'russie', 'country-flags-master/png250px/ru.png'),
(46, 'curieux', 'Ma capitale est Kaboul.', 'asie', 66.2385139, 33.7680065, 'afganistan', 'country-flags-master/png250px/af.png'),
(47, 'curieux', 'Dans quel pays se trouve Bangkok?', 'asie', 100.83273, 14.8971921, 'thailande', 'country-flags-master/png250px/th.png'),
(48, 'curieux', 'Où trouve t-on les Maoris?', 'oceanie', 172.8344077, -41.5000831, 'nouvelle zelande', 'country-flags-master/png250px/nz.png'),
(49, 'curieux', 'Où vivent les Papous?', 'oceanie', 142.0871176, -5.5225988, 'nouvelle guinee', 'country-flags-master/png250px/pg.png'),
(50, 'curieux', 'Quel est le pays dont la superficie couvre la plus grande partie de l\'Océanie?', 'oceanie', 134.755, -24.7761086, 'australie', 'country-flags-master/png250px/at.png'),
(51, 'curieux', 'Quel pays a la plus faible population avec 1190 habitants (2014)?', 'oceanie', -169.8613411, -19.0536414, 'niue', 'country-flags-master/png250px/nu.png'),
(52, 'curieux', 'Quel pays est l\'archipel du pacifique qui rassemble plus de 2000 îles?', 'oceanie', 150.1982846, 5.5600565, 'micronesie', 'country-flags-master/png250px/fm.png');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id_score` int(11) NOT NULL AUTO_INCREMENT,
  `your_score` int(11) NOT NULL,
  `id_joueur` int(11) DEFAULT NULL,
  `id_questionnaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_score`),
  KEY `fk_id_joueur` (`id_joueur`),
  KEY `fk_id_question` (`id_questionnaire`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id_score`, `your_score`, `id_joueur`, `id_questionnaire`) VALUES
(1, 8, 30, 4),
(2, 8, 30, 2),
(3, 8, 30, 3),
(4, 8, 30, 1),
(5, 5, 30, 1),
(6, 0, 30, 1),
(7, 0, 30, 1),
(8, 10, 30, 1),
(9, 8, 30, 3),
(10, 8, 29, 1),
(11, 8, 29, 1),
(12, 0, 29, 1),
(13, 0, 29, 1),
(14, 0, 29, 1),
(15, 0, 29, 1),
(16, 10, 29, 3),
(17, 0, 29, 3),
(18, 0, 29, 4),
(19, 0, 29, 4),
(20, 0, 29, 4),
(21, 5, 29, 4),
(22, 0, 29, 4),
(23, 0, 29, 0),
(24, 5, 29, 2),
(25, 5, 29, 2),
(26, 0, 29, 2),
(27, 0, 29, 3),
(28, 0, 29, 1),
(29, 0, 29, 1),
(30, 0, 29, 5),
(31, 0, 29, 4),
(32, 5, NULL, 5),
(33, 0, 31, 0),
(34, 0, NULL, NULL),
(35, 0, NULL, NULL),
(36, 0, 31, 7),
(37, 10, 31, 7),
(38, 8, 31, 29),
(39, 0, 31, 48),
(40, 0, 31, 48),
(41, 3, 31, 26);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(1) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `civilite`, `nom`, `prenom`, `pseudo`, `mail`, `mot_de_passe`) VALUES
(8, '', '', '', 'gnagna', 'gnagna@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(9, '', '', '', 'ousmane', 'ousme@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(10, '', '', '', 'gna', 'gna@mail.com', '1551c5e3621f2d6df72ddec57834d62f7a9c901c'),
(11, '', '', '', 'gn', 'gg@mail.com', 'f3226f91f77a87d909b8920adc91f9a301a7316b'),
(12, '', '', '', 'omar', 'omar@gmail.com', '4a6db2314c199446c0e2d3e48e30295622c96639'),
(13, '', '', '', 'osma', 'osma@gmail.com', 'f773dd0f1939c9b74276623fc22c70976fb21f0b'),
(14, '', '', '', 'osman', 'osman@gmail.com', '9d95d673b082e3c9220da0a0d6a62164f4120179'),
(15, '', '', '', 'osmane', 'osmane@gmail.com', '7284bdddf414547202175149c65a2178657db5f3'),
(16, '', '', '', 'osmane1', 'osmane1@gmail.com', '61eefab3c96b74c789faa4c52575d0f5ad2653cd'),
(17, '', '', '', 'osmane11', 'osmane11@gmail.com', '296fd8cf28ce85f039cc76b81b506d071bed195f'),
(18, '', '', '', 'ousmane11', 'ousmane11@gmail.com', '4c14e19faf7a135035a58c3f18b3eb88b18be4bd'),
(19, '', '', '', 'ousmane1', 'ousmane1@gmail.com', 'e3a38bb1c90952c513f233a755b566fc4ef21805'),
(20, '', '', '', 'ousmane111', 'ousmane111@gmail.com', '3435f0253914a0743bda0e3b6c4e75f9c5269d28'),
(21, '', '', '', 'gnagna1', 'gnagna1@gmail.com', '37c54a14c9e1a978952ead94d9c60bfec71c1ebf'),
(22, '', '', '', 'gnagna11', 'gnagna11@gmail.com', '3790baeaf09d7266b0837733a9f696a36f0bbf52'),
(23, '', '', '', 'gnag', 'gnag@gmail.com', 'db4de11bd33780a76164914233869476a762f797'),
(24, '', '', '', 'gnagn', 'gnagn@gmail.com', '8d0fa7ea2359be124edc72fb01ca410a9a34e05b'),
(25, '', '', '', 'om', 'om@gmail.com', '83db893235619e973fe241e51f0f59f9c31299ec'),
(26, 'F', 'wos', 'enamsuo', '14', 'sow@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(27, 'F', 'sow', 'Ousmane', 'os', 'os@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(28, 'F', 'seck', 'gnagna', 'gnagna120', 'gnagna120@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(29, 'F', 'seck', 'gnagna', 'g120', 'g120@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(30, 'F', 's120', '120', 's120', 's120@gmail.com', '775bc5c30e27f0e562115d136e7f7edbd3cead89'),
(31, 'F', 'sow', 'Ousmane', '111', '111@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
