<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['submit']))
    {   
        $Fname = stripslashes($_POST['Fname']);
        $Lname = stripslashes($_POST['Lname']);
        $Age = stripslashes($_POST['Age']);
        $City = stripslashes($_POST['City']);
        $Aadhar = stripslashes($_POST['Aadhar']);
        $email = stripslashes($_POST['email']);
        $phone = stripslashes($_POST['phone']);
        $address = stripslashes($_POST['address']);
        $uname= stripslashes($_POST['uname']);
        $pass= stripslashes($_POST['password']);
        $gender= stripslashes($_POST['gender']);
        $btype= stripslashes($_POST['bloodtype']);
        $disease= stripslashes($_POST['answer']);
        $info= stripslashes($_POST['otherAnswer']);
        if($disease == "no"){
            $info = "NA";
        }
        $uname = mysqli_escape_string($con,$uname);
        $pass = mysqli_escape_string($con,$pass);
        $pass = md5($pass);

        $sql = "INSERT INTO `users`(`Fname`, `Lname`, `Age`, `City`, `Aadharnumber`, `email`, `phone`, `address`, `username`, `password`,`gender`,`bloodtype`,`disease`,`diseaseinfo`) 
        VALUES ('$Fname','$Lname','$Age','$City','$Aadhar','$email','$phone','$address','$uname','$pass','$gender','$btype','$disease','$info')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            header("Location:../login.php");
        }
        else {
            echo mysqli_error($con);
        }
    }
?>