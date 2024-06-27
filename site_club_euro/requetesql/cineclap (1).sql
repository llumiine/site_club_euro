-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 16:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cineclap`
--

-- --------------------------------------------------------

--
-- Structure de la table `animateur`
--

CREATE TABLE `animateur` (
  `dateSeance` date NOT NULL,
  `idPersonne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animateur`
--

INSERT INTO `animateur` (`dateSeance`, `idPersonne`) VALUES
('2022-09-28', 1),
('2022-10-12', 1),
('2022-11-09', 1),
('2022-11-23', 1),
('2023-01-04', 1),
('2023-01-18', 1),
('2023-02-01', 1),
('2023-02-15', 1),
('2023-03-08', 1),
('2023-03-15', 1),
('2023-04-19', 1),
('2023-05-17', 1),
('2023-05-31', 1),
('2022-10-05', 2),
('2022-11-09', 2),
('2022-11-23', 2),
('2022-12-07', 2),
('2023-01-18', 2),
('2023-02-01', 2),
('2023-03-15', 2),
('2023-04-05', 2),
('2023-04-12', 2),
('2023-05-10', 2),
('2023-05-31', 2),
('2022-09-28', 3),
('2022-10-05', 3),
('2022-10-12', 3),
('2022-12-07', 3),
('2023-01-04', 3),
('2023-02-15', 3),
('2023-03-08', 3),
('2023-04-05', 3),
('2023-04-12', 3),
('2023-04-19', 3),
('2023-05-10', 3),
('2023-05-17', 3);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `idFilm` int(11) NOT NULL,
  `titreVO` varchar(50) NOT NULL,
  `titreVF` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `realisateur` varchar(50) NOT NULL,
  `duree` int(11) NOT NULL,
  `affiche` varchar(50) DEFAULT NULL,
  `lienVideoAlloCine` varchar(150) DEFAULT NULL,
  `lienIMDB` varchar(150) DEFAULT NULL,
  `synopsisVO` text DEFAULT NULL,
  `synopsisVF` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idFilm`, `titreVO`, `titreVF`, `annee`, `realisateur`, `duree`, `affiche`, `lienVideoAlloCine`, `lienIMDB`, `synopsisVO`, `synopsisVF`) VALUES
