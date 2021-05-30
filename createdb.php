<?php 
require_once 'connection.php';
$sql="CREATE DATABASE wandoof";
if(!mysqli_query($conn,$sql))
	echo "error";
?>