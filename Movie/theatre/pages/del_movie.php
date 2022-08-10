<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"DELETE FROM app_movie WHERE movie_id='$mid'");
 $_SESSION['success']="Movie Deleted";
header("location:view_movie.php");
?>