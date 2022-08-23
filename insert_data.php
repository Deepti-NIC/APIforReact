<?php
require 'connect.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8;;application/json");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$postdata = file_get_contents("php://input");
print_r($_POST);
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);     
    $user = $request->user;
    $pwd = $request->pwd;
    $sql = "INSERT INTO login (user, pwd) VALUES ('$user','$pwd')";
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
