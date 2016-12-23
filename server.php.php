<?php
$servername="localhost";
$username="root";
$password="none";
$database="danang_intro";

//Create connection
$conn =new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error){
	die ("Connection failed:". $conn->connect_error);
}
echo "Connection successfully";
?>
