<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Point</title>
    <link rel="icon" href="images/giphy.gif">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/utils.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"> <img src="./images/logo1.png" style="height:10vh"alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link"><span>Login</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="py-3 wrap-login100 pcontainInnerHoriz">
            <form class="login100-form validate-form" method="POST" action="classes/register.php">
                <!--Title-->
                <span class="login100-form-title pb-2 pt-2">
                    Sign Up
                </span>
                <div id="personalPage">
                    <div class="numberPage text-center">
                        <span>1</span>
                    </div>
                    <label class="pt-4 pb-3 infoType">Personal Information
                    </label>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <label class="container" >First Name
                            </label>
                            <div class="wrap-input100 mb-2">
                                <input class="input100" type="text" name="Fname">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="container">Last Name
                            </label>
                            <div class="wrap-input100 mb-2">
                                <input class="input100" type="text" name="Lname">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=col-md-6>
                            <label>Age
                            </label>
                            <div class="wrap-input100 mb-2">
                                <input class="input100" type="number" name="Age">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>City / Town
                                </label>
                                <select id="cityName" class="d-block" name="City">
                                    <option value="" selected style="display:none">Choose your city</option>
                                    <option value="Bhubaneswar">Bhubaneswar</option>
                                    <option value="Balasore">Balasore</option>
                                    <option value="Sambalpur">Sambalpur</option>
                                </select>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=col-md-6>
                            <label>Aadhar Card Number
                            </label>
                            <div class="wrap-input100 mb-2">
                                <input class="input100" type="number" name="Aadhar">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>Profile Pic
                                </label>
                                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>


                    <!--Login Button-->
                    <div class="mt-5 text-center">
                        <span class="nextBtn" onclick="goContactPage()">
                            Next
                        </span>
                    </div>
                </div>
                <div id="contactPage">
                    <div class="numberPage text-center">
                        <span>2</span>
                    </div>
                    <label class="pt-4 pb-3 infoType">Contact Information
                    </label>
                    <label class="container">Email
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="container">Phone
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="number" name="phone">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="container">Address
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="text" name="address">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="mt-5 text-center">
                        <span class="nextBtn" onclick="goAccountPage()">
                            Next
                        </span>
                    </div>
                </div>
                <div id="accountPage">
                    <div class="numberPage text-center">
                        <span>3</span>
                    </div>
                    <label class="pt-4 pb-3 infoType">Account Information
                    </label>
                    <label class="container">Username
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="text" name="uname">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="container">Password
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="container">Rewrite password
                    </label>
                    <div class="wrap-input100 mb-2">
                        <input class="input100" type="password">
                        <span class="focus-input100"></span>
                    </div>
                    <!--Login Button-->
                    <div class="mt-5 text-center">
                        <span class="nextBtn" onclick="goMedicalPage()">
                            Next
                        </span>
                    </div>
                </div>

                <div id="medicalPage">
                    <div class="numberPage text-center">
                        <span>4</span>
                    </div>
                    <label class="pt-4 pb-3 infoType">Medical Information
                    </label>
                    <div class="container">
                        <label>Choose your gender:
                        </label>
                        <div class="wrap-input100 mb-2">
                            <div>
                                <input type="radio" name="gender" id="male" value="male">
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <label>Blood type:
                        </label>
                        <select id="bloodType" class="d-block" name="bloodtype" >
                            <option value="" selected style="display:none">Choose one</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <div class="row">
                            <div class=col-md-6>
                                <p class=" "><b>Any Disease ?</b></p> 
                                No
                                <input type="radio" name="answer" value="no" /> <br> yes <input type="radio" name="answer" value="yes" /><br>
                                <input style="display:none; border:2px red solid; border-radius:25px" type="text" name="otherAnswer" id="otherAnswer" placeholder=" Enter your Disease" />

                            </div>
                        </div>
                        <!--Login Button-->
                        <div class="container-login100-form-btn pt-3">
                            
                            <input  type="submit" value="Create Account" name="submit"/>
                        </div>
                    </div>
                </div>

                <!--Login Button-->
        <!--End Login Button-->
        </form>
    </div>
    </div>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("input[type='radio']").change(function () {
                if ($(this).val() == "yes") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }
            });
        });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>

</body>

</html>