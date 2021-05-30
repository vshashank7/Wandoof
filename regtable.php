<?php
	require_once 'connection.php';
	$sql="CREATE TABLE registration(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(30) NOT NULL,
	gender INT(1),
	dob VARCHAR(8),
	)";
	if(!mysqli_query($conn,$sql))
		echo "error";
	else
		echo "successfully created";
?>