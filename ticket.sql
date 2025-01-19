CREATE TABLE paiement(
   idpaie VARCHAR(15),
   montant DECIMAL(6,2),
   modepaie VARCHAR(20),
   datepaie DATE,
   PRIMARY KEY(idpaie)
);

CREATE TABLE voyage(
   idvoyage VARCHAR(10),
   datedep DATE,
   heuredep TIME,
   lieudep VARCHAR(20),
   lieuarr VARCHAR(20),
   durée TIME,
   PRIMARY KEY(idvoyage)
);

CREATE TABLE bus(
   idbus VARCHAR(15),
   immat VARCHAR(15),
   capacité INT,
   modele VARCHAR(20),
   idvoyage VARCHAR(10) NOT NULL,
   PRIMARY KEY(idbus),
   FOREIGN KEY(idvoyage) REFERENCES voyage(idvoyage)
);

CREATE TABLE conducteur(
   idconduct VARCHAR(8),
   nomc VARCHAR(50),
   prenomc VARCHAR(50),
   tel VARCHAR(20),
   adresse VARCHAR(30),
   PRIMARY KEY(idconduct)
);

CREATE TABLE client(
   idclient VARCHAR(10),
   nomclt VARCHAR(50),
   prenomclt VARCHAR(50),
   e_mail VARCHAR(50),
   tel VARCHAR(15),
   PRIMARY KEY(idclient)
);

CREATE TABLE ticket(
   idticket VARCHAR(15),
   dateachat DATETIME,
   prix INT,
   idclient VARCHAR(10) NOT NULL,
   idvoyage VARCHAR(10) NOT NULL,
   idpaie VARCHAR(15) NOT NULL,
   PRIMARY KEY(idticket),
   FOREIGN KEY(idclient) REFERENCES client(idclient),
   FOREIGN KEY(idvoyage) REFERENCES voyage(idvoyage),
   FOREIGN KEY(idpaie) REFERENCES paiement(idpaie)
);

CREATE TABLE etre_conduit(
   idbus VARCHAR(15),
   idconduct VARCHAR(8),
   datec VARCHAR(50),
   PRIMARY KEY(idbus, idconduct),
   FOREIGN KEY(idbus) REFERENCES bus(idbus),
   FOREIGN KEY(idconduct) REFERENCES conducteur(idconduct)
);
