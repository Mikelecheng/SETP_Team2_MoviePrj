<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Singapore');
?>

<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/MovieCSS/bootstrap.min.css">
    <link rel="stylesheet" href="css/MovieCSS/all.min.css">
    <link rel="stylesheet" href="css/MovieCSS/animate.css">
    <link rel="stylesheet" href="css/MovieCSS/flaticon.css">
    <link rel="stylesheet" href="css/MovieCSS/magnific-popup.css">
    <link rel="stylesheet" href="css/MovieCSS/odometer.css">
    <link rel="stylesheet" href="css/MovieCSS/owl.carousel.min.css">
    <link rel="stylesheet" href="css/MovieCSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/MovieCSS/nice-select.css">
    <link rel="stylesheet" href="css/MovieCSS/jquery.animatedheadline.css">
    <link rel="stylesheet" href="css/MovieCSS/main.css">

    <link rel="shortcut icon" href="http://pixner.net/boleto/demo/assets/images/favicon.png" type="image/x-icon">

    <title>Online Ticket Booking Website</title>


</head>

    <!-- 
    - #HEADER
  -->

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader" style="display:none;">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    
    <div class="overlay"></div>
    <a href="#" class="scrollToTop active">
       
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section header-active">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="#">
                        <img src="images/logo1.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="movie_list.php">movies</a>
                    </li>
                    <li>
                        <a href="contact.php">contact</a>
                    </li>
                    <li class="header-button pr-0">
                    <?php 
                    if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from app_user where user_id='".$_SESSION['user']."'");
                       $user=mysqli_fetch_array($us);?>
                       <a href="profile.php"><?php echo $user['name'];?></a>
                       <a href="logout.php">Logout</a>
                    <?php }
                    else{?>
                       <a href="login.php">Sign in</a> 
                    <?php }?>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->
</body>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load", function(){
    loader.style.display = "none";
  })
</script>