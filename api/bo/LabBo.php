<?php

require_once __DIR__ . '/../model/Lab.php';

interface LabBo
{
    function addLab(Lab $lab);

    function updateLab(Lab $lab);

    function deleteLab($labID);

    function searchLab($labID);

    function getAllLabs();

    function getAllMain();

    function getAllSub();
}