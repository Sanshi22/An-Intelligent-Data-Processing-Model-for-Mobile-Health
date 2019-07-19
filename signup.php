<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="spe"><b>Specialisation</b></label>
    <input type="text" placeholder="Enter Specialisation" name="spe" required>
    
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" value="Register">Sign Up</button>
    </div>
  </div>
</form>
</body>


</html>

<?php
echo "heloo";
$conn= new mysqli("localhost", "root","","Baap_be") ;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name = $_POST['name'];
	$password = $_POST['psw'];
	$spec=$_POST['spe'];
	
	if ($conn->connect_error) {
   	 die("Connection failed: " . $conn->connect_error);
	} 

		$sql = "INSERT INTO Doctor (Name,password,specialization)
		VALUES ('$name', '$password','$spec')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
} 	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


