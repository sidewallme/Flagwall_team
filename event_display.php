<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FlagWall - Illinois Event Recommendation system</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include 'shared_bar.php';
?>

<div class="jumbotron">
    <div class="container"  style="width:70%;margin:0 auto; align-self: center">

        <p></p>

            <table id="myTable" class="table table-striped">
                <tbody>
                <!--GENERATORS!!!!!!-->

                <?php
                $id=$_GET['id'];
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

                $result = mysqli_query($mysqli, "SELECT * FROM events WHERE id= $id ");


                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Name</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Date</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Start Time</td>";
                    echo "<td>" . $row['starttime'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>End Time</td>";
                    echo "<td>" . $row['endtime'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Location</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Sponsor</td>";
                    echo "<td>" . $row['sponsor'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Contact</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Email</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Type</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "</td>";

                    echo "<tr>";
                    echo "<td>Registration</td>";
                    echo "<td>" . $row['registration'] . "</td>";
                    echo "</td>";

                    echo "<tr>";
                    echo "<td>Free Food</td>";
                    echo "<td>" . $row['freefood'] . "</td>";
                    echo "</td>";

                    echo "<tr>";
                    echo "<td>Description</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "</td>";

                    echo "<tr>";
                    echo "<td>Source</td>";
                    echo "<td>" . $row['source'] . "</td>";
                    echo "</td>";

                }






                ?>





                </tbody>
            </table>

    </div>
</div>



</body>
</html>
