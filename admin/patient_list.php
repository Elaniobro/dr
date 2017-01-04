 <?php
         include('../dir/config.php');

        // Create connection
        $conn = mysqli_connect($host_name, $user_name, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT registration_date, id, last_name, first_name, address_1, address_2, city, state, zip_code, phone_number, dob, email,
            primary_insurance, primary_insurance_id,
            secondary_insurance, secondary_insurance_id, primary_care_name, primary_care_number,
            treatment, blood_meds, diabetes, poor_circulation, gout, cancer, kidney_disorder, hiv, heart_condition, high_blood_pressure, pharmacy_name, pharmacy_loc, current_medications, referred FROM patients";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo "<table id='patient-list'>";
            echo "<thead>";
              echo "<tr>";
                echo "<th width='10'>id</th>";
                echo "<th width='200'>Full Name</th>";
                echo "<th width='100'>Contact</th>";
                echo "<th width='20'>D.O.B.</th>";
                echo "<th width='200'>Address</th>";
                echo "<th width='20'>E-mail</th>";
                echo "<th width='250'>Phone #</th>";
                echo "<th width='25'>more info</th>";
                echo "<th width='25'>delete</th>";
              echo "<tr>";
            echo "</thead>";
            echo "<tbody>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
                echo "<td class='patient-info' data-info='{&quot;registration_date&quot;: &quot;" . $row["registration_date"] . "&quot;,&quot;id&quot;: &quot;" . $row["id"] . "&quot;,&quot;last_name&quot;: &quot;" . $row["last_name"] . "&quot;,&quot;first_name&quot;: &quot;" . $row["first_name"] . "&quot;,&quot;address_1&quot;: &quot;" . $row["address_1"] . "&quot;,&quot;address_2&quot;: &quot;" . $row["address_2"] . "&quot;,&quot;city&quot;: &quot;" . $row["city"] . "&quot;,&quot;state&quot;: &quot;" . $row["state"] . "&quot;,&quot;zip_code&quot;: &quot;" . $row["zip_code"] . "&quot;,&quot;phone_number&quot;: &quot;" . $row["phone_number"] . "&quot;,&quot;dob&quot;: &quot;" . $row["dob"] . "&quot;,&quot;email&quot;: &quot;" . $row["email"] . "&quot;,&quot;primary_insurance&quot;: &quot;" . $row["primary_insurance"] . "&quot;,&quot;primary_insurance_id&quot;: &quot;" . $row["primary_insurance_id"] . "&quot;,&quot;secondary_insurance&quot;: &quot;" . $row["secondary_insurance"] . "&quot;,&quot;secondary_insurance_id&quot;: &quot;" . $row["secondary_insurance_id"] . "&quot;,&quot;primary_care_name&quot;: &quot;" . $row["primary_care_name"] . "&quot;,&quot;primary_care_number&quot;: &quot;" . $row["primary_care_number"] . "&quot;,&quot;treatment&quot;: &quot;" . $row["treatment"] . "&quot;,&quot;blood_meds&quot;: &quot;" . $row["blood_meds"] . "&quot;,&quot;diabetes&quot;: &quot;" . $row["diabetes"] . "&quot;,&quot;poor_circulation&quot;: &quot;" . $row["poor_circulation"] . "&quot;,&quot;gout&quot;: &quot;" . $row["gout"] . "&quot;,&quot;cancer&quot;: &quot;" . $row["cancer"] . "&quot;,&quot;kidney_disorder&quot;: &quot;" . $row["kidney_disorder"] . "&quot;,&quot;hiv&quot;: &quot;" . $row["hiv"] . "&quot;,&quot;heart_condition&quot;: &quot;" . $row["heart_condition"] . "&quot;,&quot;high_blood_pressure&quot;: &quot;" . $row["high_blood_pressure"] . "&quot;,&quot;pharmacy_name&quot;: &quot;" . $row["pharmacy_name"] . "&quot;,&quot;pharmacy_loc&quot;: &quot;" . $row["pharmacy_loc"] . "&quot;,&quot;current_medications&quot;: &quot;" . $row["current_medications"] . "&quot;,&quot;referred&quot;: &quot;" . $row["referred"] . "&quot;}'>" . $row["id"] . "</td>";
                echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                echo "<td>" . $row["phone_number"] . "<br>" . $row["email"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>";
                echo "<td>" . $row["address_1"] . "<br>" . $row["address_2"] . "<br>" . $row["city"] . ", " . $row["state"] . " " . $row["zip_code"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td class='more-info'><a  class='button success tiny' href='#id=" . $row["id"] . "&cfg=patients'>Expand</td>";
                echo "<td class='delete'><a  class='button alert tiny' href='delete.php?id=" . $row["id"] . "&cfg=patients'>Delete</td>";

              echo "</tr>";
            }
              echo "</tbody>";
            echo "</table>";
          } else {
            echo "<div class='row'><div class='large-12 columns'><h2>There are no new patients at this time.</h2></div></div>";
          }
        $conn->close();

