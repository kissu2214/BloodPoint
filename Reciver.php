<?php 
include "classes/dbconnect.php";
    session_start();
    if(!$_SESSION['login_user']){
      header("Location:./login.php");
  }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Point</title>
    <link rel="icon" href="images/giphy.gif">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
  .typeform{
    display: flex;
    justify-content: center;
    padding: 5%;
    border: 1px solid black;
    height:75vh; 
  }
  .head{
    padding-top:20vh;
    
  }
  @media only screen and (max-width: 600px) {
    .head{
      padding: 0px;
    }
    .typeform{
    display: flex;
    justify-content: center;
    padding: 5%;
    border: 0px solid;
    height:fit-content; 
  }
  }
 </style>
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
                    <li class="nav-item"><a href="index.php" class="nav-link">My Account</a></li>
                    <li class="nav-item cta"><a href="index.php" class="nav-link"><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap ">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="row head"style="margin: 0px;" >
      <div class="col-md-6 text-white  typeform">
      <form method="post">
  <div class="form-group">
    <label for="zipcode">Zip Code</label>
    <input type="text" class="form-control" id="zipcode" style="border-radius:25px" required>
  </div>
  <div class="form-group">
    <label for="pwd">Blood Type:</label>
    <select name="Bloodgrp" id="Bloodgrp">
  <option value="O+">0+</option>
  <option value="O-">0-</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select>
  </div>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
        
      </div>
      <div class="col-md-6 text-white  typeform">
      <?php
    
    // Check connection
    if(isset($_POST['submit'])){ 
      $bgrp = ($_POST['Bloodgrp']);
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $result = mysqli_query($con,"SELECT Fname, Lname, Age, City, Phone FROM users WHERE bloodtype = '$bgrp'");
   
    echo "Fname  Lname  Age   City     Phone <br />";
    if($result->num_rows > 0)
      {
      while($row = mysqli_fetch_array($result))
      {
      echo $row['Fname'] . " " . $row['Lname']. " " . $row['Age']. " " . $row['City']. " " . $row['Phone']; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
      }
      else{
        echo "no results found";
      }

      mysqli_close($con);
      }
      else{
        echo " enter Zip Code And Blood Type";
   }
    ?>
      </div>
    </div>
    </div>



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
