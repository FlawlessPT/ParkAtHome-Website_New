CREATE DATABASE parkathome_web;

use parkathome_web;

CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	name TEXT NOT NULL,
	username TEXT UNIQUE NOT NULL,
	password TEXT NOT NULL,
	contact TEXT,
	email TEXT,
	PRIMARY KEY (id)
);

CREATE TABLE park (
	id int NOT NULL AUTO_INCREMENT,
	name text NOT NULL,
	totalSpaces int NOT NULL,
	localization text NOT NULL,
	nrFloors int NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE vehicules (
	id int NOT NULL AUTO_INCREMENT,
	name text NOT NULL,
	plate text UNIQUE NOT NULL,
	state BOOLEAN NOT NULL,
	idUser int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (idUser) REFERENCES users(id)
);