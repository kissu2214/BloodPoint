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
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="./images/logo1.png" style="height:10vh"alt="logo"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="register.php" class="nav-link"><span>Sign up</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="py-3 wrap-login100 bg-white pcontainInnerHoriz">
            <form class="login100-form validate-form bg-white" method="POST" action="classes/login.php">
                <!--Title-->
                <span class="pb-5 pt-3 login100-form-title">
					Sign In
				</span>
                <!--End Title-->
                <!--Inputs-->
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter  email">
                    <input class="input100" type="text"  name="username" placeholder=" email">
                    <span class="focus-input100"></span>
                    <p id="incoorectmail" style="display:none">Incorrect MailID<p>
                </div>
                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="password">
                    <span class="focus-input100"></span>
                    <p id="incoorectpassword" style="display:none">Incorrect Password<p>
                </div>
                <!--End Inputs-->
                <!--Remember Me and Forgot Me-->
                <div class="displayFlex justify-content-between">
                    <div class="rememberAndForget displayFlex mb-1">
                        <input type="checkbox" id="RememberMe">
                        <label class="container" id="rememberLabel">Remember me
						</label>
                    </div>
                    <div>
                        <h1 id="forgetPass">Forgot password?</h1>
                    </div>
                </div>
                <!--End Remember Me and Forgot Me-->
                <!--Login Button-->
                <div class="container-login100-form-btn pt-2">
                   <button class="login100-form-btn btn">
						 <input  type="submit" value="Login" name="login"/>
					</button>
                </div>
                <!--End Login Button-->
                <!--Login with social media-->
                <!-- <div class="text-center pt-4 p-b-20 loginWith">
                    <span class="txt1">
						Or login with
					</span>
                </div> -->
                <!-- <div class="flex-c pb-2">
                    <a href="#" class="login100-social-item text-white bg1">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="#" class="login100-social-item text-white bg2">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="login100-social-item text-white bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div> -->
                <!--End Login with social media-->
            </form>
        </div>
    </div>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>

</body>

</html>
