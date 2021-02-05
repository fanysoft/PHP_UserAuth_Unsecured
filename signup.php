
<?php

require_once("db_connect_php7-get-db.php");

$username = $_GET["username"];
$password = $_GET["password"];
$created = date('Y-m-d H:i:s');


if (!empty($username) and !empty($password)) {

	// Check if exists already
	$result = $mysqli->query("SELECT * FROM user_auth_users WHERE username = '$username'");
	if($result->num_rows == 0) {

		// row not found, do stuff...
		$query2 = "INSERT INTO user_auth_users (`username`, `password`, `created`) VALUES ('$username', '$password', '$created')";
		$result2 = $mysqli->query($query2);

		echo "signup - new user created";

	} else {
		echo "signup - user already exists - action canceled";
	}

	$mysqli->close();

}else{
	echo "signup - user or/and password empty";
}


?>
