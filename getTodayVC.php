<?php
require 'connectvc.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8;;application/json");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$postdata = file_get_contents("php://input");


    $sql = "SELECT * FROM vc_details where VC_Date=CURDATE()";

    $result = mysqli_query($db,$sql);


           
            echo json_encode(mysqli_num_rows($result));

         
?> 
