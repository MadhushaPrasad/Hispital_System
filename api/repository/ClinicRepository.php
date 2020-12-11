<?php

require_once __DIR__ . '/../model/Clinic.php';

interface ClinicRepository
{

    function setConnection(mysqli $con);

    function addClinic(Clinic $clinic): bool;

    function updateClinic(Clinic $clinic): bool;

    function deleteClinic($clinicID): bool;

    function searchClinic($clinicID);

    function getAllClinic(): array;

}