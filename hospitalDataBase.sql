DROP DATABASE hospital;
CREATE DATABASE hospital;

USE hospital;

CREATE TABLE clinic(
	clinic_id INT AUTO_INCREMENT NOT NULL,
	clinic_name VARCHAR(255) NOT NULL,
	clinic_location VARCHAR(255) NOT NULL,
	opening_date DATE NOT NULL,
	closing_date DATE NOT NULL,
	opening_time TIME NOT NULL,
	closing_time TIME NOT NULL,
	status VARCHAR(100) NOT NULL DEFAULT "Closed",
	CONSTRAINT PRIMARY KEY(clinic_id)
);

CREATE TABLE doctor(
	doctor_id INT AUTO_INCREMENT NOT NULL,
	clinic_id INT NOT NULL,
	firstName VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	address VARCHAR(100) NOT NULL,
	mNumber VARCHAR(10) NOT NULL,
	conCharge DECIMAL(10,2) NOT NULL,
	education VARCHAR(100) NOT NULL,
	dob DATE NOT NULL,
	status VARCHAR(100) NOT NULL DEFAULT "Pending",
	CONSTRAINT PRIMARY KEY(doctor_id),
	CONSTRAINT FOREIGN KEY(clinic_id) REFERENCES clinic(clinic_id)
	ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE patient(
	nic VARCHAR(11) NOT NULL,
	clinic_id INT NOT NULL,
	firstName VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	city VARCHAR(50) NOT NULL,
	address VARCHAR(100) NOT NULL,
	mNumber VARCHAR(10) NOT NULL,
	bloodType VARCHAR(10) NOT NULL,
	gender VARCHAR(10) NOT NULL,
	dob DATE NOT NULL,
	height INT(4) NOT NULL,
	weight INT(4) NOT NULL,
	smoker VARCHAR(4) NOT NULL,
	alcohol VARCHAR(4) NOT NULL,
	CONSTRAINT PRIMARY KEY(nic),
	CONSTRAINT FOREIGN KEY(clinic_id) REFERENCES clinic(clinic_id)
	ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE appointment(
	nic VARCHAR(11) NOT NULL,
	patient_nic VARCHAR(11) NOT NULL,
	appointment_date DATE NOT NULL,
	appointment_time DATE NOT NULL,
	clinic_name VARCHAR(255) NOT NULL,
	doctor_name VARCHAR(255) NOT NULL,
	status VARCHAR(10) NOT NULL DEFAULT "Pending",
	appointmentReason VARCHAR(255) NOT NULL,
	CONSTRAINT PRIMARY KEY(nic),
	CONSTRAINT FOREIGN KEY(patient_nic) REFERENCES patient(nic)
	ON DELETE CASCADE ON UPDATE CASCADE
);




INSERT INTO clinic (clinic_name,clinic_location,opening_date,closing_date,opening_time,closing_time,status)
VALUES("jjgjcx","dgsjgjd",12/09/2020,12/09/2020,12/09/2020,12/09/2020,"closed");

UPDATE clinic SET clinic_name="Silva",clinic_location="Gamagoda",opening_date="12/09/2020,",closing_date="12/09/2020",opening_time="07.8.P.M",closing_time="07.8.P.M",status = "closeed" WHERE clinic_id=15;


CREATE TABLE lab(
	lab_id INT   NOT NULL,
	patien_NIC VARCHAR(15) NOT NULL,
	main_topic VARCHAR(255) NOT NULL,
	sub_topic VARCHAR(255) NOT NULL,
	value DECIMAL(10,2) NOT NULL,
	CONSTRAINT PRIMARY KEY(lab_id)
);

INSERT INTO lab(patien_NIC,main_topic,sub_topic,value) VALUES("991212454V","Hello","Hello02",454.00);

DROP TABLE mainTopic;
DROP TABLE subTopic;

CREATE TABLE mainTopic(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	main_topic_title VARCHAR(255) NOT NULL
);



CREATE TABLE subTopic(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	sub_topic_title VARCHAR(255) NOT NULL
);

INSERT INTO subTopic(sub_topic_title) VALUES("Hello");
INSERT INTO mainTopic(main_topic_title) VALUES("Hello");

CREATE TABLE treatment(
	treatmentId INT AUTO_INCREMENT NOT NULL,
	lab_id INT   NOT NULL,
	patient_nic VARCHAR(11) NOT NULL,
	treatmentDescription VARCHAR(255) NOT NULL,
	price DECIMAL(10,2) NOT NULL,
	CONSTRAINT PRIMARY KEY(treatmentId),
	CONSTRAINT FOREIGN KEY(lab_id) REFERENCES lab(lab_id)
	ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY(patient_nic) REFERENCES patient(nic)
	ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE prescription(
	prescriptionId INT AUTO_INCREMENT NOT NULL,
	treatmentId INT NOT NULL,
	patient_nic VARCHAR(11) NOT NULL,
	prescriptionDescription VARCHAR(255) NOT NULL,
	price DECIMAL(10,2) NOT NULL,
	CONSTRAINT PRIMARY KEY(prescriptionId),
	CONSTRAINT FOREIGN KEY(treatmentId) REFERENCES treatment(treatmentId)
	ON DELETE CASCADE ON UPDATE CASCADE
);


