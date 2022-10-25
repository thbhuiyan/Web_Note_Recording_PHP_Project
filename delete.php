<?php
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];

    //delete the record
    $sql = "DELETE FROM `tnotes` WHERE `sno` = $sno";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $delete = true;
    }
}
