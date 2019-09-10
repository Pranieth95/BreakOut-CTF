<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Raid AFB Anuradhapura</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">With your support, we were able to identify the date and time which was 19th June  2007 at 4.30pm, prior to the attack. Well done! But we have some negative news to share. On 22nd October 2007, 3.15 AM group of 21 LTTE commandos attacked the Anuradhapura air base which was supported by air Tigers. We lost 10 military personals and 22 were injured.Always be couscous, We should find our vulnerabilities before the enemy does!!</p>
	<p class="center" style="color: #11ac42;">"Send a get request to the function flag with your name!"</p>
	<p class="center bold"></p>
	<div id="error">
		
	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit">Submit</button>
	</form>
	<p id="out" style="color:white;"></p>

	<div class="task center">
	
	</div>
	<script src="<?php echo base_url(); ?>application/views/assets/custom/js/ajax.js"></script>
	<script>
		
		$('#frm_level1').submit(function(e){
			e.preventDefault();
			var passph = $('#passph').val();
			$("#out").html(passph);
			var data = {passph: passph}
			frm_submit("<?php echo site_url($submit_url);?>", data);
		});
		
	</script>
