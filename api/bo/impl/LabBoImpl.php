<?php

require_once __DIR__ . '/../LabBo.php';
require_once __DIR__ . '/../../model/Lab.php';
require_once __DIR__ . '/../../repository/impl/LabRepositoryImpl.php';
require_once __DIR__ . '/../../db/DBConnection.php';

class LabBoImpl implements LabBo
{

    function addLab(Lab $lab)
    {
        $labRepo = new LabRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $labRepo->setConnection($connection);
        $newLab = new Lab($lab->getPatienNIC(),$lab->getMainTopic(),$lab->getSubTopic(),$lab->getValue());
        $res = $labRepo->addLab($newLab);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function updateLab(Lab $lab)
    {
        $labRepo = new LabRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $labRepo->setConnection($connection);
        $updateLab = new Lab($lab->getPatienNIC(),$lab->getMainTopic(),$lab->getSubTopic(),$lab->getValue());
        $updateLab->setLabId($lab->getLabId());
        $res = $labRepo->updateLab($updateLab);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function deleteLab($labID)
    {
        $labRepo = new LabRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $labRepo->setConnection($connection);
        $response = $labRepo->deleteLab($labID);
        if ($response) {
            return true;
        } else {
            return $connection->error;
        }
    }

    function searchLab($labID)
    {
        // TODO: Implement searchLab() method.
    }

    function getAllLabs()
    {
        $labRepo = new LabRepositoryImpl();
        $connection = (new DBConnection())->getConnection();
        $labRepo->setConnection($connection);
        $labArray = $labRepo->getAllLab();
        return $labArray;
    }
}