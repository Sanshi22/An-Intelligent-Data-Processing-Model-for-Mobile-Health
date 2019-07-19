<?php
session_start();


if(count($_GET)>0)
 {
	$conn = mysqli_connect("localhost","root","","Baap_be");
	$result = mysqli_query($conn,"SELECT * FROM Doctor WHERE Name='" . $_GET["uname"] . "' and password = '". $_GET["psw"]."'");
	$count  = mysqli_num_rows($result);

	$name = $_GET['uname'];
	$password = $_GET['psw'];
	 $bool = true;

	

    $table_users = "";
    $table_password = "";


    if($count > 0) //If there are no returning rows or no existing username
    {
       while($row = mysqli_fetch_assoc($result)) // display all rows from query
       {
          $table_users = $row['Name']; // the first username row is passed on to $table_users, and so on until the query is finished
          $table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
       }
       if($name == $table_users) // checks if there are any matching fields
       {
          echo $name ;
          echo $table_users;
          if($password == $table_password)
          {
             $_SESSION['user'] = $name; //set the username in a session. This serves as a global variable
             header("location:doc.php"); // redirects the user to the authenticated home page
          }
      	 else
      		 {
        		Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
       			 Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
       		}
    	}
    else
    {
       Print '<script>alert("Incorrect username!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
    }



$conn->close();

}
}
?>
