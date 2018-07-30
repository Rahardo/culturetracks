<?php
//Koneksi ke Database
$dbhost = "101.50.1.32";
$dbuser = "garudacu_root";
$dbpass = "Admin-garuda";
$dbname = "garudacu_culture_monitoring";
// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if (!$con) die('Could not connect: ' . mysqli_error());


?>