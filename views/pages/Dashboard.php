<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/css/mdb.min.css">

    <link rel="stylesheet" href="../../assets/css/dashboard.css">

    <link rel="stylesheet" href="../../assets/css/sidebar.css">


</head>
<body>

<?php include_once "../includes/sidebar.php" ?>

<div class="wrapper">
    <div class="main_container">
        <div class="row">
            <div class="item">
                <div class="row d-flex justify-content-around">
                    <div class="orderDiv">
                        <p>Doctors</p>
                        <p>25</p>
                    </div>
                    <div class="patientsDiv">
                        <p>Patients</p>
                        <p>25</p>
                    </div>
                    <div class="appointmentDiv">
                        <p>Appointments</p>
                        <p>25</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <!--    recent Appointment table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <h4 class="mt-3 mb-4">Recent Appointments</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                        </tr>
                        </thead>
                        <tbody id="appointmentBody">
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="offset-lg-4 offset-md-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!--    On Working Doctors table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <h4 class="mt-3 mb-4">On Working Doctors</h4>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Clinic Name</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Consultancy Charge</th>
                            <th scope="col">Education</th>
                            <th scope="col">Date Of Birth</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody id="doctorBody">
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="offset-lg-4 offset-md-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="item">
                <!--    Out of Stock medic table div-->
                <div class="row ml-lg-5 ml-md-2">
                    <h4 class="mb-4"> Out of Stock medic</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">company</th>
                            <th scope="col">weight</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                        </tr>
                        </thead>
                        <tbody id="outOfStock">
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="offset-lg-4 offset-md-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/sidebar.js" type="application/javascript"></script>
<script src="../../api/controller/DashboardController.js" type="application/javascript"></script>
</body>
</html>