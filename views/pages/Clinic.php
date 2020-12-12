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

    <link rel="stylesheet" href="../../assets/css/toastr.min.css">

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

            <div class="item">

                <div class="item ml-lg-5 ml-md-2 mt-3">
                    <h3>Clinic</h3>
                </div>
                <!--    recent Clinic form div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <div class="col-lg-12" style="margin-right: -15px">
                        <form id="clinic-form">
                            <div class="row mb-2">
                                <div class="col-lg-4 col-sm-12">
                                    <input id="clinicName" type="text" class="form-control" placeholder="Clinic Name"
                                           name="clinicName">

                                </div>
                                <div class="col-lg-4 col-sm-12 mt-md-2 mt-lg-0">
                                    <input id="clinicLocation" type="text" class="form-control" placeholder="Location"
                                           name="location">
                                </div>
                                <div class="col-lg-4 col-sm-12  mt-md-2 mt-lg-0">
                                    <input id="OpeningDate" class="form-control" type="text"
                                           onfocus="(this.type='date')"
                                           placeholder="Opening Date"
                                           name="OpeningDate"
                                           max="2023-12-31">
                                </div>
                                <div class="col-lg-4  col-sm-12 mt-md-2">
                                    <input id="closingDate" class="form-control" type="text"
                                           onfocus="(this.type='date')"
                                           placeholder="Closing Date"
                                           name="ClosingDate"
                                           max="2023-12-31">
                                </div>
                                <div class="col-lg-4 col-sm-12 mt-md-2">
                                    <abbr title="Closing Time" style=" border-bottom: none !important;
                                                        cursor: inherit !important;text-decoration: none !important;">
                                        <input id="openingTime" class="form-control" type="text"
                                               onfocus="(this.type='time')"
                                               placeholder="Opening Time" name="openingTime">
                                    </abbr>
                                </div>
                                <div class="col-lg-4  col-sm-12 mt-md-2">
                                    <abbr title="Close Time" style=" border-bottom: none !important;
                                                        cursor: inherit !important;text-decoration: none !important;">
                                        <input class="form-control" id="closingTime" type="text"
                                               onfocus="(this.type='time')"
                                               placeholder="ClosingTime" name="closeTime">
                                    </abbr>
                                </div>
                                <div class="col-lg-4  col-sm-12 mt-md-2">
                                    <select class="custom-select" id="status" name="status">
                                        <option id="selectStatus" selected>Status</option>
                                        <option value="1">Closed</option>
                                        <option value="2">Oppened</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-around mt-4">
                                <button type="button" class="btn btnCancel">Cancel</button>
                                <button type="button" class="btn btnUpdate" onclick="updateClinic()">update</button>
                                <button type="button" class="btn btnCreate" onclick="addClinic()">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item">
                <!--    On Working Clinic table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <h4 class="mt-3 mb-4">On Working Clinic</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Clinic Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Opening date</th>
                            <th scope="col">Closing date</th>
                            <th scope="col">Opening Time</th>
                            <th scope="col">Closing Time</th>
                            <th scope="col">Status</th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody id="clinicBody">


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
<script src="../../assets/js/toastr.min.js"></script>
<script src="../../assets/js/sidebar.js" type="application/javascript"></script>
<script src="../../api/controller/ClinicController.js" type="application/javascript"></script>
</body>
</html>