<?php include('headernone.php');?>
<head>
    <title>Movie Ticket Booking System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
<!--    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
    <link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='js/jquery.color-RGBa-patch.js'></script>
    <script src='js/example.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>

  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 

<body>

<main>
<article>
<section class="Login-detail">	
<div class="container1" id="container1">
	<div class="form-container1 sign-up-container1">
        <form action="process_registration.php" method="post" id="form1">
		<!--	<h1>Create Account</h1> -->
			<span>Use your email for registration</span>
<!--			<input type="text" placeholder="First Name" />
			<input type="text" placeholder="Last Name" />
			<input type="text" placeholder="Mobile Number" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<input type="password" placeholder="Confirm Password" />
			<button>Sign Up</button>
-->
            <div class="form-group has-feedback">
                <input name="name" type="text" size="25" placeholder="Name" class="form-control" />
                <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); ?>
            </div>

            <div class="form-group has-feedback">
                <input name="age" type="text" size="25" placeholder="Age" class="form-control" />
                <?php $frm->validate("age",array("required","label"=>"Age","regexp"=>"age")); ?>
            </div>

            <div class="form-group has-feedback" style="width: 78%;">
                <select name="gender" class="form-control">
                    <option value>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <?php $frm->validate("gender",array("required","label"=>"Gender")); ?>
            </div>

            <div class="form-group has-feedback">
                <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control" />
                <?php $frm->validate("phone",array("required","label"=>"Mobile Number","regexp"=>"mobile")); ?>
            </div>

            <div class="form-group has-feedback">
                <input name="email" type="text" size="25" placeholder="Email" class="form-control" />
                <?php $frm->validate("email",array("required","label"=>"Email","email")); ?>
            </div>

            <div class="form-group has-feedback">
                <input name="password" type="password" size="25" placeholder="Password"
                class="form-control" placeholder="Password" />
                <?php $frm->validate("password",array("required","label"=>"Password","min"=>"7")); ?>
            </div>

            <div class="form-group has-feedback">
                <input name="cpassword" type="password" size="25" placeholder="Password"
                class="form-control" placeholder="Password" />
                <?php $frm->validate("cpassword",array("required","label"=>"Confirm Password","min"=>"7","identical"=>"password Password")); ?>
            </div>
                            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
		</form>
	</div>
	<div class="clear"></div>

	<div class="form-container1 sign-in-container1">
    <?php include('msgbox.php');?>
		<form action="process_login.php" method="post" id="form2">
			<h1>Sign in</h1>
			<div class="form-group has-feedback">
                <input name="email" type="text" size="25" placeholder="Email" class="form-control" />
                <?php $frm->validate("email",array("required","label"=>"Email","email")); ?>
            </div>
			<div class="form-group has-feedback">
                <input name="password" type="password" size="25" placeholder="Password"
                class="form-control" placeholder="Password" />
                <?php $frm->validate("password",array("required","label"=>"Password","min"=>"7")); ?>
            </div>
			<div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
		</form>
	</div>
	<div class="clear"></div>

	<div class="overlay1-container1">
		<div class="overlay1">
			<div class="overlay1-panel overlay1-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay1-panel overlay1-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</section>
</article>
</main>
</body>


<style>
	
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {

	background: #001232;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.Login-detail {
  background: url("../images/hero-bg.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}

.container1 {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 868px;
	max-width: 100%;
	min-height: 610px;
    top: 100px;
}

.form-container1 {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container1 {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container1.right-panel-active .sign-in-container1 {
	transform: translateX(100%);
}

.sign-up-container1 {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container1.right-panel-active .sign-up-container1 {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay1-container1 {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container1.right-panel-active .overlay1-container1{
	transform: translateX(-100%);
}

.overlay1 {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container1.right-panel-active .overlay1 {
  	transform: translateX(50%);
}

.overlay1-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay1-left {
	transform: translateX(-20%);
}

.container1.right-panel-active .overlay1-left {
	transform: translateX(0);
}

.overlay1-right {
	right: 0;
	transform: translateX(0);
}

.container1.right-panel-active .overlay1-right {
	transform: translateX(20%);
}

.social-container1 {
	margin: 20px 0;
}

.social-container1 a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container1 = document.getElementById('container1');

signUpButton.addEventListener('click', () => {
	container1.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container1.classList.remove("right-panel-active");
});
<?php $frm->applyvalidations("form1");?>
</script>

