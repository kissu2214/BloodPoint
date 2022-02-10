<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['login']))
    {   
        $email = stripslashes($_POST['username']);
        $pass = stripslashes($_POST['password']);
        $email = mysqli_escape_string($con,$email);
        $pass = mysqli_escape_string($con,$pass);
        $pass = md5($pass);
        
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            $sql = "SELECT * FROM users WHERE email = '$email' AND  password = '$pass'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) >= 0)
            {
                    $_SESSION['login_user'] = $email;
                    $encode = base64_encode($email);
                    header("Location:../Dashboard.php?id=$encode");
            }
            else
            {
                // document.getelementbyID('incoorectpassword').style.display = 'block';
                header("Location:../login.php");
            }
        }
        else
        {
            header("Location:../login.php");
        }
    }
    else
    {
        header("Location:../index.php");
    }
?>