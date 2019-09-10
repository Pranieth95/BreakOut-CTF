<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>The CTF - BreakOUTs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/custom/css/page.css">
  <style>
    html { height: 100%;margin: 0px; padding: 0px; }
    .full { height: 85%; width:100%; max-width:100%}
    body{
	background-image: url("application/views/assets/img/bg1.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	}
     /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #333333;
      padding: 3px;
      color:#999999;
    }
  </style>

</head>
<body class="full" oncontextmenu="return false;">

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo site_url($home);?>">BreakOUT capture the flag</a>
        <div id="div_btn_levels" style="display:inline"></div>
        </div>
    </div>
    </nav>

    <div class="container text-center full">
        <div id="page-wrapper" style="height:100%">
                <iframe src="<?php echo site_url($file);?>" id="content_Iframe" name="content_Iframe" style="border: none; width: 100%; height:100%"></iframe>
            </div>
    </div>


    <div class="container-fluid bg-3 text-center">    
    <h3></h3><br>
    </div><br>
    <footer class="container-fluid text-center">
    <p>Copyright &copy; |Team BreakOut|CS Batch 2020|SLIIT|</p>
    </footer>
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/assets/custom/js/ajax.js"></script>
    <script>
      var levels = <?php if(isset($levels)) echo json_encode($levels); else echo "new Array()";?>;
      createButtons(levels);

      $(document).on('click','.btn_levels',function(){
        var level = $(this).attr('level');
        btn_changeLevel("<?php echo site_url($ch_level);?>",level);
      });
    </script>








    <script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (arthurgareginyan@gmail.com)
    * key:u80sUz8pP0rmi9zG4givAmBfgiMTVdUf9IvU5t9J
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
</body>
</html>
