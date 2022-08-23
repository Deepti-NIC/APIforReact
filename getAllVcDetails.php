<?php
require 'connectvc.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8;;application/json");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$postdata = file_get_contents("php://input");


    $sql = "SELECT * FROM vc_details ORDER BY VC_Date DESC";

    $result = mysqli_query($db,$sql);

    $vcarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $vcarray[] = $row;
    }
    echo json_encode($vcarray);

         
?> 
