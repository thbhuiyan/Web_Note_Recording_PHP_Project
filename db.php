<?php
mysqli_report(MYSQLI_REPORT_OFF);
$server = "localhost";
$username = "root";
$password = "";
$database = "notes";
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("The connection has failed!\n");
} else {
    echo "Connected with the '$database' database successfully\n";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $sql = "INSERT INTO `tnotes` ( `title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "The record has been inserted successfully!<br>";
    } else {
        echo "The record was not inserted successfully due to this error: " . mysqli_error($con);
    }
}
