<?php
	require_once(__DIR__.'/functions.php');
	$isbn = $_GET['isbn'];

	$query = "SELECT * FROM books WHERE isbn=$isbn";
  	$result = queryMysql($query);
  	$row = $result->fetch_array(MYSQLI_ASSOC);

  	header("Content-type: image/jpeg");
  	$s = $row['image'];
  	echo $row['title'];
  	echo '<img src="'.$s.'" alt="HTML5 Icon" width="150" height="200" ">';
?>