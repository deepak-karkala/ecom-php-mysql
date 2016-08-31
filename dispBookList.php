<?php
  echo "<h4>Sorted by: &nbsp &nbsp" . $_POST['sort-options'] . "</h4>";

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


  $result = queryMysql($query);

  $num = $result->num_rows;
  for ($j=0; $j<$num; ++$j)
  {
    echo "<tr>";
    echo "<td><img src=\"../images/lotr.gif\" width=\"120\" height=\"160\"></td>"; 
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $isbn = $row['isbn'];
    echo "<td class=\"book-title\">". 
         "<a href=\"bookDetail.php?isbn=$isbn\">" . $row['title'] . "</a><br>" . 
         "By: " . $row['author'] . "<br>" .
         "Price: $" . $row['price'] . "<br>" .
         "Rating: " . $row['rating'] . "</td>";
    echo "<td>Free Shipping<br>Order Now!</td>";
    echo "</tr>";


  }
                  
?>                