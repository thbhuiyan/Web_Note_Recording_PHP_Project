<?php
$sql = "SELECT * FROM `tnotes`";
$fireq = mysqli_query($con, $sql);
$sno = 0;
while ($row = mysqli_fetch_assoc($fireq)) {
    $sno++;
    echo '
<tr>

    <th scope="row">' . $sno . '</th>
    <td>' . $row['title'] . '</td>
    <td>' . $row['description'] . '</td>
    <td>
    <button class="edit btn btn-sm btn-primary">Edit</button>
    <br><button href="/del">Delete</a></td>
</tr>';
}
