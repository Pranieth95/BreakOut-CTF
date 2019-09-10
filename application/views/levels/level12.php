<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Mullaitivu</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">Mullative is the main base of the LTTE. We are now on the mission to capture it with the help of the Sri Lankan air Force. Find us hints from LTTE to direct our battle.</p>
	<p class="center" style="color: #11ac42;">"The answer you seek is not in the file, its on the egamIhsaDmorFhsaDsroloChsalSofnItoDsedoChsaDroloChsaDlmth"</p>
	<p class="center bold"></p>
	<div id="error">


     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/level14.zip" download>Download File</a>
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
