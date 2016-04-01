<?php
	include('config.php');

	// Create connection
	$conn = mysqli_connect($host_name, $user_name, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

		if(isSet($_POST['spam']) && $_POST['spam'] !== ""){
			exit("Please dont spam me");
		}else{

		$full_name 			= addslashes($_POST['full_name']);
		$email 				= addslashes($_POST['email']);
		$select_time 		= addslashes($_POST['select_time']);
		$apt_date	 		= addslashes($_POST['apt_date']);
		$visit 				= addslashes($_POST['visit']);
		$office_location 	= addslashes($_POST['office_location']);
		$phone_number 		= addslashes($_POST['phone_number']);
		$notes 				= addslashes($_POST['notes']);

		$sql = "INSERT INTO requests
			(
			full_name, email, select_time, apt_date, visit, office_location, phone_number, notes
			)
		VALUES (
			'$full_name', '$email', '$select_time', '$apt_date', '$visit', '$office_location', '$phone_number', '$notes'
			);";


		$to = "dr.trybuch@gmail.com";
	    $subject = "Appointment request";

	    $body = "An appointment has been requested by " . $full_name . " Please call: " . $phone_number . " to confirm.\r\n\r\nIssues reported: " . $notes ;
	    $headers = 'From: myfeetdoc.com' . "\r\n" .
	    'Reply-To: ' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	    mail($to, $subject, $body, $headers);
	  }
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
