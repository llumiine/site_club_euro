
#------------------------------------------------------------
# Table: Animateur
#------------------------------------------------------------



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
# Table: Seance
#------------------------------------------------------------

CREATE TABLE Seance(
        idFilm     Int NOT NULL ,
        dateSeance Date NOT NULL
	,CONSTRAINT Seance_PK PRIMARY KEY (idFilm,dateSeance)
	,CONSTRAINT Seance_Film_FK FOREIGN KEY (idFilm) REFERENCES Film(idFilm)
)ENGINE=InnoDB;

CREATE TABLE Animateur(
        idPersonne Int NOT NULL ,
        idFilm     Int NOT NULL ,
        dateSeance Date NOT NULL
	,CONSTRAINT Animateur_PK PRIMARY KEY (idPersonne,idFilm,dateSeance)
	,CONSTRAINT Animateur_Personne_FK FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne)
	,CONSTRAINT Animateur_Seance0_FK FOREIGN KEY (idFilm,dateSeance) REFERENCES Seance(idFilm,dateSeance)
)ENGINE=InnoDB;

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