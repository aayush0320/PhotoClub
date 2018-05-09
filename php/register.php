<?php
	require ('connection.php');
	$stmt = $conn->prepare("INSERT INTO User (Firstname, Lastname, Username,Email,Phone,Password) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssis",$firstname,$lastname,$username,$email,$phone,$password );
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	
	
		if($stmt->execute()){
			header('Location: index.php');
		}
		else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$stmt->close();

?>
