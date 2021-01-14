<?php

require_once __DIR__ . "/../bo/impl/DoctorBoImpl.php";
require_once __DIR__ . "/../bo/impl/ClinicBoImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$docBO = new DoctorBoImpl();
$clinBO = new ClinicBoImpl();

switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "delete":
                $docID = $_GET["docID"];
                $res = $docBO->deleteDoctor($docID);
                echo $res;
                break;

            case "search":
                break;

            case "getAllDoctor" :
                $doctorArray = $docBO->getAllDoctor();
                echo json_encode($doctorArray);
                break;
//
//            case "getAllClinic" :
//                $clinicArray = $clinBO->getAllClinic();
//                echo json_encode($clinicArray);
//                break;
        }
        break;

    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "saveDoc" :
                $clinic_id = $_POST["clinicName"];
                $firstName = $_POST["firstName"];
                $lastName = $_POST["lastName"];
                $address = $_POST["address"];
                $mNumber = $_POST["mobileNumber"];
                $conCharge = $_POST["consultancyCharge"];
                $education = $_POST["education"];
                $dob = $_POST["dob"];
                $status = $_POST["status"];
                $newDoc = new Doctor($clinic_id, $firstName, $lastName, $address, $mNumber, $conCharge, $education, $dob, $status);
                $res = $docBO->addDoctor($newDoc);
                echo $res;
                break;
            case "update" :

                $docID = $_POST["doctorID"];
                $clinic_id = $_POST["clinicName"];
                $firstName = $_POST["firstName"];
                $lastName = $_POST["lastName"];
                $address = $_POST["address"];
                $mNumber = $_POST["mobileNumber"];
                $conCharge = $_POST["consultancyCharge"];
                $education = $_POST["education"];
                $dob = $_POST["dob"];
                $status = $_POST["status"];
                $updateDoc = new Doctor($clinic_id, $firstName, $lastName, $address, $mNumber, $conCharge, $education, $dob, $status);
                $updateDoc->setDoctorId($docID);
                $res = $docBO->updateDoctor($updateDoc);
                echo $res;
                break;
        }
        break;
}
