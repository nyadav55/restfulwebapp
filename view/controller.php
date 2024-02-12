<?php

require_once "../includes/config.php";
function listdata() {

    global $conn;

    $sql = "select * from userdata";
    $query = mysqli_query($conn,$sql);

    if($query) {
        if(mysqli_num_rows($query) > 0) {
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $data = [
                'status' => 200,
                'message' => "User found successfully.",
                'data' => $result,
            ];
            header("HTTP/1.0 200 Sucess");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => "User not found.",
            ];
            header("HTTP/1.0 404 User not found");
            return json_encode($data);
        }
        
    } else {
        $data = [
            'status' => 500,
            'message' => "Internal server error.",
        ];
        header("HTTP/1.0 500 Internal server error");
        return json_encode($data);
    }    
    
}


?>