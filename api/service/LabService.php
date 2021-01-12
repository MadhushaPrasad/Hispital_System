<?php

require_once __DIR__ . "/../bo/impl/LabBoImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$labBO = new LabBoImpl();

switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "delete":
                $labID = $_GET["labID"];
                $res = $labBO->deleteLab($labID);
                echo $res;
                break;

            case "search":
                break;
            case "getAll" :
                $labArray = $labBO->getAllLabs();
                echo json_encode($labArray);
                break;
            case "getAllMain" :
                $mainArray = $labBO->getAllMain();
                echo json_encode($mainArray);
                break;
            case "getAllSub" :
                $subArray = $labBO->getAllSub();
                echo json_encode($subArray);
                break;
        }
        break;

    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "save" :
                $patiensNIC = $_POST["patiensNIC"];
                $mainTopic = $_POST["mainTopic"];
                $subTopic = $_POST["subTopic"];
                $values = $_POST["values"];
                $newLab = new Lab($patiensNIC, $mainTopic, $subTopic, $values);
                $res = $labBO->addLab($newLab);
                echo $res;
                break;
            case "update" :
                $labID = $_POST["labID"];
                $patiensNIC = $_POST["patiensNIC"];
                $mainTopic = $_POST["mainTopic"];
                $subTopic = $_POST["subTopic"];
                $values = $_POST["values"];
                $updateLab = new Lab($patiensNIC, $mainTopic, $subTopic, $values);
                $updateLab->setLabId($labID);
                $res = $labBO->updateLab($updateLab);
                echo $res;
                break;
        }
        break;
}
