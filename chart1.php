<?php

require 'connection.php';	
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8;;application/json");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$postdata = file_get_contents("php://input");
  
// SQL query to select data from database
$myquery = "select VC_Mode, COUNT(VC_Mode) AS count from vc_details GROUP BY VC_Mode";
$query = $conn->query($myquery);  //in place of $result
  
 
  //initialize the array to store the processed data
  $jsonArray = array();
  //check if there is any data returned by the SQL Query
    while($row = $query->fetch_assoc()) {
      $jsonArrayItem = array();
      $jsonArrayItem['label'] = $row['VC_Mode'];
      $jsonArrayItem['value'] = $row['count'];
      //append the above created object into the main array.
      array_push($jsonArray, $jsonArrayItem);
    }
  
    header('Content-type: application/json');
    echo json_encode($jsonArray);   
  
?>

