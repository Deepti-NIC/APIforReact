<?php
$servername = "localhost";
$username = "root";
$password = "mysql123";
$database= "reactjsusers";
 
// Create connection
$db = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
else
{//echo "Connected successfully";
}
?>