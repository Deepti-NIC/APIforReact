<?php 
$conn = mysqli_connect('localhost', 'root', 'mysql123','server');

if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
?>
