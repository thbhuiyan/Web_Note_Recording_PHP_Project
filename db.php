<?php
mysqli_report(MYSQLI_REPORT_OFF);
$server = "localhost";
$username = "root";
$password = "";
$database = "notes";
$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("The connection has failed!\n");
}
else{
    echo "Connected with the '$database' database successfully\n";
}

?>