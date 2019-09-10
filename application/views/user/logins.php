<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>custom/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path_com; ?>custom/css/main.css">
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
			
			
			
			
			
			
			
				<form class="login100-form validate-form" id="frm_login" method="POST">
					<span class="login100-form-title p-b-34">
						STOP | THINK | CONNECT          
			
					</span>
						<span class="login100-form-title p-b-34">
						Team Login         
			
					</span>
					
								<div id="error" style="text-align:center"></div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email" value="">
						<span class="focus-input100"></span>
											
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password" value="">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="loginSubmit">
							Login
						</button>
					</div>
<!--
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>
-->
					<!--<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>-->
					<div>
					<input type="hidden" id="path" name="path" value="<?php echo site_url($submit_url);?>"/>
					</div>
				</form>
				<div class="login100-more" data-tilt>
					<img src="<?php echo $path_com; ?>img/bg-01.jpg" alt="IMG">
				</div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo $path_com; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo $path_com; ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo $path_com; ?>vendor/other/js/main.js"></script>

</body>
</html>