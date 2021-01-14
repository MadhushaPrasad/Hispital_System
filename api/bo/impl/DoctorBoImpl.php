<?php

require_once __DIR__ . '/../DoctorBo.php';
require_once __DIR__ . '/../../model/Doctor.php';
require_once __DIR__ . '/../../repository/impl/DoctorRepositoryImpl.php';
require_once __DIR__ . '/../../db/DBConnection.php';

class DoctorBoImpl implements DoctorBo
{

    function addDoctor(Doctor $doctor)
    {
        $docRepo = new DoctorRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $docRepo->setConnection($connection);
        $newDoc = new Doctor($doctor->getClinicId(), $doctor->getFirstName(), $doctor->getLastName(),
            $doctor->getAddress(), $doctor->getMNumber(), $doctor->getConCharge(), $doctor->getEducation(),
            $doctor->getDob(), $doctor->getStatus());
        $res = $docRepo->addDoctor($newDoc);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function updateDoctor(Doctor $doctor)
    {

        $docRepo = new DoctorRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $docRepo->setConnection($connection);
        $updateDoc = new Doctor($doctor->getClinicId(), $doctor->getFirstName(), $doctor->getLastName(),
            $doctor->getAddress(), $doctor->getMNumber(), $doctor->getConCharge(), $doctor->getEducation(),
            $doctor->getDob(), $doctor->getStatus());
        $updateDoc->setDoctorId($doctor->getDoctorId());
        $res = $docRepo->updateDoctor($updateDoc);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function deleteDoctor($doctorID)
    {
        $docRepo = new DoctorRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $docRepo->setConnection($connection);
        $response = $docRepo->deleteDoctor($doctorID);
        if ($response) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function searchDoctor($doctorID)
    {
        // TODO: Implement searchDoctor() method.
    }

    function getAllDoctor()
    {
        $doctorRepo = new DoctorRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $doctorRepo->setConnection($connection);
        $doctorArray = $doctorRepo->getAllDoctor();
        return $doctorArray;
    }
}