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

    <link rel="stylesheet" href="../../assets/css/doctor.css">

    <link rel="stylesheet" href="../../assets/css/sidebar.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

<?php include_once "../includes/sidebar.php" ?>
<div class="wrapper">
    <div class="main_container">
        <div class="row">
            <div class="item">
                <div class="item ml-lg-5 ml-md-2 mt-3">
                    <h3>Doctor</h3>
                </div>
                <!--    recent Doctor table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3" style="z-index: 0!important;">
                    <div class="col-lg-12" style="margin-right: -15px">
                        <form id="mail-form" method="post" action="">
                            <div class="row mb-2">
                                <div class="col-lg-6 col-sm-12">
                                    <input type="text" class="form-control" placeholder="First name" name="First_name">
                                    <input type="text" class="form-control mt-2" placeholder="Last name"
                                           name="Last_name">
                                    <input type="text" class="form-control mt-2" placeholder="Mobile Number"
                                           name="mobile">
                                    <input type="text" class="form-control mt-2" placeholder="Consultancy Charge"
                                           name="charge">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12 input-group mt-2 pl-0 ml-3">
                                            <select class="custom-select" id="department">
                                                <option selected>Clinic</option>
                                                <option value="1">OPD</option>
                                                <option value="2">Surgery</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 col-md-12 col-sm-12 mt-2 pl-0 pr-0 ml-md-3">
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="text" onfocus="(this.type='date')"
                                                       placeholder="Date Of Birth"
                                                       name="stAge"
                                                       max="2020-12-31">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-md-2 mt-lg-0">
                                    <button class="btn btnSearch" style="margin-top: 0!important;">Search</button>
                                    <textarea placeholder="Address" class="form-control" id="address"
                                              name="Address"
                                              rows="3"></textarea>
                                    <input type="text" class="form-control mt-2" placeholder="Education"
                                           name="eduction">
                                    <div class="col-lg-5 col-sm-12 input-group mt-2 pl-0">
                                        <select class="custom-select" id="status">
                                            <option selected>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Off</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-around mt-4">
                                <button class="btn btnCancel">Cancel</button>
                                <button class="btn btnUpdate">update</button>
                                <button class="btn btnCreate">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item">
                <!--    On Working Doctors table div-->
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <h4 class="mt-3 mb-4">On Working Doctors</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Consultancy Charge</th>
                            <th scope="col">Education</th>
                            <th scope="col">Clinic</th>
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
        </div>
    </div>
</div>

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/sidebar.js" type="application/javascript"></script>
<script src="../../api/controller/DoctorController.js" type="application/javascript"></script>
</body>
</html>