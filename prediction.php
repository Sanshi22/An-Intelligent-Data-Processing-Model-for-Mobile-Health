<!DOCTYPE html>
<?php
// Starting session
session_start();
 
// Accessing session data
echo 'Hi, ' . $_SESSION["user"] ;
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Prediction System Using Machine Learning</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<div class="col-md-12">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"><h1 class="white">SANJEEVANI</h1></a>
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="home2.php">Home</a></li>
						<li class=""><a href="refresh.php">Diagnose Page</a></li>						
						<li class=""><a href="doc_mod.php">Doctor Mode</a></li>
						<li class=""><a href="patient_mode.php">Patient Mode</a></li>
				        
				      </ul>
				    </div>
				</div>
			  </div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
							
						
		
		
		<a href="http://localhost:8888/notebooks/pneumonia.ipynb"><input type="submit" name="python" class="btn btn-appoint" value=" VIEW PREDDICTION CODES " /></a>
		
		<form action="#" method="post" type="submit">
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING DECISION TREE" /></a>
		
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING LOGISTIC REGRESSION" />
		
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING NAIVE BAEYES" />
			
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING SVM " />
		
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING RANDOM FOREST " />
			<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING LOGISTIC REGRESSION " />
			
		</form>
			
			<?php
				//this is  basicaly done  to  read  the  data  from  the  external  file 
	                 
				$fileName = "predicted_output.txt";
				$fileName1 = "predicted_percent.txt";
				$fileName2 = "/opt/lampp/htdocs/C_XAMPP_HTDOCS_ashu/ashu/symtoms.txt";
				$fp1 = fopen($fileName1,"r");
				$fp2 = fopen($fileName2,"r");
				$fp = fopen($fileName,"r");
				if(isset($_POST['preict1']))
				{
						if( $fp == false )
						{
							echo ( "Error in opening file" );
							exit();
						}
  
						while(!feof($fp))
							{
							echo "<br>";
							 
							echo '<i style="color:white;font-size:30px;font-family:calibri ;"> ' .fgets($fp). "<br>".'  </i> ';
					
							}
		
							echo "<br>";
							echo '<i style="color:yellow;font-size:30px;font-family:calibri ;"> ' .fgets($fp1)."% CHANCES OF ".fgets($fp2). "<br>".'  </i> ';
				}	
			?> 
						</div>
						<div class="banner-text text-center">
							<br>
							<p>CLICK TO CONSULT DOCTORS</p>
							<a href="showdoctor.php" class="btn btn-appoint">SHOW DOCTORS</a>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->
	<!--service-->
	
  </body>
</html>
