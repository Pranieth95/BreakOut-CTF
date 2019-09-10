<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Kilinochchi</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">After the battle of Vidattive we were able to take a ova from the LTTE offices in Vidattive. Try hacking into this virtual machine and gather information for our next battle in Kilinochchi as Sri Lankan army is preparing to capture one of the LTTEs Strongest locations.</p>
	<p class="center" style="color: #11ac42;">User Name as breakout12 PW as war_is_bad. Extract the VM and Complete Lvel 8-12 on Shell and move on to level 12. Good Luck!</p>
	<p class="center bold"></p>
	<div id="error">


     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/BreakOutCTF.ova" download>Download File</a>
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
