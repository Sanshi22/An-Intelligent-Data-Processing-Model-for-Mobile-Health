<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<section id="banner" class="banner">

		<div class="bg-color">
		 <div class="container">
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
               <div class="panel panel-default">

                  <div class="panel-heading"><h3 class="black">UPCOMING APPOINTMENTS </h3></div>
                   <div class="panel-body" id="b1" class="black">
                   		<div class="banner-text text-center"> 
                   			<?php

						session_start();
 
// Accessing session data
					echo "<font color=black>";
					echo "Hi "  .$_SESSION["user"] ;
					echo "<hr>";



echo  "Your appointment has been booked with Dr." .$_GET["doctorname"] ;
echo "<br>";

$conn= new mysqli("localhost", "root","","Baap_be") ;
if($_SERVER["REQUEST_METHOD"] == "GET"){
	
	$doctorname = $_GET['doctorname'];
	$patientname = $_SESSION["user"];
	
	if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
	} 

		$sql = "INSERT INTO Appointment (patientname , doctorname)
		VALUES ('$patientname', '$doctorname')";

	if ($conn->query($sql) === TRUE) {
    	echo "";
} 	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 




                  		 </div>
                   </div>
               </div>
           </div>
		</div>
		</section>




</body>
</html>
