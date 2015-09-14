<?php
$servername = "connerfr-msql.cjzvxtobjfrf.us-west-1.rds.amazonaws.com";
$username = "connerfr_admin";
$password = "3Ruptureddisks!";
$database = "pms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>