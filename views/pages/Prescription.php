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
                <div class="item ml-lg-5 ml-md-2 mt-3">
                    <h3>Prescription</h3>
                </div>
                <div class="row ml-lg-5 ml-md-2 mt-3">
                    <!--    recent Prescription table div-->
                    <div class="row mt-3">
                        <div class="col-lg-12" style="margin-right: -15px">
                            <form id="mail-form" method="post" action="">
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-sm-12">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="department">
                                                <option selected>Treatment ID</option>
                                                <option value="1">tr001</option>
                                                <option value="2">tr002</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="department">
                                                <option selected>Patient ID</option>
                                                <option value="1">p001</option>
                                                <option value="2">p002</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                        <textarea placeholder="Prescription Details" class="form-control" id="prescription"
                                  name="prescription_details"
                                  rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label class="sr-only" for="inlineFormInputGroup">Price</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RS:</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                                   placeholder="Price">
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
            </div>
            <div class="item ml-lg-5 ml-md-2 mt-3">
                <h4 class="mt-3 mb-4">On Working Doctors</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Lab Name</th>
                        <th scope="col">Opening Date</th>
                        <th scope="col">Closing Date</th>
                        <th scope="col">Opening Time</th>
                        <th scope="col">Closing Time</th>
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

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/mdb.min.js"></script>
<script src="../../assets/js/sidebar.js" type="application/javascript"></script>
<script src="../../api/controller/PrescriptionController.js" type="application/javascript"></script>
</body>
</html>