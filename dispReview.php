<?php
  require_once 'functions.php';

  $isbn = $_GET['isbn'];
  $query = "SELECT * FROM reviews where isbn=$isbn";
  $result = queryMysql($query);

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
