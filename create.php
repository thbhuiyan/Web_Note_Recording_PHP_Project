<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['snoEdit'])) {

        //update the record
        $sno = $_POST["snoEdit"];
        var_dump($sno);
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
        //$sql = "UPDATE `tnotes` SET `title` = '$title' AND `description`='$description' WHERE `tnotes`.`sno` = $sno";
        $sql = "UPDATE `tnotes` SET `title` = '$title', `description`='$description' WHERE `tnotes`.`sno` = '$sno'";
        $update = mysqli_query($con, $sql);
        if ($update) {
            echo '<div class="alert alert-success " role="alert"><strong>Success!</strong> Notes has been inserted successfully! </div>';
        } else {
            echo '<div class="alert alert-warning " role="alert"><strong>Warning!</strong> Notes was not inserted successfully due to this error: ' . mysqli_error($con) . '"</div>"';
        }
    } else {
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
}
