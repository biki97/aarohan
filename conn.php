<?php
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    
}

return $conn;



 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
   