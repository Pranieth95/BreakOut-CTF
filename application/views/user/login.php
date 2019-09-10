<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Team Login</title>
    <meta charset="UTF-8">
    <?php $path_com = base_url()."application/views/assets/" ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $path_com; ?>img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/other/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/other/css/main.css">
	
<!--===============================================================================================-->
	<style>
		.hint p{
			text-align:center;
			color: #666666;
			font-size: 20px;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="hint">
					<p>Hey!</p>
					<p>Do you have any idea on</p>
					<p>How the web consultants validate user inputs on the client side?</p>
				</div>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo $path_com; ?>img/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="frm_login" method="POST">
					<span class="login100-form-title">
						Team Login
					</span>
					<div id="error" style="text-align:center"></div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email" value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password" value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="loginSubmit">
							Login
						</button>
					</div>
					<!--
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					-->
					<div>
						<input type="hidden" id="path" name="path" value="<?php echo site_url($submit_url);?>"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo $path_com; ?>vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo $path_com; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/other/js/main.js"></script>

</body>
</html>
