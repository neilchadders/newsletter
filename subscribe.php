<?php
require_once "connection.inc.php"; // includes the file in this file - does it only once and ignores other requests

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

echo ($first_name . " " . $last_name . " " . $email);


$date = date("Y-m-d H:i:s"); // format for date

//echo ($date);

$query = "INSERT INTO $table (first_name, last_name, email, date) VALUES ('$first_name', '$last_name', '$email', '$date')";// $table required from connection.inc.php

mysqli_query($dbc, $query) || die ("Error inserting email" . mysqli_error($dbc)); // mysqli_query = function that takes following parameters: 1)object from mysqli_connect , in this case $dbc (required from connection.inc.php) 2) query string - see $query 3)


echo ' You have been successfully added.';
