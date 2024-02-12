<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json");
include_once "controller.php"; 

$method = $_SERVER["REQUEST_METHOD"];

if($method == "GET") {

    $list = listdata();
    echo $list;
}
else {
    $data = [
        'status' => 404,
        'message' => $method . "Method not allowed",
    ];
    header("HTTP/1.0 405 Method not allowed");
    echo json_encode($data);
}

?>