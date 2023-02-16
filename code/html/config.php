<?php
$servername = "bmlib1ur00odiqdqc7ib-mysql.services.clever-cloud.com";
$username = "uoujjceivrkjxpup";
$password = "ZIrMPvojvGmxOC1bpMfF";
$database= "bmlib1ur00odiqdqc7ib";
$conn=new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connect Failed".$conn->connect_error);
}
?>