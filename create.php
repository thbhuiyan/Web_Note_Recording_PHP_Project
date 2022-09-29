<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $sql = "INSERT INTO `tnotes` ( `title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $insert = true;
        echo "The record has been inserted successfully!<br>";
    } else {
        echo "The record was not inserted successfully due to this error: " . mysqli_error($con);
    }
}
