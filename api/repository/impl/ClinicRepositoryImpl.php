<?php

require_once __DIR__ . '/../ClinicRepository.php';
require_once __DIR__ . '/../../model/Clinic.php';

class ClinicRepositoryImpl implements ClinicRepository
{

    private $connection;

    /**
     * ClinicRepositoryImpl constructor.
     */
//    public function __construct()
//    {
//        $this->connection = (new DBConnection())->getConnection();
//    }


    function setConnection(mysqli $con)
    {
        $this->connection = $con;
    }

    function addClinic(Clinic $clinic): bool
    {
        $response = $this->connection->query("INSERT INTO clinic (clinic_name,clinic_location,opening_date,closing_date,
                    opening_time,closing_time,status)VALUES('{$clinic->getClinicName()}','{$clinic->getClinicLocation()}',
                    '{$clinic->getOpeningDate()}','{$clinic->getClosingDate()}','{$clinic->getOpeningTime()}',
                    '{$clinic->getClosingTime()}','{$clinic->getStatus()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function updateClinic(Clinic $clinic): bool
    {
        $response = $this->connection->query("UPDATE clinic SET clinic_id='{$clinic->getClinicId()}',
                                clinic_name='{$clinic->getClinicName()}',clinic_location ='{$clinic->getClinicLocation()}',
                                opening_date = '{$clinic->getOpeningDate()}',closing_date='{$clinic->getClosingDate()}',
                                opening_time = '{$clinic->getOpeningTime()}',closing_time = '{$clinic->getClosingTime()}',
                                status = '{$clinic->getStatus()}' WHERE clinic_id = '{$clinic->getClinicId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function deleteClinic($clinicID): bool
    {
        $response = $this->connection->query("DELETE FROM clinic WHERE clinic_id='{$clinicID}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function searchClinic($clinicID)
    {
        $resultSet = $this->connection->query("select * from clinic where clinic_id='{$clinicID}'");
        return $resultSet->fetch_assoc();
    }

    function getAllClinic(): array
    {
        $resultSet = $this->connection->query("SELECT * FROM clinic");
        return $resultSet->fetch_all();
    }
}