<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/css/mdb.min.css">

    <link rel="stylesheet" href="../../assets/css/dashboard.css">

    <link rel="stylesheet" href="../../assets/css/clinic.css">

    <link rel="stylesheet" href="../../assets/css/sidebar.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<?php include_once "../includes/sidebar.php" ?>
<div class="wrapper">
    <div class="main_container">
        <div class="row">
            <div class="item ml-lg-5 ml-md-2 mt-3">
                <h3>Labs</h3>
            </div>
            <div class="item">
                <!--    recent Appointment table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <!--    recent Appointment table div-->
                    <div class="col-lg-12" style="margin-right: -15px;">
                        <form id="mail-form" method="post" action="">
                            <div class="row mb-2">
                                <div class="col-lg-3 col-sm-12 ">
                                    <input type="text" id="nic" class="form-control" placeholder="Patient NIC"
                                           name="nic">
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-md-2 mt-lg-0">
                                    <select id="mainTopic" class="bg-white custom-select form-lg">

                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-md-2 mt-lg-0">
                                    <select id="subTopic" class="bg-white custom-select form-lg">

                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-md-2 mt-lg-0">
                                    <div class="input-group mb-3">
                                        <label class="sr-only" for="inlineFormInputGroup">Value</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rs:</div>
                                            </div>
                                            <input type="text" class="form-control" id="values"
                                                   placeholder="Value">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-around mt-4">
                                <button type="button" class="btn btnCancel">Cancel</button>
                                <button type="button" onclick="updateLab()" class="btn btnUpdate">update</button>
                                <button type="button" onclick="addLab()" class="btn btnCreate">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item ml-lg-5 ml-md-2 mt-3">
                <!--    On Working Labs table div-->
                <div class="row mt-3 mb-5">
                    <h4 class="mt-3 mb-4">On Working Labs</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Patient ID</th>
                            <th scope="col">Main Topic</th>
                            <th scope="col">Sub Topic</th>
                            <th scope="col">Rs</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody id="labBody">
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
<script src="../../assets/js/mdb.min.js"></script>
<script src="../../assets/js/sidebar.js" type="application/javascript"></script>
<script src="../../api/controller/LabController.js" type="application/javascript"></script>
</body>
</html>