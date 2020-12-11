<?php

require_once __DIR__ . '/../model/Clinic.php';

interface ClinicBo
{

    function addClinic(Clinic $clinic);

    function updateClinic(Clinic $clinic);

    function deleteClinic($clinicID);

    function searchClinic($clinicID);

    function getAllClinic();

}