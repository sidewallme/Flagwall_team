<?php
$DBServer = '50.62.209.88:3306'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'cs411admin';
$DBPass   = 'xusuqun2008';
$DBName   = 'cs411_flagwall';
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
//if($conn)   echo "ok";
// check connection
if ($conn->connect_error) {
    trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}
?>