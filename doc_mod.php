
<!doctype html>

<html lang="en-gb" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>SANJEEVANI</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">

<link rel="stylesheet" href="css1/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css1/isotope.css" media="screen" />
<link rel="stylesheet" href="js1/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css1/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js1/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css1/styles.css" />
<!-- Font Awesome -->
<link href="font1/css1/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i>DOCTOR MODE</b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="home2.php" class="scroll-link">HOME</a></li>
          <li><a href="patient_mode.php" class="scroll-link">PATIENT MODE</a></li>
          <li><a href="#aboutUs" class="scroll-link">ABOUT US</a></li>
          <li><a href="#team" class="scroll-link">TEAM</a></li>
          
	  <li><a href="login.php" class="scroll-link">LOG IN</a></li>
	<li><a href="signup.php" class="scroll-link">SIGN UP</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg1.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">Belief in recovery always</h1>
        <a href="#basics" class="arrow-link"> <i class="fa fa-arrow-circle-down fa-2x"></i> </a> 
        <!--<p>Awesome theme for your Business or Corporate site to showcase <br/>
          your product and service.</p>--> 
      </div>
    </div>
  </div>
</section>
<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
		$my_file = 'file.txt';
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates fil
		$read = fopen($my_file, 'r');
		
			
		
		$tobewritn = '1234567 8 90';
		fwrite($handle, $tobewritn);
		$data = fread($read,filesize($my_file));
		$datanew = "\n"." definetly";
		fwrite($handle, $datanew);
		//print(filesize($my_file));
		fclose($handle);
		
	?>
	

    
		
				<?php
		//this is  basicaly done  to  read  the  data  from  the  external  file 
	
		$fileName = "/opt/lampp/htdocs/C_XAMPP_HTDOCS_ashu/ashu/dis_vs_symtom.txt";
		$fp = fopen($fileName,"r");
		if(isset($_POST['show']))
		{
				if( $fp == false )
				{
					echo ( "Error in opening file" );
					exit();
				}
  
				while(!feof($fp))
					{
						echo fgets($fp). "<br>";
						echo "<hr>";
						
					}
		}
	?> 
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
      <!-- Heading -->
      <h2>Our Services</h2>
      <p>TO PROVIDE HEALTH CARE AT EACH AND EVERY DOORSTEP.</p>
    </div>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-life-ring fa-2x circle"></i>
        <h3><span class="id-color">Cardio Monitoring</span></h3>
        <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue. Integer elit imperdiet congue.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-plus-square fa-2x circle"></i>
        <h3><span class="id-color">Medical Treatment</span></h3>
        <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue. Integer elit imperdiet congue.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c1"> <i class="fa fa-female fa-2x circle"></i>
        <h3><span class="id-color">Women Care Help</span></h3>
        <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue. Integer ultricies sed elit impe.</p>
      </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center c2"> <i class="fa fa-child fa-2x circle"></i>
        <h3><span class="id-color">Child Care</span></h3>
        <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue. Integer elit imperdiet conempus.</p>
      </div>
      <!-- end:--> 
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>About Us</h2>
      <p>This is an interdisciplinary approach by the students of AIT Pune to automate the health care diagnoses process and predict the risk of a particular disease in a patient </p>
    </div>
    <div class="row feature design">
      <div class="six columns right">
        <h3>Clean and Modern Design.</h3>
        <p>The sacrifices made by veterans and their willingness to fight in defense of our nation merit our deep respect and praise - and to the best in benefits and medical care. </p>
        
      </div>
      <div class="six columns feature-media left"> <img src="images/AIT.jpg" alt=""> </div>
    </div>
  </div>
</section>
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2>TEAM OF DOCTORS BEHINDE THIS STUDY</h2>
      <p>The sacrifices made by veterans and their willingness to fight in defense of our nation merit our deep respect and praise - and to the best in benefits and medical care..</p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/1.jpg" class="fancybox"> <img src="images/work/1.jpg" alt="">
              <div class="overlay"> <span>Etiam porta</span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
              <div class="overlay"> <span>Lorem ipsum</span> </div>
              </a> </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
              <div class="overlay"> <span>Vivamus quis</span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
              <div class="overlay"> <span>Donec ac tellus</span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
              <div class="overlay"> <span>Etiam volutpat</span> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/6.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
              <div class="overlay"> <span>Donec congue </span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
              <div class="overlay"> <span>Nullam a ullamcorper diam</span> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
              <div class="overlay"> <span>Etiam consequat</span> </div>
              </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Our Team</h2>
      <p>The sacrifices made by veterans and their willingness to fight in defense of our nation merit our deep respect and praise - and to the best in benefits and medical care..</p>
	  </p>
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="" alt=""> </div>
            <!-- Member Details -->
            <h4>SMITA</h4>
            <!-- Designation --> 
            <span class="pos">Doctor</span> </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="" alt=""> </div>
            <!-- Member Details -->
            <h4>ANKIT</h4>
            <!-- Designation --> 
            <span class="pos">Art Director</span> </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="" alt=""> </div>
            <!-- Member Details -->
            <h4>KRITI</h4>
            <!-- Designation --> 
            <span class="pos">Manager</span> </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="" alt=""> </div>
            <!-- Member Details -->
            <h4>DIVYA</h4>
            <!-- Designation --> 
            <span class="pos">Creative</span> </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <p>There are many variations of passages of Health care but the majority have suffered.</p>
        </div>
      </div>
      <div class="row mrgn30">
        <form method="post" action="#" id="contactfrm" role="form">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
            </div>
            <div class="result"></div>
          </div>
        </form>
        <div class="col-sm-4">
          <h4>Address:</h4>
          <address>
          AIT PUNE<br>
          ALANIDI ROADS,<br>
          DIGHI HILLS,411010 <br>
          </address>
          <h4>Phone:</h4>
          <address>
          12345-49589-2<br>
          </address>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      <!--CLEAR FLOATS--> 
    </div>
    <!--/.container--> 
  </div>
</section>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2017| All Rights Reserved -- Designed by <a href="http://webthemez.com/">BAAP BE TEAM</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js1/modernizr-latest.js"></script> 
<script src="js1/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js1/bootstrap.min.js" type="text/javascript"></script> 
<script src="js1/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js1/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js1/jquery.nav.js" type="text/javascript"></script> 
<script src="js1/jquery.fittext.js"></script> 
<script src="js1/waypoints.js"></script> 
<script src="js1/custom.js" type="text/javascript"></script> 
<script src="js1/owl-carousel/owl.carousel.js"></script>
</body>

<!-- Mirrored from webthemez.com/demo/doctor-free-responsive-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2017 10:26:48 GMT -->
</html>
