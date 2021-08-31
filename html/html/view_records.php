<?php
$servername = "192.168.0.118";
$username = "ritu";
$password = "virtualritu";
$dbname = "dummy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT project_name, begin_date,cost FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Project Name: " . $row["project_name"]. " - Begin Date: " . $row["begin_date"]. " Cost: " . $row["cost"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

echo "\n <a href='index.html'>Insert Record</a>";
?>
