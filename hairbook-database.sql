CREATE DATABASE HairBook;

CREATE TABLE Usr (
    name_user VARCHAR(200) NOT NULL,
    pword VARCHAR(200) NOT NULL,
    hair_type VARCHAR(100) NOT NULL,
    PRIMARY KEY (name_user)
);

CREATE TABLE Notes (
    id INTEGER NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NULL,
    note VARCHAR(200) NULL,
    name_user VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (name_user) REFERENCES Usr(name_user)
);