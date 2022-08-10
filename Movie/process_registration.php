<?php
    session_start();
    include('config.php');
    extract($_POST);
    print_r($_POST);
    print_r($_SESSION);
    mysqli_query($con,"insert into  app_user values(NULL,0,'$email','$password',2,'$name','$email','$phone','$age','$gender')");

    $_SESSION['success']='Registration has done successfully, please login with your personal info and continue with us.';
    header('location:login.php');
?>