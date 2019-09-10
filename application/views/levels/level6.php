<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Delft</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">It’s 26th December 2017 and Sri Lankan Navy intercepted a suspicious boat movement south of Delft coastline today noon. Try to find and confirm whether it’s LTTE related activity, before sending Navy crafts out there. Recently we were able to find one of the most active netork of LTTE. This 
	<a style="color:  #ffffff;" href="http://localhost/breakout/LTTE/" target="_blank"> SITE</a> is used by LTTE to share information about their weapon handling.  </p>
	<p class="center" style="color: #11ac42;">"Answers are hidden within"</p>
	<p class="center bold"></p>
	<div id="error">




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
