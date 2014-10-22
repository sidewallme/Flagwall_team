
<?php
require_once("../php_files/db_const.php");
if (!isset($_POST['submit'])) {

}else{
## connect mysql server
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306);
    # check connection
    if ($mysqli->connect_errno) {
        echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
        exit();
    }
## query database
    # prepare data for insertion
    $name	= $mysqli->real_escape_string($_POST['name']);
    $date	= $mysqli->real_escape_string($_POST['date']);
    $starttime	= $mysqli->real_escape_string($_POST['starttime']);
    $endtime	= $mysqli->real_escape_string($_POST['endtime']);
    $location	= $mysqli->real_escape_string($_POST['location']);
    $sponsor	= $mysqli->real_escape_string($_POST['sponsor']);
    $contact		= $mysqli->real_escape_string($_POST['contact']);
    $email		= $mysqli->real_escape_string($_POST['email']);
    $type		= $mysqli->real_escape_string($_POST['type']);
    $registration= $mysqli->real_escape_string($_POST['registration']);
    $freefood= $mysqli->real_escape_string($_POST['freefood']);
    $description= $mysqli->real_escape_string($_POST['description']);
    $source= $mysqli->real_escape_string($_POST['source']);


    # check if username and email exist else insert

        # insert data into mysql database

        $sql = "INSERT  INTO `events` (`id`,`name`, `date`, `starttime`,`endtime`, `location`, `sponsor`, `contact`,`email`,`type`,`registration`,`freefood`, `description`,`source`)
				VALUES (NULL, '{$name}','{$date}', '{$starttime}','{$endtime}', '{$location}', '{$sponsor}', '{$contact}', '{$email}', '{$type}', '{$registration}', '{$freefood}', '{$description}', '{$source}')";

        if ($mysqli->query($sql)) {
            echo '<div class="alert alert-success" role="alert">
                You have succesfully added event:'
                .$mysqli->insert_id. '</div>';
            echo '<div class="alert alert-success" role="alert">
                <a href="http://Flagwall.com/admin/admin_update_event.php">Click Here to Add another Event!</a></div>';

            //echo  "<script>window.location     =\"http://www.cnblogs.com/pige\";</script>";

        } else {
            echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
            //exit();
        }


    //exit;
}
?>
