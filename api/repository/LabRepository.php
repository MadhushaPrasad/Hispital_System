<?php
require_once __DIR__ . '/../model/Lab.php';

interface LabRepository
{
    function setConnection(mysqli $con);

    function addLab(Lab $lab): bool;

    function updateLab(Lab $lab): bool;

    function deleteLab($labID): bool;

    function searchLab($labID);

    function getAllLab(): array;

    function getAllMain(): array;

    function getAllSub(): array;
}