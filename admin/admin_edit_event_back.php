<?php
if (isset($_POST['search'])) {
    $s_name=$_POST['s_name'];
    require_once("../php_files/db_const.php");
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
# check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($mysqli, "SELECT * FROM events WHERE name LIKE'%{$s_name}%' OR location LIKE'%{$s_name}%' OR description LIKE'%{$s_name}%' ");


    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['starttime'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . '<a href="http://www.flagwall.com/admin/admin_edit_display.php?id=' . $row['id'] . '">Link' . "</a>" . "</td>";
        echo "</tr>";
    }


    mysqli_close($mysqli);
}
?>