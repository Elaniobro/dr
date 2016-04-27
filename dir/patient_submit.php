<?php
	include('config.php');

	// Create connection
	$conn = mysqli_connect($host_name, $user_name, $password, $database);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


		#$account = addslashes($_POST['account']);
		$registration_date			 = date("Y-m-d");
		$last_name					 = addslashes($_POST['last_name']);
		$first_name					 = addslashes($_POST['first_name']);
		$dob						 = addslashes($_POST['dob']);
		$phone_number				 = addslashes($_POST['phone_number']);
		$email						 = addslashes($_POST['email']);
		$address_1					 = addslashes($_POST['address_1']);
		$address_2					 = addslashes($_POST['address_2']);
		$city						 = addslashes($_POST['city']);
		$state						 = addslashes($_POST['state']);
		$zip_code					 = addslashes($_POST['zip_code']);
		$primary_insurance			 = addslashes($_POST['primary_insurance']);
		$primary_insurance_id		 = addslashes($_POST['primary_insurance_id']);
		$secondary_insurance		 = addslashes($_POST['secondary_insurance']);
		$secondary_insurance_id		 = addslashes($_POST['secondary_insurance_id']);
		$primary_care_name		 	 = addslashes($_POST['primary_care_name']);
		$primary_care_number	  	 = addslashes($_POST['primary_care_number']);
		$treatment					 = addslashes($_POST['treatment']);
		$current_medications		 = addslashes($_POST['current_medications']);
		$diabetes					 = addslashes($_POST['diabetes']);
		$poor_circulation			 = addslashes($_POST['poor_circulation']);
		$gout						 = addslashes($_POST['gout']);
		$cancer						 = addslashes($_POST['cancer']);
		$kidney_disorder			 = addslashes($_POST['kidney_disorder']);
		$hiv						 = addslashes($_POST['hiv']);
		$heart_condition			 = addslashes($_POST['heart_condition']);
		$high_blood_pressure		 = addslashes($_POST['high_blood_pressure']);
		$pharmacy_name				 = addslashes($_POST['pharmacy_name']);
		$pharmacy_loc				 = addslashes($_POST['pharmacy_loc']);
		$referred					 = addslashes($_POST['referred']);
		$blood_meds					 = addslashes($_POST['blood_meds']);


		$sql = "INSERT INTO patients
			(
			registration_date, last_name, first_name, address_1, address_2, city, state, zip_code, phone_number, dob, email,
			primary_insurance, primary_insurance_id,
			secondary_insurance, secondary_insurance_id, primary_care_name, primary_care_number,
			treatment, blood_meds, diabetes, poor_circulation, gout, cancer, kidney_disorder, hiv, heart_condition, high_blood_pressure, pharmacy_name, pharmacy_loc, current_medications, referred
			)

		VALUES (
			'$registration_date', '$last_name', '$first_name', '$address_1', '$address_2', '$city', '$state', '$zip_code', '$phone_number', '$dob', '$email',
			'$primary_insurance', '$primary_insurance_id', '$secondary_insurance',
			'$secondary_insurance_id', '$primary_care_name', '$primary_care_number',
			'$treatment', '$blood_meds', '$diabetes', '$poor_circulation', '$gout', '$cancer', '$kidney_disorder', '$hiv', '$heart_condition', '$high_blood_pressure', '$pharmacy_loc', '$pharmacy_name', '$current_medications', '$referred'
		);";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
