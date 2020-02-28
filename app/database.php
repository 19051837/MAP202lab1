<?php

function db_connect() {
 //  $dbhost = 'remotemysql.com';
	$dbhost='salt.db.elephantsql.com';
	$dbname = 'plnhufvd';
	$dbuser = 'plnhufvd';
	$dbpass = 'nNscs9vrJcPMLNMGEsH-5sNQN8RDNGVx';

	
	try {
		$dbh = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
