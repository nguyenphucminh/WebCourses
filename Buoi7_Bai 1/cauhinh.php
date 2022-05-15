<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'abc123';
	$dbname = 'qlkhtt';
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die('Cannot Connect...');
		exit();
	}
?>
