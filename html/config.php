<?php

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "customers";

	$conn = mysqli_connect($serverName, $userName, $password, $dbName);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>