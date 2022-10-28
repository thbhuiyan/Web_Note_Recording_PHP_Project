<?php
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    //delete the record
    $sql = "DELETE FROM `tnotes` WHERE `sno` = $sno";
    $exequte = mysqli_query($con, $sql);
    if ($exequte) {
        $delete = true;
    }
}
