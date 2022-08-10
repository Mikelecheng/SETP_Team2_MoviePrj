<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into app_time_slot values(NULL,'$screen','$sname','$time')");
?>