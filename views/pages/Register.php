<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/mdb.min.css">
    <link rel="stylesheet" href="../../assets/css/register.css">
</head>
<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="../../assets/images/logoSmall.png" alt=""/>
            <h3>Welcome</h3>
            <p>We help people to get appointment in online</p>
            <input type="button" id="btnLogin" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home"
                       aria-selected="true">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#reception" role="tab"
                       aria-controls="profile"
                       aria-selected="false">Reception</a>
                </li>
            </ul>

            <!--      Doctor form-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Doctor</h3>
                    <div class="row register-form">
                        <form action="#" id="doctorForm" style="height: auto;width: 88%">
                            <input class="form-control" type="text" placeholder="User Name" name="userName"/>
                            <input class="form-control" type="text" onfocus="(this.type='date')"
                                   placeholder="Date Of Birth"
                                   name="stAge"
                                   max="2020-12-31">
                            <select class="custom-select" id="gender">
                                <option selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                            <input class="form-control" type="email" placeholder="Email" name="pEmail"/>
                            <input class="form-control" type="password" placeholder="Password" name="password"/>
                            <input class="form-control" type="password" placeholder="Confirm Password"
                                   name="stConfPassword"/>
                            <input type="submit" class="btnRegister" value="Register""/>
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
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a Admin</h3>
                    <div class="row register-form">
                        <form action="#" id="adminForm" style="height: auto;width: 88%">
                            <input class="form-control" type="text" placeholder="First Name" name="adFName"/>
                            <input class="form-control" type="text" placeholder="Last Name" name="adLName"/>
                            <input class="form-control" type="text" onfocus="(this.type='date')"
                                   placeholder="Date Of Birth"
                                   name="adAge"
                                   max="2020-12-31">
                            <input class="form-control" type="email" placeholder="Email" name="adEmail"/>
                            <input class="form-control" type="password" placeholder="Password" name="adPassword"/>
                            <input class="form-control" type="password" placeholder="Confirm Password"
                                   name="adConfPassword"/>
                            <input type="button" class="btnRegister" value="Register" onclick="addAdmin()"/>
                        </form>
                    </div>
                </div>

                <!--        Reception form-->
                <div class="tab-pane fade show" id="reception" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a Reception</h3>
                    <div class="row register-form">
                        <form action="#" id="receptionForm" style="height: auto;width: 88%">
                            <input class="form-control" type="text" placeholder="First Name" name="fName"/>
                            <input class="form-control" type="text" placeholder="Last Name" name="lName"/>
                            <input class="form-control" type="text" onfocus="(this.type='date')"
                                   placeholder="Date Of Birth"
                                   name="stAge"
                                   max="2020-12-31">
                            <input class="form-control" type="email" placeholder="Email" name="email"/>
                            <input class="form-control" type="password" placeholder="Password" name="password"/>
                            <input class="form-control" type="password" placeholder="Confirm Password"
                                   name="stConfPassword"/>
                            <input type="submit" class="btnRegister" value="Register" onclick="addReception()"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Admin form End-->
</div>

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/mdb.min.js"></script>
<script src="../../api/controller/RegisterController.js"></script>
</body>
</html>