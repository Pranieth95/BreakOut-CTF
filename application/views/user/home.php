<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CTF - BreakOUT</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/vendor/agency/css/agency.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/assets/custom/css/login.css" type="text/css">
  

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:  #c10f38 ;" > ( BreakOUT )  -  "The threat is only a click away" </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
	
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#story">The Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
          </ul>
        </div>
        <form id="frm_logout" method="post">
          <button id="logout_user" name="logout" type="submit" class="btn btn-primary btn-sm" style="color:  #2d5ac8;">
            <span class="glyphicon glyphicon-log-out" ></span> Log out
          </button>
        </form>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome to the world of  <b>Nightmares !!!</b></div>
          <div class="intro-heading text-uppercase">The Journey has Just Begun!</div>
          <a class="next"  href="#story" style="float:right">Further more</a>
        <!--  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"  href="#story" style="float:right">Further more</a>-->

	  <a href="<?php echo site_url($level1); ?>" class="next" >Proceed to Level 1 &raquo;</a>
	</div>
      </div>
    </header>

    <!-- Story -->
    <?php
        $img_path = base_url()."application/views/assets/img/";
    ?>
    <section id="story">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Plot behind the </h2><h2>BreakOUT</h2>
            <h3 class="section-subheading text-muted">Are you a Cyber warrior?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo $img_path ?>about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 1983</h4>
                    <h4 class="subheading">The Origin</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The Sri Lankan Civil War was an armed conflict fought on the island of Sri Lanka.there was an intermittent insurgency against the government by the LTTE,  which fought to create an independent Tamil state called Tamil Eelam in the north and the east of the island.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo $img_path ?>about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2006</h4>
                    <h4 class="subheading">Return to the Battle</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> The  fighting resumed after a four-year ceasefire between the Government of Sri Lanka (GoSL) and LTTE. Continued fighting led to several territorial gains for the Sri Lankan Army, including the capture of Sampur, Vakarai and other parts of the east.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo $img_path ?>about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>May 2009</h4>
                    <h4 class="subheading">End of the War</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">In the final stage, the Sri Lankan army broke through rebel lines and drove the Tigers from many areas in the north that they had controlled for decades with the death of the LTTE leader Velupillai Prabhakaran.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo $img_path ?>about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading">Role of Cyber Force</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">So this is the journey of sir Lankan cyber force which played a major role in the battle.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be a Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Crew</h2>
            <h3 class="section-subheading text-muted">Team BreakOUT - Smart solutions for a better world</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo $img_path ?>team/1.jpg" alt="">
              <h4>Hasini Abeywardana</h4>
              <p class="text-muted"></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo $img_path ?>team/2.jpg" alt="">
              <h4>Pranieth Chandrasekara</h4>
              <p class="text-muted"></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://lk.linkedin.com/in/praniethchandrasekara">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo $img_path ?>team/3.jpg" alt="">
              <h4>Nilushana Dissanayaka</h4>
              <p class="text-muted"></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                   <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; |Team BreakOut|CS Batch 2020|SLIIT|</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/agency/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/agency/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>application/views/assets/vendor/agency/js/agency.min.js"></script>

    <script src="<?php echo base_url(); ?>application/views/assets/custom/js/ajax.js"></script>
    <script>
		
      $('#frm_logout').submit(function(e){
        e.preventDefault();
        logout("<?php echo site_url($logout_url);?>");
      });
		
  	</script>
  </body>

</html>