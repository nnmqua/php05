<?php
include 'server.php';
//check submit register
if (isset($_POST["register"])) {
	$first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $avatar = "a.jpg";
    $user_name = $_POST ['user_name'];
    $password = $_POST ['password'];
    $birthday = $_POST ['birthday'];
    $gender = $_POST ['gender'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];

	$sql = "INSERT INTO user (first_name,last_name,avatar,username,password,birthday,gender,email,phone)
	VALUES ('$first_name','$last_name','$avatar','$user_name','$password','$birthday','$gender','$email','$phone')";
    //var_dump($sql);
    //exit;
	if ($conn->query($sql) === TRUE){
		echo "Register sucess";
	}

}
?>