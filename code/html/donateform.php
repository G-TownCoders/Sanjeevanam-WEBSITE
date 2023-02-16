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
$phone = $_REQUEST['phoneno'];
$email = $_REQUEST['email_id'];
$state = $_REQUEST['State'];
$city = $_REQUEST['city'];
$blood = $_REQUEST['bloodgroup'];
$gender = $_REQUEST['gender'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO donateblood VALUES ('$name',
	'$phone','$email','$state','$city', '$blood', '$gender')";

if(mysqli_query($conn, $sql)){
	header("Location:/code/html/requestsubmit.html");

} else{
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
