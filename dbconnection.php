<?php



function dbconnection(){
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "crud";

	$conn = mysqli_connect($host, $username, $password, $database);


	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}










?>