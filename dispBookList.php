<?php
  echo "<h4>Sorted by: &nbsp &nbsp" . $_POST['sort-options'] . "</h4>";

  //require_once('functions.php');
  require_once(__DIR__.'/functions.php');

  /*
  $dbhost = 'us-cdbr-iron-east-04.cleardb.net';
  $dbname = 'heroku_a6277021f19b465';
  $dbuser = 'bedaefb56bd440';
  $dbpass = '9342281a';


  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);
  echo "<h4>Sorted by: &nbsp &nbsp" . $_POST['sort-options'] . "</h4>";

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!result) die($connection->error);
    return $result;
  }
  */

  
  $query = "SELECT * FROM books";

  // ================================= //
  //Filter by book type
  if ($_GET['type'] == 'Fiction')
  {
    $query .= " WHERE category='fiction'";
  }
  elseif ($_GET['type'] == 'Science')
  {
    $query .= " WHERE category='science'";
  }
  // ================================= //

  // ================================= //
  // Sort by options 
  if ($_POST['sort-options'] == 'Price: Low to High')
  {
    $query .= " ORDER BY price";
  }
  elseif ($_POST['sort-options'] == 'Price: High to Low')
  {
    $query .= " ORDER BY price DESC";
  }
  elseif ($_POST['sort-options'] == 'Customer-review')
  {
    $query .= " ORDER BY rating DESC";
  }
  // ================================= //

  echo $query;
  $result = queryMysql($query);
  echo $query;

  $num = $result->num_rows;
  echo $num;
  for ($j=0; $j<$num; ++$j)
  {
    echo "<tr>";
    //echo "<td><img src=\"../images/lotr.gif\" width=\"120\" height=\"160\"></td>"; 
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $isbn = $row['isbn'];
    $img = $row['image'];
    echo '<td><img src="'.$img.'" alt="HTML5 Icon" width="120" height="160" "></td>';
    echo "<td class=\"book-details\">". 
         "<h3><a class=\"book-title\" href=\"bookDetail.php?isbn=$isbn\">" . $row['title'] . "</a></h3>" . 
         "<h4>By: " . $row['author'] . "</h4>" .
         "<h5>Price: $" . $row['price'] . "<br>" .
         "Rating: " . $row['rating'] . "</h5></td>";
    echo "<td>Free Shipping<br>Order Now!</td>";
    echo "</tr>";


  }
                  
?>                