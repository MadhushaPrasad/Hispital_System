<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img id="logo" src="assets/images/logoSmall.png" alt=""/>
            <h3>Welcome</h3>
            <p>We help people to get appointment in online</p>
            <input type="button" id="btnRegister" name="" value="Register"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#doctorLogin" role="tab"
                       aria-controls="home"
                       aria-selected="true">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#adminLogin" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#loginReception" role="tab"
                       aria-controls="reception"
                       aria-selected="false">Reception</a>
                </li>
            </ul>

            <!--      patients form-->
            <div class="tab-content" id="doctorLogin">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login as a Doctor</h3>
                    <div class="row register-form">
                        <form action="#" style="height: auto;width: 88%">
                            <input class="form-control" type="email" placeholder="Email" name="pEmail"/>
                            <input class="form-control" type="password" placeholder="Password" name="password"/>
                            <input type="button" id="btnLoginDoc" class="btnRegister" value="Login"/>
                        </form>
                        <!--<div class="col-md-6">
                          <div class="form-group">
                            <div class="maxl">
                              <label class="radio inline">
                                <input type="radio" name="gender" value="male" checked>
                                <span> Male </span>
                              </label>
                              <label class="radio inline">
                                <input type="radio" name="gender" value="female">
                                <span>Female </span>
                              </label>
                              <input type="submit" class="btnRegister" value="Register"/>
                            </div>
                          </div>
                        </div>-->

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                             <input type="email" class="form-control" placeholder="Your Email *" value=""/>
                           </div>
                           <div class="form-group">
                             <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control"
                                    placeholder="Your Phone *" value=""/>
                           </div>
                         </div>-->
                    </div>
                </div>


                <!--        Admin form-->
                <div class="tab-pane fade show" id="adminLogin" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as a Admin</h3>
                    <div class="row register-form">
                        <form action="#" style="height: auto;width: 88%;margin-top: 30px">
                            <input class="form-control" type="email" placeholder="Email" name="email"/>
                            <input class="form-control" type="password" placeholder="Password" name="password"/>
                            <input type="button" id="btnLogin" class="btnRegister" value="Login"/>
                            <!-- <div class="text-center mt-lg-3 mt-md-3 w-full p-t-42 p-b-22">
                               <span class="txt1">Or login with</span>
                               <div style="display: flex;flex-direction: row;">
                                 <a href="#" class="btn-face m-b-10">
                                   <i class="fa fa-facebook-official mr-2"></i>
                                   Facebook
                                 </a>
                                 <a href="#" class="btn-google m-b-10 mr-lg-5">
                                   <img src="../../assets/icons/icon-google.png" alt="GOOGLE">
                                 </a>
                               </div>
                             </div>-->
                        </form>
                    </div>
                </div>

                <!--Admin form End-->

                <!--        Reception form-->
                <div class="tab-pane fade show" id="loginReception" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as a Reception</h3>
                    <div class="row register-form">
                        <form action="#" style="height: auto;width: 88%;margin-top: 30px">
                            <input class="form-control" type="email" placeholder="Email" name="email"/>
                            <input class="form-control" type="password" placeholder="Password" name="password"/>
                            <input type="button" id="loginRes" class="btnRegister" value="Login"/>
                            <!-- <div class="text-center mt-lg-3 mt-md-3 w-full p-t-42 p-b-22">
                               <span class="txt1">Or login with</span>
                               <div style="display: flex;flex-direction: row;">
                                 <a href="#" class="btn-face m-b-10">
                                   <i class="fa fa-facebook-official mr-2"></i>
                                   Facebook
                                 </a>
                                 <a href="#" class="btn-google m-b-10 mr-lg-5">
                                   <img src="../../assets/icons/icon-google.png" alt="GOOGLE">
                                 </a>
                               </div>
                             </div>-->
                        </form>
                    </div>
                </div>
                <!--        Reception form-->

            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="api/controller/LoginController.js"></script>
</body>
</html>