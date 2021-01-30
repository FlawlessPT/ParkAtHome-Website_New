CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	name TEXT NOT NULL,
	username TEXT UNIQUE NOT NULL,
	password TEXT NOT NULL,
	contact TEXT NULL,
	email TEXT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE parks (
	id int NOT NULL AUTO_INCREMENT,
	name text NOT NULL,
	totalSpaces int NOT NULL,
	localization text NOT NULL,
	nrFloors int NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE plates (
	id int NOT NULL AUTO_INCREMENT,
	plate text NULL DEFAULT '00-00-AA',
	idUser int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (idUser) REFERENCES users(id)
);

INSERT INTO `parks` (`id`, `name`, `totalSpaces`, `localization`, `nrFloors`) VALUES
(1, 'Parque 1', 44, 'Gondomar', 2),
(2, 'Parque 2', 44, 'Porto', 2),
(3, 'Parque 3', 40, 'Gens', 2);