<?php
include('../../config.php');
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];
$qry=mysqli_query($con,"select * from APP_user where username='$email' and password='$pass'");
if(mysqli_num_rows($qry))
{
	$usr=mysqli_fetch_array($qry);
	if($usr['user_type']==0)
	{
		$_SESSION['admin']=$usr['cinema_id'];
		header('location:index.php');
	}

	elseif($usr['user_type']==1)
	{
		$_SESSION['theatre']=$usr['cinema_id'];
		header("location:../../theatre/pages/index.php");
	}
	else
	{
		$_SESSION['error']="Login Failed!";
		header("location:../index.php");
	}
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:../index.php");
}
?>