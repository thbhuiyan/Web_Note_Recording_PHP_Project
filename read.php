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
    <button class="edit btn btn-sm btn-success" id=' . $row["sno"] . '>Edit</button>
    <br>
    <button class="delete btn btn-sm btn-warning" id=d' . $row["sno"] . '>Delete</button>
    </td>
</tr>';
}
