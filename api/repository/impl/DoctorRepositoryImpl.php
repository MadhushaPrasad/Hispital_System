<?php

require_once __DIR__ . '/../DoctorRepository.php';
require_once __DIR__ . '/../../model/Doctor.php';

class DoctorRepositoryImpl implements DoctorRepository
{
    private $connection;

    function setConnection(mysqli $con)
    {
        $this->connection = $con;
    }

    function addDoctor(Doctor $doctor): bool
    {

        $response = $this->connection->query("INSERT INTO doctor (clinic_id,firstName,lastName,address,mNumber,
                conCharge,education,dob,status)VALUES('{$doctor->getClinicId()}','{$doctor->getFirstName()}',
                    '{$doctor->getLastName()}','{$doctor->getAddress()}','{$doctor->getMNumber()}',
                    '{$doctor->getConCharge()}','{$doctor->getEducation()}','{$doctor->getDob()}',
                    '{$doctor->getStatus()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function updateDoctor(Doctor $doctor): bool
    {
        $response = $this->connection->query("UPDATE doctor SET doctor_id='{$doctor->getDoctorId()}',
                                        clinic_id='{$doctor->getClinicId()}',firstName ='{$doctor->getFirstName()}',
                                        lastName= '{$doctor->getLastName()}',address='{$doctor->getAddress()}',
                                        mNumber= '{$doctor->getMNumber()}',conCharge='{$doctor->getConCharge()}',
                                        education= '{$doctor->getEducation()}',dob='{$doctor->getDob()}',
                                        status = '{$doctor->getStatus()}' WHERE doctor_id = '{$doctor->getDoctorId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function deleteDoctor($doctorID): bool
    {
        $response = $this->connection->query("DELETE FROM doctor WHERE doctor_id='{$doctorID}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function searchDoctor($doctorID)
    {
        $resultSet = $this->connection->query("select * from doctor where doctor_id='{$doctorID}'");
        return $resultSet->fetch_assoc();
    }

    function getAllDoctor(): array
    {
        $resultSet = $this->connection->query("SELECT * FROM doctor");
        return $resultSet->fetch_all();
    }

    function searchByDoctorName($firstName, $lastName)
    {
        $resultSet = $this->connection->query("select * from doctor where firstName='{$firstName}' && lastName='{$lastName}'");
        return $resultSet->fetch_assoc();
    }

    function searchByDoctorMNumber($mobileNumber)
    {
        $resultSet = $this->connection->query("select * from doctor where mNumber='{$mobileNumber}'");
        return $resultSet->fetch_assoc();
    }
}