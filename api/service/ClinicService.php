<?php

require_once __DIR__ . "/../bo/impl/ClinicBoImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$clinicBO = new ClinicBoImpl();

switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "delete":
                $clinicID = $_GET["clinicID"];
                $res = $clinicBO->deleteClinic($clinicID);
                echo $res;
                break;

            case "search":
                $clinicID = $_GET["clinicID"];
                $clinic = $clinicBO->searchClinic($clinicID);
                echo json_encode($clinic);
                break;

            case "getAll" :
                $clinicArray = $clinicBO->getAllClinic();
                echo json_encode($clinicArray);
                break;
        }
        break;

    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "save" :
                $clinicName = $_POST["clinicName"];
                $location = $_POST["location"];
                $openingDate = $_POST["OpeningDate"];
                $closingDate = $_POST["ClosingDate"];
                $openingTime = $_POST["openingTime"];
                $closeTime = $_POST["closeTime"];
                $status = $_POST["status"];
                if ($status == '1') {
                    $status = "Closed";
                } else {
                    $status = "Oppened";
                }
                $newClinic = new Clinic($clinicName, $location, $openingDate, $closingDate, $openingTime, $closeTime, $status);
                $res = $clinicBO->addClinic($newClinic);
                echo $res;
                break;
            case "update" :
                $clinicID = $_POST["clinicID"];
                $clinicName = $_POST["clinicName"];
                $location = $_POST["location"];
                $openingDate = $_POST["OpeningDate"];
                $closingDate = $_POST["ClosingDate"];
                $openingTime = $_POST["openingTime"];
                $closeTime = $_POST["closeTime"];
                $status = $_POST["status"];
                if ($status == '1') {
                    $status = "Closed";
                } else {
                    $status = "Oppened";
                }
                $newClinic = new Clinic($clinicName, $location, $openingDate, $closingDate, $openingTime, $closeTime, $status);
                $newClinic->setClinicId($clinicID);
                $res = $clinicBO->updateClinic($newClinic);
                echo $res;
                break;
        }
        break;
}
