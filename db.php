<?php
	// function to create database connection
function db_connect() {
	
try {
		
			$serverName = "remotemysql.com";
			$userName = "V7alj7oO3k";
			$dbName ="V7alj7oO3k";
			$password = "bbWrEOORmP";
			$dsn = "mysql:host=$serverName;dbname=$dbName";
        	$con = new PDO($dsn, $userName, $password);
        return $con;
    } catch (PDOException $ex) {
	
        	echo "Error: ".$ex->getMessage();
        	exit;
    }
}

?>