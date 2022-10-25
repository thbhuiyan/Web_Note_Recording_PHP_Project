<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['snoEdit'])) {
        //update the record
        $sno = $_POST["snoEdit"];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
        $sql = "UPDATE `tnotes` SET `title` = '$title', `description`='$description' WHERE `tnotes`.`sno` = '$sno'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $update = true;
        }
    }
}
