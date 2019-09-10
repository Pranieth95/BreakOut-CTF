<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Point Pedro II</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">During the period of 8–9 June 2007, Sri Lankan army captured 4 LTTE military bases at Ibbanvila, Akkarathivu, Mawadi-ode, and Veppanveli. On 19 June 2007, 3 LTTE satellite camps East of Narakkamulla in the Thoppigala area were completely destroyed by the SLA. This accomplishment has made LTTE struggle in the battle. They are planning to attack Point Pedro again to recapture the area. Analyze the audio to gain some knowledge about their next target.</p>
	<p class="center" style="color: #11ac42;">"Place your pencil where it says Start!"</p>
	<p class="center bold"></p>
	<div id="error">







	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit">Submit</button>
	</form>
	<div class="task center">
	


<audio controls autoplay>
  <source src="<?php echo base_url(); ?>application/views/assets/img/morse.mp3" type="audio/mpeg">
  <p>If you can read this, your browser does not support the audio element.</p>
</audio>




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
