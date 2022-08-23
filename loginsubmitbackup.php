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
    $user = $request->user;//change here
    $pwd = $request->pwd;
    $sql = "SELECT * FROM login where user='$user' and pwd='$pwd' ";
    $result=mysqli_query($db,$sql);
    //while($row = mysqli_fetch_assoc($result))
    if(mysqli_num_rows($result)>0)
        echo json_encode(["success" => 1]);
    else{ 
        echo json_encode(["success" => 0]);
    }
}
?> 
