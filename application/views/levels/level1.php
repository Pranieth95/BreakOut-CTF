<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
    <link href="<?php echo base_url(); ?>application/views/assets/txt/level1/style.css" rel="stylesheet">
	<h3 class="center" style="color:red;">Mission Point Pedro</h3>
	<br/>
	<p class="center bold dblue" style="color:white;">Its May 10th 2006. Point Pedro is profoundly under the control of LTTE. Sri Lankan army is not ready to bear on an attack through the land. What is your strategy?</p>
	<p class="center" style="color: #11ac42;">"Over every mountain there is a path, although it may not be seen from the valley!"</p>
	<p class="center bold"></p>
	<div id="error"></div>
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

	<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page

    * For full source code, visit http://www.mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>



