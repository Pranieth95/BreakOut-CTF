<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Puthukkudiyirippu</h3>
	<br/>
	<!--<h1 class="center" style="color:green;">process maintanance</h1>-->
	
	<p class="center bold dblue" style="color:white;">It’s the final phase of the war. Sri Lankan Military, 58 Division, 53 Division and Task Force 8  have already started the batlle to rescue our mother land from Tigers. Even though we are close than ever we need to find the exact location of LTTE leader Velupillai Prabhakaran. Gather all your knowledge and skills to help Sri Lanka to win our peace back.</p>
	<p class="center" style="color: #11ac42;">"Robust to Dirt & Damage! Just go ahead for 360°"</p>
	<p class="center bold"></p>
	<div id="error">


     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/a.txt" download>Download File</a>
        <div id="div_btn_levels" style="display:inline"></div>
		</div>
    </div>




	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit">Submit</button>
	</form>
	<div class="task center">
	
	</div>
	<script src="<?php echo base_url(); ?>application/views/assets/custom/js/ajax.js"></script>
	<script>
		
		$('#frm_level1').submit(function(e){
			e.preventDefault();
			var passph = $('#passph').val();
			var data = {passph: passph}
			frm_submit("<?php echo site_url($submit_url);?>", data);
		});
		
	</script>
