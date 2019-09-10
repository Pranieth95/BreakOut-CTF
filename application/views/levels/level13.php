<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Elephant Phase </h3>
	<br/>
	<p class="center bold dblue" style="color:white;">After the constant defeat of LTTE they are planning to assassin some important people of our government and Military. Since they have lost most of their international connections due to loss of assets during the war, now they are using social media to send messages to LTTE supporters all around the world. Find information on whom they are targeting before the battle of elephant phase. So that the Sri Lankan army can take percussions while focusing on the war.</p>
	<p class="center" style="color: #11ac42;">"Get into know in Person"</p>
	<p class="center bold"></p>
	<div id="error">


     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/a1.txt" download>Download File</a>
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
