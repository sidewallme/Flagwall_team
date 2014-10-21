<?php
require_once("../php_files/db_const.php");
if (!isset($_POST['submit'])) {

} else {
## connect mysql server
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    # check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }
## query database
    # prepare data for insertion
    $name	= $_POST['name'];
    $date	= $_POST['date'];
    $starttime	= $_POST['starttime'];
    $endtime	= $_POST['endtime'];
    $location	= $_POST['location'];
    $sponsor	= $_POST['sponsor'];
    $contact		= $_POST['contact'];
    $email		= $_POST['email'];
    $type		= $_POST['type'];
    $registration		= $_POST['registration'];
    $freefood		= $_POST['freefood'];
    $description		= $_POST['description'];
    $source		= $_POST['source'];


    # check if username and email exist else insert

        # insert data into mysql database
        $sql = "INSERT  INTO `events` (`id`,`name`, `date`, `starttime`,`endtime`, `location`, `sponsor`, `contact`,`email`,`type`,`registration`,`freefood`, `description`,`source`)
				VALUES (NULL, '{$name}','{$date}', '{$starttime}','{$endtime}', '{$location}', '{$sponsor}', '{$contact}', '{$email}', '{$type}', '{$registration}', '{$freefood}', '{$description}', '{$source}')";

        if ($mysqli->query($sql)) {
            echo "New Record has id ".$mysqli->insert_id;

            //echo  "<script>window.location     =\"http://www.cnblogs.com/pige\";</script>";

        } else {
            echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
            //exit();
        }


    //exit;
}
?>
