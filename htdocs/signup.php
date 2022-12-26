<?php

$name = filter_input(INPUT_POST, 'name');
$phonenumber = filter_input(INPUT_POST, 'phonenumber');
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "reservation";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(msqli_connect_error()){
	die('Connect Error('.msqli_connect_errno() .') '. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO user_table ( user_id, name, username, password, email, phonenumber)
	values (' ', '$name', '$username' , '$password', '$email', '$phonenumber')";
	if ($conn->query($sql)){
		echo "You have made your account! Enjoy your meal";
	}
	else{
		echo "ERROR: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}
if (!empty($name)){
	
	
}
else{
	echo "Please enter your name";
	die();
}

if (!empty($phonenumber)){
	
	
}
else{
	echo "Phone Number should not be empty";
	die();
}

if (!empty($email)){
	
	
}
else{
	echo "Email should not be empty";
	die();
}

if (!empty($username)){
	
	
}
else{
	echo "Username should not be empty";
	die();
}

if (!empty($password)){
	
	
}
else{
	echo "Please make a password";
	die();
}
?>