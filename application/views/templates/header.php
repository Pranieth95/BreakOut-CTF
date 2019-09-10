<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/custom/css/page.css">
	<script src="<?php echo base_url(); ?>application/views/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
		$('.btn_levels',window.parent.document).removeClass('current');
		$('.btn_levels[level=<?php echo $level ?>]',window.parent.document).addClass('current');
	</script>
	<style> 
		body{
			background-color:rgba(255,255,153,0);
		}
		input[type=text] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #0066ff;
			border-radius: 4px;
		}
		.center{
			text-align:center;
		}
	</style>

</head>
<body oncontextmenu="return false;">
	<br/>
	<div class="center">
		<h3 class="heading" style="display:inline">Level <?php echo $level; ?> </h3>
	</div>