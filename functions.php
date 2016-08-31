<?php
	$dbhost = 'us-cdbr-iron-east-04.cleardb.net';
	$dbname = 'heroku_a6277021f19b465';
	$dbuser = 'bedaefb56bd440';
	$dbpass = '9342281a';

	$connection = new mysqli($dbost, $dbuser, $dbpass, $dbname);
	if ($connection->connect_error) die($connection->connect_error);

	function queryMysql($query)
	{
		global $connection;
		$result = $connection->query($query);
		if (!result) die($connection->error);
		return $result;
	}
/*
	function sanitizeString($var)
	{
		global $connection;
		$var = strip_tags($var);
		$var = htmlentities($var);
		$var = stripslashes($var);
		return $connection->mysql_real_escape_string($var);
	}
*/
?>