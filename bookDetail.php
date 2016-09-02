<?php
  require_once(__DIR__.'/header.php');
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

  $query = "SELECT * FROM books WHERE isbn=$isbn";
  $result = queryMysql($query);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $title = $row['title'];
  $price = $row['price'];
  $author = $row['author'];
  $rating = $row['rating'];
  $about_book = $row['about_book'];
  $about_author = $row['about_author'];
?>

<div class="wrapper">
<link href="css/allProducts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

  <div class="container-fluid">
  	<div class="row">


  		<div class="col-sm-3 col-md-2 sidebar">
          <!--<img src="images/lotr.gif" width="500" height="800" class="img-responsive">-->
          <!--<?php //include(__DIR__.'/getImage.php'); ?>-->
          <!--<img src="getImage.php" width="500" height="800" class="img-responsive">-->
    	</div>


    	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      		<h2 class="page-header"><?php echo $title; ?></h2>
      		<div class="book-details">
      			<h5 class="author">Author: <?php echo $author; ?></h5>
      			<p class="price">Price: $<?php echo $price; ?></p>
      			<p class="rating">Rating: <?php echo $rating; ?>/5</p>
      		</div>

      		<div class="book-button-add-cart">
				<button type="button" class="btn btn-success" disabled="disabled">Add to Cart</button><br>
			</div>
			<hr>


			<!-- ============================Add review form =====================-->
      		<div class="book-button-add-review">
				<h4>Add a Review</h4>
				<h6>Kindly add a review, if you have read this book</h6>
				<form class="form-horizontal" method="post" action="addReview.php">
				  <input type='hidden' name='isbn' value='<?php echo "$isbn";?>'/>	
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class="form-control" placeholder="Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Review</label>
				    <div class="col-sm-10">
				      <textarea type="text" name="review" class="form-control" rows="3" placeholder="Review"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary">Add a Review</button>
				    </div>
				  </div>
				</form>

				<?php
					//require_once "addReview.php";
				?>
			</div>
			<!-- ================================================================ -->
			<hr>

			<div class="cust-reviews">
				<h4>Customer Reviews</h4>
				<!--<?php require_once(__DIR__.'/dispReview.php'); ?>-->
			</div>



      		<hr>
			<div class="book-reviews">
				<h4>About the Book</h4>
				<p><?php echo $about_book;?></p>
				<hr>
				<h4>About the Author</h4>
				<p><?php echo $about_author;?></p>
				<hr>
				<h4>Product Details</h4>
				<ul>
					<li><strong>Hardcover:</strong> 400 pages</li>
					<li><strong>ISBN: </strong> &nbsp <?php echo $isbn;?></li>
					<li><strong>Publisher:</strong> Best Publishers, 3rd Edition (Dec 2013)</li>
					<li><strong>Language:</strong> English</li>
					<li><strong>Product Dimensions:</strong> 5.1 x 1.1 x 8 inches</li>
					<li><strong>Shipping Weight:</strong> 6.4 ounces</li>

				</ul>
			</div>
			<hr>
			<div class="book-alsoBrought">
				<h4>Customers Who Bought This Item Also Bought</h4>
			</div>
			<hr>
      	</div>


  	</div>
  </div>
</div>


<?php
  require_once 'footer.php';
?>
