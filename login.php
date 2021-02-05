
<?php

require_once("db_connect_php7-get-db.php");

$username = $_GET["username"];
$password = $_GET["password"];
$created = date('Y-m-d H:i:s');


$result = $mysqli->query("SELECT * FROM user_auth_users WHERE username = '$username' and password = '$password'");
if($result->num_rows == 0) {
	echo "login - username and password does not match - NG";
	} else {
	echo "login - user and password match - OK";
}

$mysqli->close();


?>
