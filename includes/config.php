<?php

$host = "localhost";
$username = "root";
$password = "admin";
$database = "dbRestapi";

$conn = mysqli_connect($host, $username, $password, $database);

        if(!$conn) {
            die("<h1>DB connection failed</h1>". mysqli_connect_errno());
        }


// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASSWORD','');
// define('DB_DATABASE','dbRestapi');

// class DBconnection {
//     public function __construct() {
//         $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

//         if(!$conn) {
//             die("<h1>DB connection failed</h1>". mysqli_connect_errno());
//         }
//         return $this->conn = $conn;
//     }
// }

?>