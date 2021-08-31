<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "192.168.0.118";
$username = "ritu";
$password = "virtualritu";
$database = "dummy";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	//collect value of input feild
	$project_name = $_POST['project_name'];
	$begin_date = $_POST['begin_date'];
	$cost = $_POST['cost'];


//create connections
$conn = new mysqli($servername, $username, $password,$database);

//check connections
//
if ($conn-> connect_error){
	die("Connection failed:" .$conn->connect_error);
}

$sql = "INSERT INTO projects ". "(project_name,begin_date,cost) ". "VALUES('$project_name','$begin_date',$cost)";

if($conn->query($sql)=== TRUE){
	echo "New record created";
	echo "\n <a href='view_records.php'>View Records</a>";
} else{
	echo "Error" . $sql. "<br>".$conn->error;
}

}
?>

	
