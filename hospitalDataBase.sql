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

INSERT INTO clinic (clinic_name,clinic_location,opening_date,closing_date,opening_time,closing_time,status)
VALUES("jjgjcx","dgsjgjd",12/09/2020,12/09/2020,12/09/2020,12/09/2020,"closed");

UPDATE clinic SET clinic_name="Silva",clinic_location="Gamagoda",opening_date="12/09/2020,",closing_date="12/09/2020",opening_time="07.8.P.M",closing_time="07.8.P.M",status = "closeed" WHERE clinic_id=15;


CREATE TABLE lab(
	lab_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	patien_NIC VARCHAR(15) NOT NULL,
	main_topic VARCHAR(255) NOT NULL,
	sub_topic VARCHAR(255) NOT NULL,
	value DECIMAL(10,2) NOT NULL
);