<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Thoppigala</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">On 28th August 2006, the Sri Lankan military launched an assault to retake the LTTE camps. After steady progress, Sri Lankan security forces re-captured Sampur from the LTTE on 4th September 2006 and began to establish military bases there. Our next target is Mission Thoppigala which is the last stronghold for the LTTE in Eastern province. Capering Sampur will be a turning point for this mission.</p>
	<p class="center" style="color: #11ac42;"><a style="color: #11ac42;" href="<?php echo base_url(); ?>application/views/assets/img/video.rar" download>You might miss It in a Blink , Deception is everywhere!</a></p>
	
	<p class="center bold"></p>
	<div id="error">
	


	

	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit")>Submit</button>
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
