<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
include('config.php');
extract($_POST);
    
    $bookid="BKID".rand(1000000,9999999);
    /*echo $bookid;*/
    /*print_r($_SESSION);*/
	//generate randon seat num
	//print_r($_SESSION['seats']);
	$length = $_SESSION['seats'];

		$char = '';
		$num1 = '';
		$num2 = '';
		$tempstr = '';
		$seatnum = '';
		$len = $length +1;
		for ($i = 1; $i < $len; $i++) {		
			if ($i == 1){
				$char = substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMN', ceil($len/strlen($x)) )),1,1);
		    // 	$num1 = substr(str_shuffle(str_repeat($x='01', ceil($length/strlen($x)) )),1,1);	
			//	$num2 = substr(str_shuffle(str_repeat($x='123456789', ceil($length/strlen($x)) )),1,1);
				$seatnum = $char . '0' . $i;
			}
			else{
				if ($len < 10) {
					$tempstr = ',' . $char . '0' . $i;
					$seatnum .=  $tempstr; 
				}
				else{
					if ($len < 20)
					$tempstr = ',' . $char . $i;
					$seatnum .=  $tempstr; 
				}
			}
		}
		//print_r($seatnum);
    
    mysqli_query($con,"INSERT into app_booking values(NULL,'$bookid','".$_SESSION['theatre']."','".$_SESSION['user']."','".$_SESSION['show']."','".$_SESSION['screen']."','".$_SESSION['seats']."','".$_SESSION['amount']."','".$_SESSION['date']."',CURDATE(),'1','$seatnum')");

/*    $_SESSION['success']="Bookings Done!";*/
	$_SESSION['success']="Congratulations! Your Booking has done successfully. Enjoy your movie with us.";
    extract($_POST);
    include('config.php');
    $_SESSION['bookid']=$bookid;
    
?>
<html>
<body>
    <h2 class="animate1">Transaction is being processed. Please Wait... </h2>
</body>
</html>

<style>
@keyframes load {
    0%{
        opacity: 0.08;
/*         font-size: 10px; */
/* 				font-weight: 400; */
				filter: blur(5px);
				letter-spacing: 3px;
        }
    100%{
/*         opacity: 1; */
/*         font-size: 12px; */
/* 				font-weight:600; */
/* 				filter: blur(0); */
        }
}

.animate1 {
	display:flex;
	justify-content: center;
	align-items: center;
	height:100%;
	margin: auto;
/* 	width: 350px; */
/* 	font-size:26px; */
	font-family: Helvetica, sans-serif, Arial;
	animation: load 1.2s infinite 0s ease-in-out;
	animation-direction: alternate;
	text-shadow: 0 0 1px white;
}
body, html{
	height: 96vh;
	background-color: #111;
	color: white;
}
</style>

<script>
    setTimeout(function(){ window.location = "movie_booking_summary.php";}, 5000);
</script>
