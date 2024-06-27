-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 juin 2022 à 15:10
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
  `idPersonne` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `dateSeance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animateur`
--

INSERT INTO `animateur` (`idPersonne`, `idFilm`, `dateSeance`) VALUES
(2, 170, '2022-06-18');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `idClasse` int(11) NOT NULL,
  `nomClasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idClasse`, `nomClasse`) VALUES
(1, '1 G1'),
(2, '1 G2'),
(3, '1 MELEC1'),
(4, '1 MELEC2'),
(5, '1 SN1'),
(6, '1 SN2'),
(7, '1 STI2D'),
(8, '1 STMG1'),
(9, '1 STMG2'),
(10, '1 STMG3'),
(11, '2 CAP'),
(12, '2 GT1'),
(13, '2 GT2'),
(14, '2 GT3'),
(15, '2 GT4'),
(16, '2 MTN1'),
(17, '2 MTN2'),
(18, '2 MTN3'),
(19, '2 MTN4'),
(20, 'BTS1 GPME'),
(21, 'BTS2 GPME'),
(22, 'BTS1 MCO'),
(23, 'BTS2 MCO'),
(24, 'BTS1 SIOA'),
(25, 'BTS2 SIOA'),
(26, 'BTS1 SIOB'),
(27, 'BTS2 SIOB'),
(28, 'BTS1 SN'),
(29, 'BTS2 SN'),
(30, 'T MELEC1'),
(31, 'T MELEC2'),
(32, 'T SN1'),
(33, 'T SN2'),
(34, 'T STI2D'),
(35, 'T STMG1'),
(36, 'T STMG2'),
(37, 'T STMG3'),
(38, 'UP2A');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `idFilm` int(11) NOT NULL,
  `titreVO` varchar(50) NOT NULL,
  `titreVF` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `realisateur` varchar(100) NOT NULL,
  `duree` int(11) NOT NULL,
  `affiche` varchar(50) NOT NULL,
  `lienVideoAlloCine` varchar(150) NOT NULL,
  `lienIMDB` varchar(150) DEFAULT NULL,
  `synopsisVO` text NOT NULL,
  `synopsisVF` text NOT NULL,
  `idGenre` int(11) NOT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idFilm`, `titreVO`, `titreVF`, `annee`, `realisateur`, `duree`, `affiche`, `lienVideoAlloCine`, `lienIMDB`, `synopsisVO`, `synopsisVF`, `idGenre`, `idPays`) VALUES
(1, 'Die Welle ', 'La Vague', 2008, 'Dennis Gansel', 108, 'la_vague.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=134390.html', NULL, '', '', 13, 1),
(2, 'Les 400 coups', 'Les 400 coups', 1959, 'François Truffaut', 99, 'Les_400_coups.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=62178.html', NULL, '', '', 34, 11),
(3, 'Volver', 'Volver', 2006, 'Pedro Almodóvar', 121, 'volver.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=59605.html', NULL, '', '', 13, 8),
(4, 'Goodbye Lenin!', 'Goodbye Lenin!', 2003, 'Wolfgang Becker', 121, 'Goodbye_Lenin.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=52715.html', NULL, '', '', 34, 1),
(5, 'Das Leben der Anderen ', 'La Vie des Autres', 2005, 'Florian Henckel', 137, 'La_vie_des_autres.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=111643.html', NULL, '', '', 35, 1),
(6, 'Ida ', 'Ida', 2013, 'Pawel Pawlikowski', 82, 'ida.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=223850.html', NULL, '', '', 35, 1),
(7, 'Josep', 'Josep', 2020, 'Aurel', 74, 'Josep.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=268348.html', NULL, '', '', 40, 11),
(8, 'Belfast', 'Belfast', 2021, 'Kenneth Branagh', 97, 'Belfast.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=290640.html', NULL, '', '', 35, 14),
(9, 'Per qualche dollaro in più ', 'Et pour quelques dollars de plus', 1965, 'Sergio Leone', 126, 'Et_pour_quelques_dollars_de_plus.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=929.html', NULL, '', '', 36, 15),
(10, 'The Guard', 'L\'Irlandais', 2011, 'John Michael McDonagh', 96, 'LIrlandais.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=174675.html', NULL, '', '', 37, 14),
(11, 'The Square', 'The Square', 2017, 'Ruben Östlund', 144, 'The_Square.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=248683.html', NULL, '', '', 34, 27),
(12, 'Nosferatu, eine Symphonie des Grauens', 'Nosferatu le vampire', 1922, 'Friedrich Wilhem Murnau', 94, 'Nosferatu.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=2342.html', NULL, '', '', 38, 1),
(13, 'Die Glasbläserin', 'La Souffleuse de Verre', 2016, 'Christiane Balthasar', 89, 'la_souffleuse_de_verre.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=251235.html', NULL, '', '', 13, 1),
(14, 'La Panthère des neiges', 'La Panthère des neiges', 2003, 'Marie Amiguet/Vincent Munier', 92, 'La_panthere_des_neiges.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=292598.html', NULL, '', '', 12, 11),
(15, 'Demain', 'Demain', 2015, 'Cyril Dion/Mélanie Laurent', 118, 'Demain.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=229903.html', NULL, '', '', 12, 1),
(16, 'Festen', 'Festen', 1998, 'Thomas Vnitenberg', 105, 'Festen.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=18644.html', NULL, '', '', 13, 7),
(17, 'Campeones ', 'Champions', 2018, 'Javier Fesser', 125, 'Champions.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=256186.html', NULL, '', '', 34, 8),
(18, 'Les Triplettes de Belleville ', 'Les Triplettes de Belleville', 2003, 'Sylvain Chomet', 78, 'Les_Triplettes_de_Belleville.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html', NULL, '', '', 2, 11),
(170, 'snk', 'snk', 1990, 'cde', 120, '', '', '', '', '', 1, 1);

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
(34, 'comédie dramatique'),
(35, 'drame historique'),
(36, 'western spaghetti'),
(37, 'comédie policère'),
(38, 'muet/épouvante'),
(39, 'animation/comédie dramatique'),
(40, 'animation/biopic');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `idPersonne` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `dateSeance` date NOT NULL,
  `dateHeureIns` datetime NOT NULL,
  `presence` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`idPersonne`, `idFilm`, `dateSeance`, `dateHeureIns`, `presence`) VALUES
(1, 1, '2022-09-28', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(11) NOT NULL,
  `nomPays` varchar(50) NOT NULL,
  `clapPays` varchar(100) NOT NULL
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
-- Structure de la table `persclasse`
--

CREATE TABLE `persclasse` (
  `idPersonne` int(11) NOT NULL,
  `idClasse` int(11) NOT NULL,
  `anneeScolaire` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nbAbsences` int(11) DEFAULT NULL,
  `coordo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nomPers`, `prenomPers`, `mail`, `mdp`, `nbAbsences`, `coordo`) VALUES
