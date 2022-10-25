<?php
$insert = false;
$update = false;
$delete = false;
mysqli_report(MYSQLI_REPORT_OFF);
$server = "localhost";
$username = "root";
$password = "";
$database = "notes";
$con = mysqli_connect($server, $username, $password, $database);
