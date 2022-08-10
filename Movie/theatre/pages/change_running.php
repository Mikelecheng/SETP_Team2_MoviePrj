<?php
session_start();
include('../../config.php');
extract($_GET);
mysqli_query($con,"update app_show set r_status='$status' where s_id='$id'");
$_SESSION['success']="Running Status Updated";
header('location:view_shows.php');
?>