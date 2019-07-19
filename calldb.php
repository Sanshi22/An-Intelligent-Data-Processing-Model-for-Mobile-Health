<?php
	$conn = mysqli_connect("localhost","root","","Baap_be");
	$disease = $_GET['disease'];
	$query = "SELECT Name FROM Doctor where specialization = '".$disease."';";
	
	$result = mysqli_query($conn, $query);
	$myArray=array();
	while ($row = $result->fetch_assoc()) {
		#array_push($myArray,$row['Name']);
		$myArray[] = ['name'=> $row['Name']];
	}
	#echo $myArray;
	echo json_encode($myArray, JSON_FORCE_OBJECT);
?>