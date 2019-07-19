<!DOCTYPE html>
<html>
<body>

<?php

session_start();
 
// Accessing session data
echo 'Hi, ' . $_SESSION["user"] ;
$patientname = $_SESSION["user"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$conn = mysqli_connect("localhost","root","","Baap_be");
$result = mysqli_query($conn,"SELECT Name, specialization FROM Doctor");

    // output data of each row
    while ($row = $result->fetch_assoc()) {
   $doctorname= $row["Name"] ;
   echo " <form action =\"/C_XAMPP_HTDOCS_ashu/ashu/check.php\" method =\"POST\">";
   echo "<input type=\"radio\" name=\"doctorname\" value= \"$doctorname \" >"; 
   echo " "   . $row["Name"];
   echo "    " .$row["specialization"];
   echo "<br>";
}
   echo" <input type=\"submit\" value=\"Submit\">";
echo "</form>";
  


$conn->close();
?> 

</body>
</html>



