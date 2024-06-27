#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Pays
#------------------------------------------------------------

CREATE TABLE Pays(
        idPays   Int  Auto_increment  NOT NULL ,
        nomPays  Varchar (50) NOT NULL ,
        clapPays Varchar (50) NOT NULL
	,CONSTRAINT Pays_PK PRIMARY KEY (idPays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre
#------------------------------------------------------------

CREATE TABLE Genre(
        idGenre  Int  Auto_increment  NOT NULL ,
        nomGenre Varchar (50) NOT NULL
	,CONSTRAINT Genre_PK PRIMARY KEY (idGenre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Film
#------------------------------------------------------------

CREATE TABLE Film(
        idFilm      Int  Auto_increment  NOT NULL ,
        titreVO     Varchar (50) NOT NULL ,
        titreVF     Varchar (50) NOT NULL ,
        annee       Year NOT NULL ,
        realisateur Varchar (50) NOT NULL ,
        duree       Int NOT NULL ,
        affiche     Varchar (50) NOT NULL ,
        lienVideo   Varchar (200) NOT NULL ,
        synopsisVO  Text NOT NULL ,
        synopsisVF  Text NOT NULL ,
        idPays      Int NOT NULL ,
        idGenre     Int NOT NULL
	,CONSTRAINT Film_PK PRIMARY KEY (idFilm)

	,CONSTRAINT Film_Pays_FK FOREIGN KEY (idPays) REFERENCES Pays(idPays)
	,CONSTRAINT Film_Genre0_FK FOREIGN KEY (idGenre) REFERENCES Genre(idGenre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Seance
#------------------------------------------------------------

CREATE TABLE Seance(
        idFilm     Int NOT NULL ,
        dateSeance Date NOT NULL
	,CONSTRAINT Seance_PK PRIMARY KEY (idFilm,dateSeance)

	,CONSTRAINT Seance_Film_FK FOREIGN KEY (idFilm) REFERENCES Film(idFilm)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        idPersonne Int  Auto_increment  NOT NULL ,
        nomPers    Varchar (50) NOT NULL ,
        prenomPers Varchar (50) NOT NULL ,
        mail       Varchar (50) NOT NULL ,
        mdp        Varchar (50) NOT NULL
	,CONSTRAINT Personne_PK PRIMARY KEY (idPersonne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Recompense
#------------------------------------------------------------

CREATE TABLE Recompense(
        idRecompense  Int  Auto_increment  NOT NULL ,
        nomRecompense Varchar (100) NOT NULL ,
        idPays        Int NOT NULL
	,CONSTRAINT Recompense_PK PRIMARY KEY (idRecompense)

	,CONSTRAINT Recompense_Pays_FK FOREIGN KEY (idPays) REFERENCES Pays(idPays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Inscription
#------------------------------------------------------------

CREATE TABLE Inscription(
        idPersonne   Int NOT NULL ,
        idFilm       Int NOT NULL ,
        dateSeance   Date NOT NULL ,
        dateHeureIns Datetime NOT NULL ,
        presence     Bool NOT NULL
	,CONSTRAINT Inscription_PK PRIMARY KEY (idPersonne,idFilm,dateSeance)

	,CONSTRAINT Inscription_Personne_FK FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne)
	,CONSTRAINT Inscription_Seance0_FK FOREIGN KEY (idFilm,dateSeance) REFERENCES Seance(idFilm,dateSeance)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: prixFilm
#------------------------------------------------------------

CREATE TABLE prixFilm(
        idRecompense Int NOT NULL ,
        idFilm       Int NOT NULL ,
        annee        Year NOT NULL
	,CONSTRAINT prixFilm_PK PRIMARY KEY (idRecompense,idFilm)

	,CONSTRAINT prixFilm_Recompense_FK FOREIGN KEY (idRecompense) REFERENCES Recompense(idRecompense)
	,CONSTRAINT prixFilm_Film0_FK FOREIGN KEY (idFilm) REFERENCES Film(idFilm)
)ENGINE=InnoDB;

