<?php

include("connection.php");

$name = $_POST['stdname'];
$age = $_POST['stdage'];

$query = "INSERT INTO detail (name, age) VALUES (?,?)";
$params = array($name,$age);
$result = sqlsrv_query($conn,$query,$params);

?>