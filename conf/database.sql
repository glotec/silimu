CREATE DATABASE sante;

CREATE TABLE personnes
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25),
    postnom VARCHAR(40),
    nationalite VARCHAR(10),
    etatcivil VARCHAR(15),
    genre VARCHAR(8),
    lieunaissance VARCHAR(50),
    datenaissance DATE,
    contact NUMERIC,
    email VARCHAR(50),
    photo VARCHAR(45)
);

CREATE TABLE addresses
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    commune VARCHAR(30),
    personne INTEGER
);

CREATE TABLE affectations
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    territoire VARCHAR(30),
    structure VARCHAR(30)
);

CREATE TABLE lieux
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    lieu VARCHAR(30),
    affectation INTEGER
);

CREATE TABLE services
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    service VARCHAR(30)
);

CREATE TABLE professions
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    profession VARCHAR(30)
);

CREATE TABLE niveauetudes
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    niveauetude VARCHAR(30)
);

CREATE TABLE fonctions
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    fonction VARCHAR(30)
);

CREATE TABLE grades
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    grade VARCHAR(30)
);

CREATE TABLE qualifications
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    qualification VARCHAR(30)
);

CREATE TABLE autresinfos
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    position VARCHAR(30),
    matricule VARCHAR(20),
    numeroordre VARCHAR(15),
    salaire INTEGER,
    prime INTEGER,
    devise VARCHAR(8),
    personne INTEGER
);

CREATE TABLE logins
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nomutil VARCHAR(20),
    motdepasse VARCHAR(255),
    personne INTEGER
);

CREATE TABLE details
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    personne INTEGER,
    affectation INTEGER,
    service INTEGER
);

CREATE TABLE detailspers
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    datengange DATE,
    numeroref VARCHAR(8),
    dernierefonction VARCHAR(40),
    personne INTEGER,
    fonction INTEGER,
    grade INTEGER,
    qualification INTEGER,
    profession INTEGER
);

ALTER TABLE logins ADD CONSTRAINT fk_pe FOREIGN KEY (personne) REFERENCES personnes(id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE addresses ADD CONSTRAINT fk_addres FOREIGN KEY (personne) REFERENCES personnes (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE lieux ADD CONSTRAINT fk_aff FOREIGN KEY (affectation) REFERENCES affectation (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE details ADD CONSTRAINT fk_pers FOREIGN KEY (personne) REFERENCES personnes (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE details ADD CONSTRAINT fk_aff FOREIGN KEY (affectation) REFERENCES affectations (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE details ADD CONSTRAINT fk_ser FOREIGN KEY (service) REFERENCES services (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE detailspers ADD CONSTRAINT fk_pers FOREIGN KEY (personne) REFERENCES personnes (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE detailspers ADD CONSTRAINT fk_fonc FOREIGN KEY (fonction) REFERENCES fonctions (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE detailspers ADD CONSTRAINT fk_gr FOREIGN KEY (grade) REFERENCES grades (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE detailspers ADD CONSTRAINT fk_qual FOREIGN KEY (qualification) REFERENCES qualifications (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE detailspers ADD CONSTRAINT fk_prof FOREIGN KEY (profession) REFERENCES professions (id) ON DELETE CASCADE ON UPDATE CASCADE;