<?php
$hostname = "localhost";
$username = "root";
$password = "password";
$database = "iuea";

$conn = mysqli_connect($hostname, $username, $password);
$dbc = mysqli_select_db($conn, $database);
//if($dbc){echo "Success";}else{echo mysqli_error();} 