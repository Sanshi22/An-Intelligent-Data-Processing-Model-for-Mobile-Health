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
 echo "<font color=black>";
// Accessing session data

echo "Hi Dr. "  .$_SESSION["user"] ;
echo "<hr>";
$conn = mysqli_connect("localhost","root","","Baap_be");
$result = mysqli_query($conn,"SELECT * FROM Appointment WHERE doctorname='" . $_SESSION["user"] ."'");
$count  = mysqli_num_rows($result);
$bool = true;

$table_doctorname = "";
$table_patientname= "";

    if($count > 0) //If there are no returning rows or no existing username
    {
       while($row = mysqli_fetch_assoc($result)) // display all rows from query
       {
	  $table_patientname = $row['patientname']; 
          $table_doctorname = $row['doctorname']; // the first username row is passed on to $table_users, and so on until the query is finished
         
         $var = $_SESSION["user"];
        
	
	  if(trim($var)===trim($table_doctorname)) // checks if there are any matching fields
    		   {
           		echo "Patient  ";
			echo $table_patientname;
			echo "&nbsphas booked an appointment with you ";
			echo "<br>";
     		  }
		else 
		{
			echo " NO";
		}
       }
       
    }
    else
    {
       echo " NO APPOINTMENT	";
    }

$conn->close();

?>

                       </div>
                   </div>
               </div>
           </div>
    </div>
    </section>
</body>
</html>

