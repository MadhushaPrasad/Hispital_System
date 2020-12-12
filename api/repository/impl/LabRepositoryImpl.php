<?php

require_once __DIR__ . '/../LabRepository.php';
require_once __DIR__ . '/../../model/Lab.php';

class LabRepositoryImpl implements LabRepository
{
    private $connection;

    function setConnection(mysqli $con)
    {
        $this->connection = $con;
    }

    function addLab(Lab $lab): bool
    {
        $response = $this->connection->query("INSERT INTO lab (patien_NIC,main_topic,sub_topic,value)
                                            VALUES('{$lab->getPatienNIC()}','{$lab->getMainTopic()}',
                                            '{$lab->getSubTopic()}','{$lab->getValue()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function updateLab(Lab $lab): bool
    {
        $response = $this->connection->query("UPDATE lab SET lab_id='{$lab->getLabId()}',
                patien_NIC='{$lab->getPatienNIC()}',main_topic ='{$lab->getMainTopic()}',
                sub_topic = '{$lab->getSubTopic()}',value='{$lab->getValue()}' 
                WHERE lab_id = '{$lab->getLabId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function deleteLab($labID): bool
    {
        $response = $this->connection->query("DELETE FROM lab WHERE lab_id='{$labID}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function searchLab($labID)
    {
        // TODO: Implement searchLab() method.
    }

    function getAllLab(): array
    {
        $resultSet = $this->connection->query("SELECT * FROM lab");
        return $resultSet->fetch_all();
    }
}