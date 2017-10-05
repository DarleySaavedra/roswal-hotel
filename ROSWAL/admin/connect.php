<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roswal_db";
	
	//$connection = mysql_connect($hostname, $username, $password);
	
	$connection = mysqli_connect($hostname, $username, $password, $dbname);
	
	if(!$connection) {
		echo "Database connection failed.";
	}
	/*$dbselect  = mysql_select_db($dbname);
	if(!$dbselect) {
		echo "Database selection failed.";
	}*/
	
	
?>