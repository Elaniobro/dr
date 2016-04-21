<?php
	include('../dir/config.php');
		$conn = mysqli_connect($host_name, $user_name, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_GET['id']))
	{
		$cfg =	$_GET['cfg'];
		$id  =  $_GET['id'];
		$sql = 	"DELETE FROM $cfg WHERE id='$id'";

	}

	if ($conn->query($sql) === TRUE) {
	   	header('Location: index.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


