<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $sql = "INSERT INTO `tnotes` ( `title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<div class="alert alert-success " role="alert"><strong>Success!</strong> Notes has been inserted successfully! </div>';
    } else {
        echo '<div class="alert alert-warning " role="alert"><strong>Warning!</strong> Notes was not inserted successfully due to this error: ' . mysqli_error($con) . '"</div>"';
    }
}
