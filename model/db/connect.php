<?php
$serverName= "127.0.0.1";
$dbname = "resume_db";
$userName= "root";
$password= "@querries";

$conn= new mysqli($serverName, $userName, $password, $dbname);

if($conn->connect_error){

die("Error in connection". $conn->connect_error);
}

echo "Connection Success!";

?>