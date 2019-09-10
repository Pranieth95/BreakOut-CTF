<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Challai</h3>
	<br/>
	<!--<h1 class="center" style="color:green;">process maintanance</h1>-->
	
	<p class="center bold dblue" style="color:white;">We have found a pen Drive that is said to be late LTTE Senior member Pottu Amman. Find information that can be sensitive to our battle in Chalai. It is the final Sea Tiger base held by the LTTE during the Northern Theater of Eelam War IV</p>
	<p class="center" style="color: #11ac42;">"Just eight commands to Fuck your mind & Beauty lies in it's simplicity!"</p>
	<p class="center bold"></p>
	<div id="error">

	</div>
	<form id="frm_level1" method="POST">
		<label for="passph" style="color: #8c898e;">Enter the Flag</label>
		<input type="text" id="passph" name="passph" style="width: 300px;">
		<button class="btn1 right" type="submit" name="btn_submit">Submit</button>
	</form>
	<div class="task center">
	

     <div class="container-fluid">
        <div class="navbar-header">
        <a href="<?php echo base_url(); ?>application/views/assets/img/soosai.ad1" download>Download File</a>
        <div id="div_btn_levels" style="display:inline"></div>
		</div>
    </div>







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
