<?php
$sql = "SELECT * FROM `tnotes`";
$fireq = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($fireq)) {
    echo '
<tr>
    <th scope="row">' . $row['sno'] . '</th>
    <td>' . $row['title'] . '</td>
    <td>' . $row['description'] . '</td>
    <td>Actions</td>
</tr>';
}
