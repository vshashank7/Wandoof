<?php
	require_once 'connection.php';
	$sql="CREATE TABLE postimage(
	picid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	resname VARCHAR(50) NOT NULL,
	resadd VARCHAR(50) NOT NULL,
	opent VARCHAR(10) NOT NULL,
	closet VARCHAR(10) NOT NULL,
	restype VARCHAR(20) NOT NULL,
	resspecial VARCHAR(200) NOT NULL
	)";
	if(!mysqli_query($conn,$sql))
		echo "error".mysqli_error($conn);
	else
		echo "successfully created";
?>