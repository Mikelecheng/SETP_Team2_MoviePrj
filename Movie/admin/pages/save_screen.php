<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into app_hall values(NULL,'$theatre','$name','$seats','$charge')");
?>