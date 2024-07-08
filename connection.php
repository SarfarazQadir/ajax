<?php

$serverName = "SARFARAZ";
$database = "Class_db";
$userid = "sa";
$password = "123456789";

$connection = [
    "Database" => $database,
    "Uid" => $userid,
    "PWD" => $password
];

$conn = sqlsrv_connect($serverName,$connection);

// if($conn){
//     echo "Connected";
// }else{
//     echo "Not Connected";
// }



?>