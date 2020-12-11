<?php

require_once __DIR__ . '/../ClinicBo.php';
require_once __DIR__ . '/../../model/Clinic.php';
require_once __DIR__ . '/../../repository/impl/ClinicRepositoryImpl.php';
require_once __DIR__ . '/../../db/DBConnection.php';

class ClinicBoImpl implements ClinicBo
{

    function addClinic(Clinic $clinic)
    {
        $connection = (new DBConnection())->getConnection();
        $clinicRepo = new ClinicRepositoryImpl();
        $clinicRepo->setConnection($connection);
        $newNlinic = new Clinic($clinic->getClinicName(), $clinic->getClinicLocation(),
            $clinic->getOpeningDate(), $clinic->getClosingDate(), $clinic->getOpeningTime(),
            $clinic->getClosingTime(), $clinic->getStatus());
        $res = $clinicRepo->addClinic($newNlinic);

        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function updateClinic(Clinic $clinic)
    {
        // TODO: Implement updateClinic() method.
    }

    function deleteClinic($clinicID)
    {
        $clinicRepo = new ClinicRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $clinicRepo->setConnection($connection);
        $response = $clinicRepo->deleteClinic($clinicID);
        if ($response) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function searchClinic($clinicID)
    {
        // TODO: Implement searchClinic() method.
    }

    function getAllClinic()
    {
        $clinicRepo = new ClinicRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $clinicRepo->setConnection($connection);
        $clinicArray = $clinicRepo->getAllClinic();
        return $clinicArray;
    }
}