(1, 'ahmed', 'laam', 'laam9425@gmail.com', '12345', NULL, 0),
(2, 'ferrag', 'vincent', 'v.ferrag@gmail.com', '12345', NULL, 1),
(4, 'ge', 'dvg', 'qef', '12345', 0, 0),
(5, 'ukt', 'rh', 'rhz', '12345', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `prixfilm`
--

CREATE TABLE `prixfilm` (
  `idRecompense` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `annee` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recompense`
--

CREATE TABLE `recompense` (
  `idRecompense` int(11) NOT NULL,
  `nomRecompense` varchar(100) NOT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recompense`
--

INSERT INTO `recompense` (`idRecompense`, `nomRecompense`, `idPays`) VALUES
(1, 'Prix du film allemand (Deutscher Filmpreis ou \"Lolas\") de Deutsche Filmakademie', 1),
(2, 'Ours d\'or (Goldener Bär) du Festival international du film de Berlin (Berlinale)', 1),
(3, 'Prix du court métrage (Deutsche Kurzfilmpreis) du Gouvernement fédéral', 1),
(4, 'Prix Ernst Lubitsch du Club der Berliner Filmjournalisten', 1),
(5, 'Prix de l\'association des critiques allemands de film (Preise des Verbandes der Deutschen Filmkritik', 1),
(6, 'Prix des réalisateurs allemands (Deutscher Darstellerpreis)', 1),
(7, 'Prix du film bavarois (Bayerischer Filmpreis) Land de Bavière (Munich)', 1),
(8, 'Prix de la critique (Preis der Hamburger Filmkritik) du Festival du film de Hambourg', 1),
(9, 'Prix allemand du film indépendant (German Independence Award) du Festival international du film d\'Ol', 1),
(10, 'Prix du box office en Allemagne (Box Office Germany Award ou \"Bogey Awards\")', 1),
(11, 'Prix des scénaristes allemands (Deutscher Drehbuchpreis)', 1),
(12, 'Prix du film brêmois (Bremer Filmpreis) Land de Brême', 1),
(13, 'Prix des acteurs allemands (Deutscher Schauspielerpreis)', 1),
(14, 'Prix du film autrichien (Österreichischer Filmpreis) de l\'Akademie des Österreichischen Films', 2),
(15, 'Prix du film viennois (Wiener Filmpreis) du Festival international du film de Vienne (Viennale)', 2),
(16, 'Âge d\'or de la Cinémathèque royale de Belgique et du musée du cinéma de Bruxelles', 3),
(17, 'Magritte du cinéma de l\'Académie André Delvaux', 3),
(18, 'Grand prix de l\'Union de la critique de cinéma', 3),
(19, 'Prix André-Cavens de l\'Union de la critique de cinéma', 3),
(20, 'Grand prix et Prix Humanum de l\'Union de la presse cinématographique belge', 3),
(21, 'Grand prix du Festival international du film de Flandre-Gand', 3),
(22, 'Corbeau d\'or du Festival international du film fantastique de Bruxelles', 3),
(23, 'Grand prix du Festival international du film d\'amour de Mons', 3),
(24, 'Prix Joseph-Plateau du Festival international du film de Flandre-Gand', 3),
(25, 'Bayard d\'or du Festival international du film francophone de Namur', 3),
(26, 'Prix du cinéma flamand (Ensors) du Festival du film d\'Ostende', 3),
(27, 'Prix Robert de la Danmarks Film Akademi (Copenhague)', 7),
(28, 'Prix Bodil (Bodilprisen) de la Filmedarbejderforeningen', 7),
(29, 'Prix Riber (Riberprisen) du court métrage de l\'université d\'Aalborg', 7),
(30, 'Prix Nordisk Film (Nordisk Film Prisen) de la société Nordisk Film', 7),
(31, 'Grand prix du Festival international du film d\'Odense', 7),
(32, 'Prix du public (Audience Award) du NatFilm Festival', 7),
(33, 'Cygne d\'or (Golden Swan) du Festival international du film de Copenhague', 7),
(34, 'Prix CPH:DOX (CPH:DOX Award) du Festival international du film documentaire de Copenhague', 7),
(35, 'Grand prix du nouveau talent (New Talent Grand Pix) du Festival international du film de Copenhague', 7),
(36, 'Prix Goya (Premios Goya) de l\'Academia de las Artes y las Ciencias Cinematográficas de España', 8),
(37, 'Prix Gaudí (Premis Gaudí) de l\'Acadèmia del Cinema Català (Barcelone)', 8),
(38, 'Prix ACCEC (Premis ACCEC) de l\'Associació Catalana de Crítics i Escriptors Cinematogràfics de Catalu', 8),
(39, 'prix ADIRCAE (Premios ADIRCAE) de l\'Asamblea de Directores Realizadores Cinematográficos y Audiovisu', 8),
(40, 'Prix Ondas (Premios Ondas) de la Radio Barcelona', 8),
(41, 'Coquille d\'or (Urrezko Maskorra ou Concha de Oro) du Festival international du film de Saint-Sébasti', 8),
(42, 'Prix Jussi de Filmiaura (Helsinki)', 10),
(43, 'Prix national de la cinématographie du Centre pour la promotion des arts', 10),
(44, 'Étoile de cristal de l\'Académie du cinéma', 11),
(45, 'César du cinéma de l\'Académie des arts et techniques du cinéma', 11),
(46, 'Lumières de la presse internationale de l\'Académie des Lumières', 11),
(47, 'Prix Louis-Delluc', 11),
(48, 'Prix Méliès du Syndicat français de la critique de cinéma', 11),
(49, 'Prix Jean-Vigo', 11),
(50, 'Prix Jean-Gabin', 11),
(51, 'Prix Romy-Schneider', 11),
(52, 'Étoiles d\'or de l\'Académie de la presse du cinéma français', 11),
(53, 'Globe de cristal (jury d\'écrivains)', 11),
(54, 'Prix Patrick-Dewaere', 11),
(55, 'Prix Saint-Germain (jury d\'écrivains)', 11),
(56, 'Trophée Anne-Sophie Deval', 11),
(57, 'Talents Cannes', 11),
(58, 'Bidets d\'or de l\'Académie des Bidets d\'or', 11),
(59, 'Gérard du cinéma', 11),
(60, 'Palme d\'or du Festival de Cannes', 11),
(61, 'Cristal d\'Annecy du Festival international du film d\'animation d\'Annecy', 11),
(62, 'Grand prix du Festival international du film fantastique d\'Avoriaz', 11),
(63, 'Montgolfière d\'or du Festival des trois continents (Nantes)', 11),
(64, 'Hitchcock d\'or du Festival du film britannique de Dinard', 11),
(65, 'Grand prix du Festival international du film fantastique de Gérardmer', 11),
(66, 'Cyclo d\'or du Festival international des cinémas d\'Asie de Vesoul', 11),
(67, 'Grand prix du Festival du cinéma américain de Deauville', 11),
(68, 'Swann d\'or du Festival du cinéma de Cabourg', 11),
(69, 'Prix du public du Champs-Élysées Film Festival', 11),
(70, 'Prix du Jury du Champs-Élysées Film Festival', 11),
(71, 'Prix du cinéma et de la télévision irlandaise (Irish Film and Television Awards) de l\'Irish Film and', 14),
(72, 'Prix du cercle des critiques de film de Dublin (Dublin Film Critics\' Circle Awards)', 14),
(73, 'Prix Volta (Volta Award) du Festival international du film de Dublin', 14),
(74, 'Prix David di Donatello (David) de l\'Accademia del Cinema Italiano (Rome)', 15),
(75, 'Ruban d\'argent (Nastri d\'argento) du Sindacato Nazionale Giornalisti Cinematografici Italiani (Rome)', 15),
(76, 'Vénus d\'argent (Venere d\'argento) de la Azienda autonoma di soggiorno e turismo (Erice)', 15),
(77, 'Globe d\'or (Globo d\'oro) de la Rome Foreign Press Association', 15),
(78, 'Prix Filippo Sacchi (Premio Filippo Sacchi) de la Sindacato Nazionale Giornalisti Cinematografici It', 15),
(79, 'Lutrin d\'or (Leggio d\'oro) de la Ente Nazionale Democratico di Azione Sociale', 15),
(80, 'Lion d\'or (Leone d\'oro) de la Mostra de Venise', 15),
(81, 'Griffon d\'or (Grifone d\'oro) du Festival du film de Giffoni', 15),
(82, 'Marc Aurèle d\'or (Marc Aurelio d\'oro) du Festival international du film de Rome', 15),
(83, 'Chevalier d\'or (Golden Knight) du Golden Knight Malta International (La Valette)', 19),
(84, 'Film d\'or (Gouden Film)', 20),
(85, 'Veau d\'or (Gouden Kalf) du Festival du cinéma néerlandais d\'Utrecht', 20),
(86, 'Tigre d\'or (Tiger Award) du Festival international du film de Rotterdam', 20),
(87, 'Aigles du cinéma polonais (Polskie Nagrody Filmowe ou \"Orły\") de la Polska Akademia Filmowa (Varsovi', 21),
(88, 'Canard d\'or (Złota Kaczka) du magazine Film', 21),
(89, 'Passeport de Polityka (Paszport Polityki) de l\'hebdomadaire Polityka', 21),
(90, 'Prix Zbigniew Cybulski (Nagroda im. Zbyszka Cybulskiego) du magazine Kino', 21),
(91, 'Lions d\'or (Złote Lwy) du Festival du film polonais de Gdynia', 21),
(92, 'Corne d\'or (Złoty Róg) du Festival du film de Cracovie', 21),
(93, 'Grand prix du Festival international du film de Varsovie', 21),
(94, 'Grenouille d\'or (Złota Żaba) du festival Camerimage', 21),
(95, 'Jabberwocky d\'or (Złoty Jabberwocky) du festival Festival international du film Etiuda & Anima (Crac', 21),
(96, 'Grand prix du Festival international du cinéma indépendant Off Plus Camera (Cracovie)', 21),
(97, 'Lion tchèque (Český lev) de la České filmové a televizní akademie', 23),
(98, 'Globe de cristal (Křišťálový glóbus) du Festival international du film de Karlovy Vary', 23),
(99, 'Prix Gopo (Premiile Gopo) de l\'Association for Romanian Film Promotion', 24),
(100, 'Trophée Transylvanie (Trofeul Transilvania) du Festival international du film de Transylvanie (Cluj-', 24),
(101, 'Cétoine dorée (Guldbagge) de la Svenska Filminstitutet (Stockholm)', 27),
(102, 'Prix du dragon (Dragon Awards) du Festival international du film de Göteborg', 27),
(103, 'Cheval de bronze (Bronshästen) du Festival international du film de Stockholm', 27);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `idFilm` int(11) NOT NULL,
  `dateSeance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`idFilm`, `dateSeance`) VALUES
(1, '2022-09-28'),
(2, '2022-10-05'),
(3, '2022-10-12'),
(4, '2022-11-09'),
(5, '2022-11-23'),
(6, '2022-12-07'),
(7, '2023-01-04'),
(8, '2023-01-18'),
(9, '2023-02-01'),
(10, '2023-02-15'),
(11, '2023-10-12'),
(12, '2023-03-15'),
(13, '2023-04-05'),
(14, '2023-04-12'),
(15, '2023-04-19'),
(16, '2023-05-10'),
(17, '2022-06-16'),
(17, '2023-05-17'),
(18, '2023-05-31'),
(170, '2022-06-18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD PRIMARY KEY (`idPersonne`,`idFilm`,`dateSeance`),
  ADD KEY `Animateur_Seance0_FK` (`idFilm`,`dateSeance`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idClasse`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`),
  ADD KEY `Film_Genre_FK` (`idGenre`),
  ADD KEY `Film_Pays0_FK` (`idPays`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`idPersonne`,`idFilm`,`dateSeance`),
  ADD KEY `Inscription_Seance0_FK` (`idFilm`,`dateSeance`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `persclasse`
--
ALTER TABLE `persclasse`
  ADD PRIMARY KEY (`idPersonne`,`idClasse`,`anneeScolaire`),
  ADD KEY `PersClasse_Classe0_FK` (`idClasse`);

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
  ADD PRIMARY KEY (`idRecompense`),
  ADD KEY `Recompense_Pays_FK` (`idPays`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`idFilm`,`dateSeance`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `idClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `idFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `recompense`
--
ALTER TABLE `recompense`
  MODIFY `idRecompense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD CONSTRAINT `Animateur_Personne_FK` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  ADD CONSTRAINT `Animateur_Seance0_FK` FOREIGN KEY (`idFilm`,`dateSeance`) REFERENCES `seance` (`idFilm`, `dateSeance`);

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `Film_Genre_FK` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`),
  ADD CONSTRAINT `Film_Pays0_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `Inscription_Personne_FK` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  ADD CONSTRAINT `Inscription_Seance0_FK` FOREIGN KEY (`idFilm`,`dateSeance`) REFERENCES `seance` (`idFilm`, `dateSeance`);

--
-- Contraintes pour la table `persclasse`
--
ALTER TABLE `persclasse`
  ADD CONSTRAINT `PersClasse_Classe0_FK` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`),
  ADD CONSTRAINT `PersClasse_Personne_FK` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`);

--
-- Contraintes pour la table `prixfilm`
--
ALTER TABLE `prixfilm`
  ADD CONSTRAINT `prixFilm_Film0_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `prixFilm_Recompense_FK` FOREIGN KEY (`idRecompense`) REFERENCES `recompense` (`idRecompense`);

--
-- Contraintes pour la table `recompense`
--
ALTER TABLE `recompense`
  ADD CONSTRAINT `Recompense_Pays_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `Seance_Film_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
