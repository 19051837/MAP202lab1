<?php

function db_connect() {
   $dbhost = 'remotemysql.com';
	$dbname = 'V7alj7oO3k';
	$dbuser = 'V7alj7oO3k';
	$dbpass = 'bbWrEOORmP';

	
	try {
		$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
