<?php
$server = "localhost";
$username = "root";
$password = "";
$database1 = "capstone_project";
$database2 = "capstoen_project";
$con1 = mysqli_connect($server, $username, $password, $database1);
if (!$con1) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connect to the second database
$con2 = mysqli_connect($server, $username, $password, $database2);
if (!$con2) {
    die("Connection failed: " . mysqli_connect_error());
}

?>