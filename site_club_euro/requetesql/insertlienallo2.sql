INSERT INTO Film (lienVideoAlloCine)
VALUES ('https://www.allocine.fr/film/fichefilm_gen_cfilm=134390.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=62178.html'), 
('https://www.allocine.fr/film/fichefilm_gen_cfilm=59605.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=52715.html'), 
('https://www.allocine.fr/film/fichefilm_gen_cfilm=111643.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=223850.html'),
('https://www.allocine.fr/film/fichefilm_gen_cfilm=268348.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=290640.html'), 
('https://www.allocine.fr/film/fichefilm_gen_cfilm=929.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=174675.html'), 
('https://www.allocine.fr/film/fichefilm_gen_cfilm=248683.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=2342.html'),
('https://www.allocine.fr/film/fichefilm_gen_cfilm=251235.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=292598.html'), 
('https://www.allocine.fr/film/fichefilm_gen_cfilm=229903.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=18644.html'),
('https://www.allocine.fr/film/fichefilm_gen_cfilm=256186.html'), ('https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html');


INSERT INTO Film (idFilm,titreVO,titreVF,annee,realisateur,duree,affiche,lienVideoAlloCine,lienVideoIMDB,synopsisVO,synopsisVF,idGenre,idPays)
VALUES
(1,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=134390.html','','','','13','1'),
(2,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=62178.html','','','','34','11'), 
(3,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=59605.html','','','','13','8'), 
(4,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=52715.html','','','','34','1'), 
(5,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=111643.html','','','','35','1'),
(6,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=223850.html','','','','35','1'),
(7,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=268348.html','','','','40','11'), 
(8,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=290640.html','','','','35','14'), 
(9,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=929.html','','','','36','15'), 
(10,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=174675.html','','','','37','14'), 
(11,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=248683.html','','','','34','27'), 
(12,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=2342.html','','','','38','1'),
(13,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=251235.html','','','','13','1'), 
(14,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=292598.html','','','','12','11'), 
(15,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=229903.html','','','','12','1'), 
(16,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=18644.html','','','','13','7'),
(17,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=256186.html','','','','34','8'), 
(18,'','','','','','','https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html','','','','2','11');

INSERT INTO `film` (`idFilm`, `titreVO`, `titreVF`, `annee`, `realisateur`, `duree`, `affiche`, `lienVideoAlloCine`, `lienVideoIMDB`, `synopsisVO`, `synopsisVF`, `idGenre`, `idPays`) VALUES
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
(18, 'Les Triplettes de Belleville ', 'Les Triplettes de Belleville', 2003, 'Sylvain Chomet', 78, 'Les_Triplettes_de_Belleville.png', 'https://www.allocine.fr/film/fichefilm_gen_cfilm=44206.html', NULL, '', '', 2, 11);