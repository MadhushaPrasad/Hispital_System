CREATE DATABASE hospital;

USE hospital;

CREATE TABLE clinic(
	clinic_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	clinic_name VARCHAR(255) NOT NULL,
	clinic_location VARCHAR(255) NOT NULL,
	opening_date DATE NOT NULL,
	closing_date DATE NOT NULL,
	opening_time TIME NOT NULL,
	closing_time TIME NOT NULL,
	status VARCHAR(100) NOT NULL DEFAULT "Closed"
);