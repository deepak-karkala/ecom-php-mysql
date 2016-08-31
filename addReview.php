<?php
	require_once 'functions.php';

	$db_server = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	//mysql_select_db($dbname, $db_server)
	//	or die("Unable to select database: " . mysql_error());


	if( isset($_POST['name']) &&
		isset($_POST['review']))
	{
		$isbn = $_POST['isbn'];
		$username = $_POST['name'];
		$review = $_POST['review'];

		$query = "INSERT INTO reviews (review, isbn, username) VALUES ('$review', '$isbn', '$username')";

		if (!mysqli_query($db_server, $query))
			echo "INSERT failed: $query<br>" .
			mysqli_error() . "<br><br>";

	}
	header('Location: bookDetail.php?isbn='.$isbn);

	function get_post($var)
	{
		return mysqli_real_escape_string($_POST[$var]);
	}
?>