<?php
  //require_once(__DIR__.'/functions.php');
  $dbhost = 'us-cdbr-iron-east-04.cleardb.net';
  $dbname = 'heroku_a6277021f19b465';
  $dbuser = 'bedaefb56bd440';
  $dbpass = '9342281a';

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!result) die($connection->error);
    return $result;
  }



  $isbn = $_GET['isbn'];
  $query = "SELECT * FROM reviews where isbn=$isbn";
  $result = queryMysql($query);
echo $query;
  $num = $result->num_rows;
  for ($j=0; $j<$num; ++$j)
  {
    //echo "<td><img src=\"../images/lotr.gif\" width=\"120\" height=\"160\"></td>"; 
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $isbn = $row['isbn'];



    echo 
	"<div class=\"panel panel-default\">
	  <div class=\"panel-heading\">
	    <h3 class=\"panel-title\">" . $row['username'] . "</h3>
	  </div>
	  <div class=\"panel-body\">" .
	    $row['review'] .
	  "</div>
	</div>";
	
    //echo "<>" . $row['username'] . $row['review'] . "</p>"; 
  }
?>
