<?php 
    session_start();
    session_destroy();
    unset($_SESSION["login_user"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Point</title>
    <link rel="icon" href="images/giphy.gif">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

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

    <!-- fontawesome link
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"> <img src="./images/logo1.png" style="height:10vh"alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link"><span>Login</span></a></li>
                    <li class="nav-item cta"><a href="register.php" class="nav-link"><span>Sign up</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <strong>Donate Blood <br> Save Lives</strong></h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="login.php" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-4">Clean blood money to become a stronger society</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">

                            <img src="images/blood-plus.svg" alt="">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">What we do ?</h3>
                            <p>We connect blood donors with recipients, without any intermediary such as blood Points, for an efficient and seamless process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <img src="images/global-health.svg" alt="">

                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Network</h3>
                            <p>Savelife is one of several community organizations working together as a network that responds to emergencies in an efficient manner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <img src="images/save.svg" alt="">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Innovative</h3>
                            <p>Savelife is one of several community organizations working together as a network that responds to emergencies in an efficient manner.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <img src="images/free.svg" alt="">


                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Save Life</h3>
                            <p>We are a non profit foundation and our main objective is to make sure that everything is done to protect vulnerable persons. Help us by making a gift !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-6">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group">
                                        <span class="icon icon-paper-plane"></span>
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="about">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Works</span>
                    <h2 class="mb-4">What is this all about ?.</h2>
                    <p>We solve the problem of blood emergencies by connecting blood donors directly with people in blood need.</p>
                </div>
            </div>
            <div class="row">
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">


                    <a href="portfolio.html" class="image" style="background-image: url('images/volenteer.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>

                    <div class="text">
                        <h4 class="subheading">Illustration</h4>
                        <h2 class="heading"><a href="portfolio.html">Volunteers are the real heroes</a></h2>
                        <p>
                            We depend on volunteers! Volunteers make up 96% of our total workforce and carry on our humanitarian work. Blood donation is healthy, our volunteers are available 24/7 to help and donate blood. Blood Points store blood bags but our volunteers are there
                            with you in an emergency for a blood transfusion real time. Donating blood or platelets can be intimidating and even scary for many people. Time to put those hesitations and fears aside. Learn from Savelife Connect blood and
                            platelet donors how simple and easy it is to roll up a sleeve and help save lives.</p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">

                    <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/cef58128383186c0b86de77f53e39e866eae10a2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
                    <div class="text order-1">
                        <h4 class="subheading">about our volenter</h4>
                        <h2 class="heading"><a href="portfolio.html">Have you given blood before?</a></h2>
                        <p>Sometimes we prioritise appointments for regular donors. As we know their blood type, this helps us collect the right amount of each blood type to meet demand.</p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">

                    <a href="portfolio.html" class="image" style="background-image: url('images/5798cce3c0de46605188b58e84ca508f0bb30e99.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
                    <div class="text">
                        <h4 class="subheading"> test your blood</h4>
                        <h2 class="heading"><a href="portfolio.html">Your blood type</a></h2>
                        <p>There are more appointments for donors with blood types that people often need, such as O negative. On the other hand, there are fewer appointments for blood types where demand is lower, such as AB positive.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Our achievements</h2>
                    <p> Blood Point </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="400">0</strong>
                            <span>Saved Souls</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="1000">0</strong>
                            <span>Donors</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="8">0</strong>
                            <span>Branchs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Where to Donate Blood</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">

                        <a href="blog-single.html" class="block-20" style="background-image: url('images/contact us.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">  contact us in soial midea </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">

                        <a href="blog-single.html" class="block-20" style="background-image: url('images/map.jpg');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">visit us </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">

                        <a href="blog-single.html" class="block-20" style="background-image: url('images/van2.jpg');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">find our vans in all cities</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  FOOTER ---------------------------------------------------------------->
   <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Blood Point <i class="icon-heart" aria-hidden="true"></i></h2>
                        <p>We solve the problem of blood emergencies by connecting blood donors directly with people in blood need.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-5">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="py-2 d-block">Home</a></li>
                            <li><a href="about.html" class="py-2 d-block">About</a></li>
                            <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">9 ack Street, Cairo, Egypt.</a></li>
                            <li><a href="#" class="py-2 d-block">+91   8249785686</a></li>
                            <li><a href="#" class="py-2 d-block">rameswar060@gmal.com</a></li>
                            <li><a href="#" class="py-2 d-block">happy_kishor69@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">


                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER ---------------------------------------------------------------->


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


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

</body>

</html>
