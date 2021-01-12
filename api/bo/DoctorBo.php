<?php

include_once __DIR__ . "/../model/Doctor.php";

interface DoctorBo
{
    function addDoctor(Doctor $doctor);

    function updateDoctor(Doctor $doctor);

    function deleteDoctor($doctorID);

    function searchDoctor($doctorID);

    function getAllDoctor();
}