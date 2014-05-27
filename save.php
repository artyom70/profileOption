<?php
	include('config.php');
	
	if(!isset($_POST['yes']) && !isset($_POST['no']) && isset($_POST['userID'])) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$userID = $_POST['userID'];
		$sql = "UPDATE users SET firstName ='" .$firstName. "',lastName = '" .$lastName. "',email = '". $email ."',password = '" .$password. "',gender= '". $gender ."' WHERE id= " . $userID;
		$query = mysql_query($sql);
		header('location: index.php');
	}
	else if(isset($_POST['yes'])) {
		$userID = $_POST['userID'];
		$sql = "DELETE FROM users WHERE id= " . $userID;
		$query = mysql_query($sql);
		header('location: index.php');
	}
	else if(isset($_POST['no'])) {
		header('location: index.php');
	}
	else {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender']; 
		$sql = "INSERT INTO users (firstName, lastName, email, password, gender) 
							VALUES('" . $firstName ."', '" . $lastName ."', '" .$email ."', '" .$password ."', '" .$gender."')";
		$query = mysql_query($sql);
		header('location: index.php');
	}
?>