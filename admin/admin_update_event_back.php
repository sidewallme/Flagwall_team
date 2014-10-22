<?php
function safe($value){
    return mysql_real_escape_string($value);
}
?>
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
    $name	= safe($_POST['name']);
    $date	= safe($_POST['date']);
    $starttime	= safe($_POST['starttime']);
    $endtime	= safe($_POST['endtime']);
    $location	= safe($_POST['location']);
    $sponsor	= safe($_POST['sponsor']);
    $contact		= safe($_POST['contact']);
    $email		= safe($_POST['email']);
    $type		= safe($_POST['type']);
    $registration= safe($_POST['registration']);
    $freefood= safe($_POST['freefood']);
    $description= safe($_POST['description']);
    $source= safe($_POST['source']);


    # check if username and email exist else insert

        # insert data into mysql database
        mysql_query("set names 'utf8'");
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
