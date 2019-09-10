<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Sampur</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">On May 12th, 2006 Point Pedro was successfully captured by a maritime fight conducted by Sri Lankan Navy. Now Sampur LTTE camps are our next target. strategically crucial Sri Lanka Navy base in Trincomalee is under grave threat from LTTE gun positions located in and around Sampur, which lies across the Koddiyar Bay from Trincomalee.</p>
	<p class="center" style="color: #11ac42;">"Invisible things are the only realities"</p>
	<p class="center bold"></p>
	<div id="error">
	
	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit">Submit</button>
	</form>
	<div class="task center">
	<a  href="<?php echo base_url(); ?>application/views/assets/img/canvas.png" download>
	<img  src="<?php echo base_url(); ?>application/views/assets/img/canvas.png"></a>	
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