(1, 'Die welle', 'La vague', 2008, 'Dennis Gansel', 108, 'la_vague.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=134390.html', 'https://www.imdb.com/title/tt1063669/mediaviewer/rm4043183617/?ref_=tt_ov_i', NULL, NULL),
(2, 'Les 400 coups', 'Les 400 coups', 1959, 'François Truffaut', 99, 'Les_400_coups.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=62178.html', 'https://www.imdb.com/title/tt0053198/mediaviewer/rm331531264/?ref_=tt_ov_i', NULL, NULL),
(3, 'Volver', 'Volver', 2006, 'Pedro Almodóvar', 121, 'Volver.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=59605.html', 'https://www.imdb.com/title/tt0441909/mediaviewer/rm4021851905/?ref_=tt_ov_i', NULL, NULL),
(4, 'Good bye Lenin !', 'Good bye Lenin !', 2003, 'Wolfgang Becker', 121, 'Goodbye_Lenin.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=52715.html', 'https://www.imdb.com/title/tt0301357/mediaviewer/rm802921728/?ref_=tt_ov_i', NULL, NULL),
(5, 'Das leben der anderen', 'La vie des autres', 2005, 'Florian Henckel', 137, 'La_vie_des_autres.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=111643.html', 'https://www.imdb.com/title/tt0405094/mediaviewer/rm889615360/?ref_=tt_ov_i', NULL, NULL),
(6, 'Ida', 'Ida', 2013, 'Pawel Pawlikowski', 82, 'Ida.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=223850.html', 'https://www.imdb.com/title/tt2718492/mediaviewer/rm1482513920/?ref_=tt_ov_i', NULL, NULL),
(7, 'Persepolis', 'Persepolis', 2007, 'Vincent Paronnaud et Marjane Satrapi', 97, 'Persepolis.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=110204.html', 'https://www.imdb.com/title/tt0808417/mediaviewer/rm3487646208/?ref_=tt_ov_i', NULL, NULL),
(8, 'Belfast', 'Belfast', 2021, 'Kenneth Branagh', 97, 'Belfast.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=290640.html', 'https://www.imdb.com/title/tt12789558/mediaviewer/rm1094514433/?ref_=tt_ov_i', NULL, NULL),
(9, 'Per qualche dollaro in più', 'Et pour quelques dollars de plus', 1965, 'Sergio Leone', 126, 'Et_pour_quelques_dollars_de_plus.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=929.html', 'https://www.imdb.com/title/tt0059578/mediaviewer/rm1296139264/?ref_=tt_md_6', NULL, NULL),
(10, 'The guard', 'L\'irlandais)', 2011, 'John Michael McDonagh', 96, 'LIrlandais.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=174675.html', 'https://www.imdb.com/title/tt1540133/mediaviewer/rm2918294273/?ref_=tt_ov_i', NULL, NULL),
(11, 'The square', 'The square', 2017, 'Ruben Östlund', 144, 'The_Square.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=248683.html', 'https://www.imdb.com/title/tt4995790/mediaviewer/rm1942846464/?ref_=tt_ov_i', NULL, NULL),
(12, 'Nosferatu, eine symphonie des grauens', 'Nosferatu le vampire', 1921, 'Friedrich Wilhem Murnau', 94, 'Nosferatu.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=2342.html', 'https://www.imdb.com/title/tt0013442/mediaviewer/rm242416128/?ref_=tt_ov_i', NULL, NULL),
(13, 'Die glasbläserin', 'La souffleuse de verre', 2016, 'Christiane Balthasar', 89, 'la_souffleuse_de_verre.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=251235.html', 'https://www.imdb.com/title/tt5581268/mediaviewer/rm3437503744/?ref_=tt_ov_i', NULL, NULL),
(14, 'La panthère des neiges', 'La panthère des neiges', 2003, 'Marie Amiguet et Vincent Munier', 92, 'La_panthere_des_neiges.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=292598.html', 'https://www.imdb.com/title/tt11937680/mediaviewer/rm2436372481/?ref_=tt_md_3', NULL, NULL),
(15, 'Demain', 'Demain', 2015, 'Cyril Dion et Mélanie Laurent', 118, 'Demain.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=229903.html', 'https://www.imdb.com/title/tt4449576/mediaviewer/rm1920657152/?ref_=tt_ov_i', NULL, NULL),
(16, 'Festen', 'Festen', 1998, 'Thomas Vnitenberg', 105, 'Festen.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=18644.html', 'https://www.imdb.com/title/tt0154420/mediaviewer/rm702643200?ref_=ttmi_mi_all_pos_66', NULL, NULL),
(17, 'Campeones', 'Champions', 2018, 'Javier Fesser', 125, 'Champions.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=256186.html', 'https://www.imdb.com/title/tt6793580/mediaviewer/rm1488929280/?ref_=tt_ov_i', NULL, NULL),
(18, 'Les triplettes de Belleville', 'Les triplettes de Belleville', 2003, 'Sylvain Chomet', 78, 'Les_Triplettes_de_Belleville.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html', 'https://www.imdb.com/title/tt0286244/mediaviewer/rm2920179712/?ref_=tt_ov_i', NULL, NULL),
(19, 'Josep', 'Josep', 2020, 'Aurel', 74, 'Josep.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=268348.html', 'https://www.imdb.com/title/tt10534996/mediaviewer/rm1726456065/?ref_=tt_ov_i', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL,
  `nomGenre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `nomGenre`) VALUES
(1, 'Action'),
(2, 'Animation‎'),
(3, 'Aventure'),
(4, 'Biopic'),
(5, 'Burlesque'),
(6, 'Cape et d\'épée'),
(7, 'Catastrophe'),
(8, 'Choral‎'),
(9, 'Comédie'),
(10, 'Comédie musicale'),
(11, 'Danse'),
(12, 'Documentaire'),
(13, 'Drame‎'),
(14, 'Épique'),
(15, 'Espionnage'),
(16, 'Expérimental'),
(17, 'Fantastique‎'),
(18, 'Fantasy‎'),
(19, 'Guerre'),
(20, 'Historique'),
(21, 'Horreur'),
(22, 'Musical'),
(23, 'Péplum'),
(24, 'Policier‎'),
(25, 'Propagande‎'),
(26, 'Road movie‎'),
(27, 'Romantique'),
(28, 'Science-fiction‎'),
(29, 'Sketches'),
(30, 'Super-Héros'),
(31, 'Survie‎'),
(32, 'Thriller'),
(33, 'Western'),
(34, 'Comédie dramatique'),
(35, 'Western spaghetti'),
(36, 'Muet'),
(37, 'Épouvante');

-- --------------------------------------------------------

--
-- Structure de la table `genrefilm`
--

CREATE TABLE `genrefilm` (
  `idFilm` int(11) NOT NULL,
  `idGenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genrefilm`
--

INSERT INTO `genrefilm` (`idFilm`, `idGenre`) VALUES
(1, 13),
(2, 34),
(3, 13),
(4, 34),
(5, 13),
(5, 20),
(6, 13),
(6, 20),
(7, 2),
(7, 34),
(8, 13),
(8, 20),
(9, 35),
(10, 9),
(10, 24),
(11, 34),
(12, 36),
(12, 37),
(13, 13),
(14, 12),
(15, 12),
(16, 13),
(17, 34),
(18, 2),
(19, 2),
(19, 4);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `idPersonne` int(11) NOT NULL,
  `dateSeance` date NOT NULL,
  `dateHeureIns` datetime NOT NULL,
  `presence` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`idPersonne`, `dateSeance`, `dateHeureIns`, `presence`) VALUES
(4, '2022-09-28', '0000-00-00 00:00:00', 0),
(5, '2022-09-28', '0000-00-00 00:00:00', 1),
(6, '2022-09-28', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(11) NOT NULL,
  `nomPays` varchar(50) NOT NULL,
  `clapPays` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `nomPays`, `clapPays`) VALUES
(1, 'Allemagne', 'allemagne.png'),
(2, 'Autriche', 'autriche.png'),
(3, 'Belgique', 'belgique.png'),
(4, 'Bulgarie', 'bulgarie.png'),
(5, 'Chypre', 'chypre.png'),
(6, 'Croatie', 'croatie.png'),
(7, 'Danemark', 'danemark.png'),
(8, 'Espagne', 'espagne.png'),
(9, 'Estonie', 'estonie.png'),
(10, 'Finlande', 'finlande.png'),
(11, 'France', 'france.png'),
(12, 'Grèce', 'grece.png'),
(13, 'Hongrie', 'hongrie.png'),
(14, 'Irlande', 'irlande.png'),
(15, 'Italie', 'italie.png'),
(16, 'Lettonie', 'lettonie.png'),
(17, 'Lituanie', 'lituanie.png'),
(18, 'Luxembourg', 'luxembourg.png'),
(19, 'Malte', 'malte.png'),
(20, 'Pays-Bas', 'paysbas.png'),
(21, 'Pologne', 'pologne.png'),
(22, 'Portugal', 'portugal.png'),
(23, 'République tchèque', 'reptcheq.png'),
(24, 'Roumanie', 'roumanie.png'),
(25, 'Slovaquie', 'slovaquie.png'),
(26, 'Slovénie', 'slovenie.png'),
(27, 'Suède', 'suede.png');

-- --------------------------------------------------------

--
-- Structure de la table `paysfilm`
--

CREATE TABLE `paysfilm` (
  `idFilm` int(11) NOT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paysfilm`
--

INSERT INTO `paysfilm` (`idFilm`, `idPays`) VALUES
(1, 1),
(2, 11),
(3, 8),
(4, 1),
(5, 1),
(6, 21),
(7, 11),
(8, 14),
(9, 15),
(10, 14),
(11, 27),
(12, 1),
(13, 1),
(14, 11),
(15, 11),
(16, 7),
(17, 8),
(18, 11),
(19, 3),
(19, 8),
(19, 11);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `nomPers` varchar(50) NOT NULL,
  `prenomPers` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nbAbsences` tinyint(4) DEFAULT NULL,
  `coordo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nomPers`, `prenomPers`, `mail`, `mdp`, `nbAbsences`, `coordo`) VALUES
(1, 'Michelon', 'Sabine', 'sabine.michelon@louis-armand.paris', '12345', NULL, 1),
(2, 'Wyplosz', 'Orane', 'orane.wyplosz@louis-armand.paris', '12345', NULL, 1),
(3, 'Éric', 'Sylvana', 'sylvana.eric@louis-armand.paris', '12345', NULL, 1),
(4, 'ahmed', 'laam', 'laam@gmail.com', '12345', 1, NULL),
(5, 'ferrag', 'vincent', 'vinecnt@gmail.com', '12345', 0, NULL),
(6, 'toto', 'jo', 'toto@gmail.com', '12345', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `prixfilm`
--

CREATE TABLE `prixfilm` (
  `idRecompense` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prixfilm`
--

INSERT INTO `prixfilm` (`idRecompense`, `idFilm`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 3),
(4, 17),
(5, 3),
(6, 4),
(6, 5),
(7, 4),
(7, 5),
(7, 6),
(8, 5),
(8, 6),
(9, 19),
(10, 19),
(11, 8),
(12, 8),
(13, 10),
(14, 11),
(15, 14),
(15, 15),
(16, 7),
(17, 7),
(18, 16),
(19, 7),
(20, 18);

-- --------------------------------------------------------

--
-- Structure de la table `recompense`
--

CREATE TABLE `recompense` (
  `idRecompense` int(11) NOT NULL,
  `nomRecompense` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recompense`
--

INSERT INTO `recompense` (`idRecompense`, `nomRecompense`) VALUES
(1, 'Prix du film allemand : Prix de Bronze (catégorie meilleur film)'),
(2, 'Festival de Cannes : Prix de la mise en scène'),
(3, 'Festival de Cannes : Prix du meilleur scénario'),
(4, 'Prix Goya du meilleur film'),
(5, 'Prix Goya du meilleur réalisateur'),
(6, 'César du meilleur film européen'),
(7, 'Prix du meilleur film européen'),
(8, 'Oscar du meilleur film en langue étrangère'),
(9, 'César du meilleur film d\'animation'),
(10, 'Prix du meilleur film européen d\'animation'),
(11, 'Golden Globe du meilleur scénario'),
(12, 'Oscar du meilleur scénario original'),
(13, 'Mention spéciale au prix du meilleur premier film à la Berlinale'),
(14, 'Festival de Cannes : Palme d\'Or'),
(15, 'César du meilleur film documentaire'),
(16, 'César du meilleur premier film'),
(17, 'César de la meilleure adaptation'),
(18, 'Festival de Cannes : Prix du jury'),
(19, 'Festival de Cannes : Prix spécial du jury'),
(20, 'Prix Lumière du meilleur film');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `dateSeance` date NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`dateSeance`, `idFilm`) VALUES
('2022-09-28', 1),
('2022-10-05', 2),
('2022-10-12', 3),
('2022-11-09', 4),
('2022-11-23', 5),
('2022-12-07', 6),
('2023-01-18', 8),
('2023-02-01', 9),
('2023-02-15', 10),
('2023-03-08', 11),
('2023-03-15', 12),
('2023-04-05', 13),
('2023-04-12', 14),
('2023-04-19', 15),
('2023-05-10', 16),
('2023-05-17', 17),
('2023-05-31', 18),
('2023-01-04', 19);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD PRIMARY KEY (`idPersonne`,`dateSeance`),
  ADD KEY `animateur_Seance0_FK` (`dateSeance`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `genrefilm`
--
ALTER TABLE `genrefilm`
  ADD PRIMARY KEY (`idFilm`,`idGenre`),
  ADD KEY `genreFilm_Genre0_FK` (`idGenre`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`idPersonne`,`dateSeance`),
  ADD KEY `Inscription_Seance0_FK` (`dateSeance`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `paysfilm`
--
ALTER TABLE `paysfilm`
  ADD PRIMARY KEY (`idFilm`,`idPays`),
  ADD KEY `paysFilm_Pays0_FK` (`idPays`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- Index pour la table `prixfilm`
--
ALTER TABLE `prixfilm`
  ADD PRIMARY KEY (`idRecompense`,`idFilm`),
  ADD KEY `prixFilm_Film0_FK` (`idFilm`);

--
-- Index pour la table `recompense`
--
ALTER TABLE `recompense`
  ADD PRIMARY KEY (`idRecompense`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`dateSeance`),
  ADD KEY `Seance_Film_FK` (`idFilm`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `idFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recompense`
--
ALTER TABLE `recompense`
  MODIFY `idRecompense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD CONSTRAINT `animateur_Personne_FK` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`) ON UPDATE CASCADE,
  ADD CONSTRAINT `animateur_Seance0_FK` FOREIGN KEY (`dateSeance`) REFERENCES `seance` (`dateSeance`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `genrefilm`
--
ALTER TABLE `genrefilm`
  ADD CONSTRAINT `genreFilm_Film_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `genreFilm_Genre0_FK` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `Inscription_Personne_FK` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  ADD CONSTRAINT `Inscription_Seance0_FK` FOREIGN KEY (`dateSeance`) REFERENCES `seance` (`dateSeance`);

--
-- Contraintes pour la table `paysfilm`
--
ALTER TABLE `paysfilm`
  ADD CONSTRAINT `paysFilm_Film_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `paysFilm_Pays0_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`);

--
-- Contraintes pour la table `prixfilm`
--
ALTER TABLE `prixfilm`
  ADD CONSTRAINT `prixFilm_Film0_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `prixFilm_Recompense_FK` FOREIGN KEY (`idRecompense`) REFERENCES `recompense` (`idRecompense`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `Seance_Film_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
