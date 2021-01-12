<?php

require_once __DIR__ . '/../model/Doctor.php';

interface DoctorRepository
{
    function setConnection(mysqli $con);

    function addDoctor(Doctor $doctor): bool;

    function updateDoctor(Doctor $doctor): bool;

    function deleteDoctor($doctorID): bool;

    function searchDoctor($doctorID);

    function getAllDoctor(): array;
}