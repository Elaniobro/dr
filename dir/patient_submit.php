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
		$address_1					 = addslashes($_POST['address_1']);
		$address_2					 = addslashes($_POST['address_2']);
		$city						 = addslashes($_POST['city']);
		$state						 = addslashes($_POST['state']);
		$zip_code					 = addslashes($_POST['zip_code']);
		$phone_number				 = addslashes($_POST['phone_number']);
		$dob						 = addslashes($_POST['dob']);
		$social_security			 = addslashes($_POST['social_security']);
		$spouse_name				 = addslashes($_POST['spouse_name']);
		$guarantor					 = addslashes($_POST['guarantor']);
		$primary_insurance			 = addslashes($_POST['primary_insurance']);
		$primary_insurance_id		 = addslashes($_POST['primary_insurance_id']);
		$primary_insurance_group	 = addslashes($_POST['primary_insurance_group']);
		$secondary_insurance		 = addslashes($_POST['secondary_insurance']);
		$secondary_insurance_id		 = addslashes($_POST['secondary_insurance_id']);
		$secondary_insurance_group	 = addslashes($_POST['secondary_insurance_group']);
		$primary_care_name		 	 = addslashes($_POST['primary_care_name']);
		$primary_care_number	  	 = addslashes($_POST['primary_care_number']);
		$treatment					 = addslashes($_POST['treatment']);
		$current_medications		 = addslashes($_POST['current_medications']);
		$allergies					 = addslashes($_POST['allergies']);
		$anemia						 = addslashes($_POST['anemia']);
		$alzheimer					 = addslashes($_POST['alzheimer']);
		$arthritis					 = addslashes($_POST['arthritis']);
		$asthma						 = addslashes($_POST['asthma']);
		$bleeding_disorder			 = addslashes($_POST['bleeding_disorder']);
		$cancer						 = addslashes($_POST['cancer']);
		$lung_disease				 = addslashes($_POST['lung_disease']);
		$swollen_ankles				 = addslashes($_POST['swollen_ankles']);
		$hiv						 = addslashes($_POST['hiv']);
		$glaucoma					 = addslashes($_POST['glaucoma']);
		$gout						 = addslashes($_POST['gout']);
		$heart_condition			 = addslashes($_POST['heart_condition']);
		$high_blood_pressure		 = addslashes($_POST['high_blood_pressure']);
		$kidney_disorder			 = addslashes($_POST['kidney_disorder']);
		$liver_disease				 = addslashes($_POST['liver_disease']);
		$pace_maker					 = addslashes($_POST['pace_maker']);
		$sickle_cell				 = addslashes($_POST['sickle_cell']);
		$diabetes					 = addslashes($_POST['diabetes']);
		$poor_circulation			 = addslashes($_POST['poor_circulation']);
		$psychiatric_disorder		 = addslashes($_POST['psychiatric_disorder']);
		$rheumatic_fever			 = addslashes($_POST['rheumatic_fever']);
		$stomach_ulcer				 = addslashes($_POST['stomach_ulcer']);
		$thyroid_problems			 = addslashes($_POST['thyroid_problems']);
		$tuberculosis				 = addslashes($_POST['tuberculosis']);
		$epilepsy					 = addslashes($_POST['epilepsy']);
		$vascular_grafts			 = addslashes($_POST['vascular_grafts']);
		$joint_implants				 = addslashes($_POST['joint_implants']);
		$replacement_heart			 = addslashes($_POST['replacement_heart']);
		$valves						 = addslashes($_POST['valves']);
		$chemotherapy				 = addslashes($_POST['chemotherapy']);
		$osteoporosis				 = addslashes($_POST['osteoporosis']);
		$referred					 = addslashes($_POST['referred']);

		$sql = "INSERT INTO patients
			(
			registration_date,last_name, first_name, address_1, address_2, city, state, zip_code, phone_number, dob, social_security,
			spouse_name, guarantor, primary_insurance, primary_insurance_id, primary_insurance_group,
			secondary_insurance, secondary_insurance_id, secondary_insurance_group, primary_care_name, primary_care_number,
			treatment, current_medications, allergies, anemia, alzheimer, arthritis, asthma, bleeding_disorder, cancer, lung_disease,
			swollen_ankles, hiv, glaucoma, gout, heart_condition, high_blood_pressure, kidney_disorder, liver_disease, pace_maker, sickle_cell,
			diabetes, poor_circulation, psychiatric_disorder, rheumatic_fever, stomach_ulcer, thyroid_problems, tuberculosis, epilepsy,
			vascular_grafts, joint_implants, replacement_heart, valves, chemotherapy, osteoporosis
			)

		VALUES (
			'$registration_date', '$last_name', '$first_name', '$address_1', '$address_2', '$city', '$state', '$zip_code', '$phone_number', '$dob', '$social_security',
			'$spouse_name', '$guarantor', '$primary_insurance', '$primary_insurance_id', '$primary_insurance_group', '$secondary_insurance',
			'$secondary_insurance_id', '$secondary_insurance_group', '$primary_care_name', '$primary_care_number',
			'$treatment', '$current_medications', '$allergies', '$anemia', '$alzheimer', '$arthritis', '$asthma', '$bleeding_disorder', '$cancer', '$lung_disease',
			'$swollen_ankles', '$hiv', '$glaucoma', '$gout', '$heart_condition', '$high_blood_pressure', '$kidney_disorder', '$liver_disease', '$pace_maker', '$sickle_cell',
			'$diabetes', '$poor_circulation', '$psychiatric_disorder', '$rheumatic_fever', '$stomach_ulcer', '$thyroid_problems', '$tuberculosis', '$epilepsy',
			'$vascular_grafts', '$joint_implants', '$replacement_heart', '$valves', '$chemotherapy', '$osteoporosis'
		);";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
