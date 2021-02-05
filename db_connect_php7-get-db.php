<?php

$servername = "" ;
$username = "";
$pass = "";
$db="";


$mysqli = mysqli_connect($servername, $username, $pass, $db);

$mysqli->set_charset("utf8");
// echo "Initial character set: %s\n", $mysqli->character_set_name();

// Error
if ($mysqli->connect_errno) {

    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}


?>
