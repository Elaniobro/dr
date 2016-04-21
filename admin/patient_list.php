 <?php
         include('../dir/config.php');

        // Create connection
        $conn = mysqli_connect($host_name, $user_name, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT id, registration_date, last_name, first_name, address_1, address_2, city, state, zip_code, phone_number, dob, social_security, spouse_name, guarantor, primary_insurance, primary_insurance_id, primary_insurance_group, secondary_insurance, secondary_insurance_id, secondary_insurance_group, primary_care_name, primary_care_number, treatment, current_medications, allergies, anemia, alzheimer, arthritis, asthma, bleeding_disorder, cancer, lung_disease, swollen_ankles, hiv, glaucoma, gout, heart_condition, high_blood_pressure, kidney_disorder, liver_disease, pace_maker, sickle_cell, diabetes, poor_circulation, psychiatric_disorder, rheumatic_fever, stomach_ulcer, thyroid_problems, tuberculosis, epilepsy, vascular_grafts, joint_implants, replacement_heart, valves, chemotherapy, osteoporosis FROM patients";
        $result = $conn->query($sql);
        echo "<table id='patients'>";
          echo "<thead>";
            echo "<tr>";
              echo "<th width='10'>id</th>";
              echo "<th width='200'>Full Name</th>";
              echo "<th width='100'>Contact</th>";
              echo "<th width='20'>D.O.B.</th>";
              echo "<th width='200'>Address</th>";
              echo "<th width='20'>SS#</th>";
              echo "<th width='250'>Insurance 1</th>";
              echo "<th width='250'>Insurance 2</th>";
              echo "<th width='250'>PCP</th>";
              echo "<th width='25'>delete</th>";
           echo "<tr>";
          echo "<thead>";
          echo "<tbody>";
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                  echo "<td>" . $row["phone_number"] . "<br>" . $row["email"] . "</td>";
                  echo "<td>" . $row["dob"] . "</td>";
                  echo "<td>" . $row["address_1"] . "<br>" . $row["address_2"] . "<br>" . $row["city"] . ", " . $row["state"] . " " . $row["zip_code"] . "</td>";
                  echo "<td>" . $row["social_security"] . "</td>";
                  echo "<td>" . $row["primary_insurance"] . "<br>id: " . $row["primary_id"] ."<br>group: " . $row["primary_insurance_group"] . "</td>";
                  echo "<td>" . $row["secondary_insurance"] . "<br>id: " . $row["secondary_id"] ."<br>group: " . $row["secondary_insurance_group"] . "</td>";
                  echo "<td>" . $row["primary_care_name"] . "<br>#: " . $row["primary_care_number"] ."<br>treatment: " . $row["treatment"] . "</td>";
                  echo "<td class'delete'><a  class='button alert tiny' href='delete.php?id=" . $row["id"] . "&cfg=patients'>Delete</td>";

                echo "</tr>";
              }
          } else {
              echo "0 results";
          }
          echo "<tbody>";
        echo "<table>";
        $conn->close();

