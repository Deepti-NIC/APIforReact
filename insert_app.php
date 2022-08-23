<?php
require 'connect.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8;;application/json");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);     
    $fname = $request->fname;
    $lname = $request->lname;
    $gender = $request->gender;
    $dob = $request->dob;
    $address = $request->address;
    $pincode = $request->pincode;    
    $imgname = $request->imgname;
    $state = $request->state;
    $district = $request->district;
print_r($dob);
// $sql = "INSERT INTO applicant (fname,lname,gender) VALUES ('dsed','ead','m')";

   $sql = "INSERT INTO applicant  (fname,lname,gender,dob,imgname,address,state,district,pincode) 
   VALUES ('$fname','$lname','$gender','$dob','$imgname','$address','$state','$district','$pincode')";
    if(mysqli_query($db,$sql)){
        http_response_code(201);
        // echo json_encode(["success" => 1, "user" => mysqli_query($db,$sql)]); 
        echo json_encode(["success" => 1]); 
    }
    else{
        http_response_code(422); 
    }
         
}
?> 
