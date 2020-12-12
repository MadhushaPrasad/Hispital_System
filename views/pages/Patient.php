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

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

<?php include_once "../includes/sidebar.php" ?>
<div class="wrapper">
    <div class="main_container">
        <div class="row">
            <div class="item">
                <div class="item ml-md-2 mt-3">
                    <h3 class="ml-lg-1">Patient</h3>
                </div>
                <!--    recent Appointment table div-->
                <div class="col-lg-12" style="margin-right: -15px">
                    <form id="mail-form" method="post" action="">
                        <div class="row mb-2">
                            <div class="col-lg-6 col-sm-12">
                                <input type="text" class="form-control" placeholder="NIC" name="nic">
                                <input type="text" class="form-control mt-2" placeholder="First name" name="First_name">
                                <input type="text" class="form-control mt-2" placeholder="Last name" name="Last_name">
                                <input type="text" class="form-control mt-2" placeholder="City" name="City">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <button class="btn btnSearch" style="margin-top: 0!important;">Search</button>
                        <textarea placeholder="Address" class="form-control mt-md-2 mt-lg-0" id="address"
                                  name="Address"
                                  rows="3"></textarea>
                                <input type="text" class="form-control mt-2" placeholder="Mobile Number"
                                       name="mobileNumber">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-12">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="gender">
                                        <option selected>Blood Type</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="gender">
                                        <option selected>Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" onfocus="(this.type='date')"
                                           placeholder="Date Of Birth"
                                           name="stAge"
                                           max="2020-12-31">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Height" name="City">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <input type="text" class="form-control" placeholder="Weight" name="City">
                            </div>
                            <div class="col-lg-3 ml-md-2 col-sm-12 mt-md-2 mt-lg-0">
                                <div class="form-row">
                                    <p>Smoker</p>
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="smokerRadio" id="smoker"
                                               value="smokerOption">
                                        <label class="form-check-label" for="smoker">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="smokerRadio" id="smoker"
                                               value="smokerOption">
                                        <label class="form-check-label" for="smoker">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ml-md-2 col-sm-12">
                                <div class="form-row">
                                    <p>Got Alcohol</p>
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="alcoholRadio" id="alcohol"
                                               value="alcoholOption">
                                        <label class="form-check-label" for="alcohol">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="alcoholRadio" id="alcohol"
                                               value="alcoholOption">
                                        <label class="form-check-label" for="alcohol">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-around mt-4">
                            <button class="btn btnCancel">Cancel</button>
                            <button class="btn btnUpdate">update</button>
                            <button class="btn btnCreate">Add</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="item">
                <div class="item ml-md-2 mt-3">
                    <h4 class="mt-3 mb-4">Patient Table</h4>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Birth</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
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
<script src="../../api/controller/PatientController.js" type="application/javascript"></script>
</body>
</html>