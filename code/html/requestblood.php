<?php

$servername = "bmlib1ur00odiqdqc7ib-mysql.services.clever-cloud.com";
$username = "uoujjceivrkjxpup";
$password = "ZIrMPvojvGmxOC1bpMfF";
$database= "bmlib1ur00odiqdqc7ib";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$state = $_REQUEST['state'];
$blood = $_REQUEST['bloodgroup'];
$notes = $_REQUEST['notes'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO requestblood VALUES ('$name',
	'$email','$phone','$state', '$blood', '$notes')";

if(mysqli_query($conn, $sql)){
	header("Location:submission.html");

} else{
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
