#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS cineclap CHARACTER SET 'utf8';

USE cineclap;
#------------------------------------------------------------
# Table: Personne 
#------------------------------------------------------------

CREATE TABLE Personne(
        idPersonne Int  Auto_increment  NOT NULL ,
        nomPers    Varchar (50) NOT NULL ,
        prenomPers Varchar (50) NOT NULL ,
        mail       Varchar (50) NOT NULL ,
        mdp        Varchar (50) NOT NULL ,
        nbAbsences Int NULL ,
        coordo     Boolean NULL
	,CONSTRAINT Personne_PK PRIMARY KEY (idPersonne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classe
#------------------------------------------------------------

CREATE TABLE Classe(
        idClasse  Int  Auto_increment  NOT NULL ,
        nomClasse Varchar (50) NOT NULL
	,CONSTRAINT Classe_PK PRIMARY KEY (idClasse)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PersClasse
#------------------------------------------------------------

CREATE TABLE PersClasse(
        idPersonne    Int NOT NULL ,
        idClasse      Int NOT NULL ,
        anneeScolaire Char (20) NOT NULL
	,CONSTRAINT PersClasse_PK PRIMARY KEY (idPersonne,idClasse,anneeScolaire)

	,CONSTRAINT PersClasse_Personne_FK FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne)
	,CONSTRAINT PersClasse_Classe0_FK FOREIGN KEY (idClasse) REFERENCES Classe(idClasse)
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
# Table: Pays
#------------------------------------------------------------

CREATE TABLE Pays(
        idPays   Int  Auto_increment  NOT NULL ,
        nomPays  Varchar (50) NOT NULL ,
        clapPays Varchar (100) NOT NULL
	,CONSTRAINT Pays_PK PRIMARY KEY (idPays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Film
#------------------------------------------------------------

CREATE TABLE Film(
        idFilm       Int  Auto_increment  NOT NULL ,
        titreVO      Varchar (50) NOT NULL ,
        titreVF      Varchar (50) NOT NULL ,
        annee        Int NOT NULL ,
        realisateur  Varchar (100) NOT NULL ,
        duree        Int NOT NULL ,
        affiche      Varchar (50) NOT NULL ,
        lienVideo    Varchar (100) NOT NULL ,
        synopsisVO   Text NOT NULL ,
        synopsisVF   Text NOT NULL ,
        idGenre      Int NOT NULL ,
        idPays       Int NOT NULL
	,CONSTRAINT Film_PK PRIMARY KEY (idFilm)

	,CONSTRAINT Film_Genre_FK FOREIGN KEY (idGenre) REFERENCES Genre(idGenre)
	,CONSTRAINT Film_Pays0_FK FOREIGN KEY (idPays) REFERENCES Pays(idPays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Seance
#------------------------------------------------------------

CREATE TABLE Seance(
        idFilm     Int NOT NULL ,
        dateSeance Datetime NOT NULL
	,CONSTRAINT Seance_PK PRIMARY KEY (idFilm,dateSeance)

	,CONSTRAINT Seance_Film_FK FOREIGN KEY (idFilm) REFERENCES Film(idFilm)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Inscription
#------------------------------------------------------------

CREATE TABLE Inscription(
        idPersonne   Int NOT NULL ,
        idFilm       Int NOT NULL ,
        dateSeance   Datetime NOT NULL ,
        dateHeureIns Datetime NOT NULL ,
        presence     Boolean NOT NULL
	,CONSTRAINT Inscription_PK PRIMARY KEY (idPersonne,idFilm,dateSeance)

	,CONSTRAINT Inscription_Personne_FK FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne)
	,CONSTRAINT Inscription_Seance0_FK FOREIGN KEY (idFilm,dateSeance) REFERENCES Seance(idFilm,dateSeance)
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