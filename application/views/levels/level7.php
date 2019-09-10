<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Vidattaltivu</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">Sri Lanka Navy (SLN) were locked in a fierce battle off the seas south of Delft for nearly two hours from 12.45PM to 2.30PM. But due to preparations against LTTE, We were able to destroy 4 LTTE battle crafts. Now we will be focusing on the town of Vidattaltivu, which has been controlled by the LTTE for 21 years. 58 Division of Sri Lankan army will be conducting the mission. We have captured the pcap file today from a secretive LTTE data transition. Analyze it to gain further information.</p>
	<p class="center" style="color: #11ac42;">"Patience is a Must!"</p>
	<p class="center bold"></p>
	<div id="error">


     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/breakout.pcap" download>Download File</a>
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
