<?
#################
##
##  REQUEST LIST
##
#################
   include('../dir/config.php');
  // Create connection
  $conn = mysqli_connect($host_name, $user_name, $password, $database);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT id, full_name, email, select_time, apt_date, visit, office_location, phone_number, notes FROM requests";
  $result = $conn->query($sql);
  echo "<table id='requests'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th width='10'>id</th>";
        echo "<th width='200'>Full Name</th>";
        echo "<th width='100'>email</th>";
        echo "<th width='20'>time</th>";
        echo "<th width='10'>date</th>";
        echo "<th width='5'>first time</th>";
        echo "<th width='20'>phone number</th>";
        echo "<th width='250'>notes</th>";
        echo "<th width='25'>delete</th>";
      echo "<tr>";
    echo "<thead>";
    echo "<tbody>";
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
          echo "<td>" . $row["id"]. "</td>";
          echo "<td>" . $row["full_name"]. "</td>";
          echo "<td>" . $row["email"]. "</td>";
          echo "<td>" . $row["select_time"] . "</td>";
          echo "<td>" . $row["apt_date"] . "</td>";
          echo "<td>" . $row["visit"] . "</td>";
          echo "<td>" . $row["phone_number"] . "</td>";
          echo "<td>" . $row["notes"] ."</td>";
          echo "<td class'delete'><a  class='button alert tiny' href='delete.php?id=" . $row["id"] . "&cfg=requests'>Delete</td>";
        echo "</tr>";
      }
  } else {
      echo "0 results";
  }
  echo "<tbody>";
  echo "<table>";
  $conn->close();
