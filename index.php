<?php

	require 'db/db.php';

    if (isset($_POST['btn_login'])) {
    $user_username = $_POST['txt_username'];
    $user_password = $_POST['txt_password'];

    if (!isset($user_username) && !isset($user_password)) { 
        echo "<script>alert('Please Fill All Spaces');window.location.href='index.php';</script>";
    } else {
       // $password = md5($password);
        $result = mysqli_query($my_conn,"SELECT * FROM login_tbl WHERE user_name = '$user_username' LIMIT 1");
       
        if (mysqli_num_rows($result) >= 1) {
            $user = mysqli_fetch_assoc($result);
            $get_password = $user['user_password'];
           if(password_verify($user_password,$get_password)){
            $get_username = $user['user_name'];
            $get_id = $user['user_id'];

            setcookie("u", $get_username, time() + (86400 * 30),"/");
            setcookie("i", $get_id, time() + (86400 * 30),"/");

            echo "<script>window.location.href='dashboard.php';</script>";
          
           }else{
            echo "<script>alert('Wrong Password Entered');window.location.href='index.php';</script>";
           }
           
        } else {
          echo "<script>alert('User Not Found');window.location.href='index.php';</script>"; 
        }
    }
}




?>

<!doctype html>
<html class="fixed">
	<head>

		<title>Records | SignIn</title>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="img/log.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="txt_username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
								</div>
								<div class="input-group input-group-icon">
									<input name="txt_password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row" style="text-align: center;">
									<button name="btn_login" type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button name="btn_login" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								
							</div>

							<div style="text-align: center">
							<!--<p class="text-center">Don't have an account yet? <a href="signup.php">Sign Up!</a>-->
							</p>
						</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y')  ?>. All rights reserved. Developed By <i><b>Step Network</b></i>. <br> Tel:0245 90 83 62 Email: info@snetgh.net</br></p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>