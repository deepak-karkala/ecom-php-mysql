<?php
	require_once(__DIR__.'/header.php');
?>

	    <!-- Carousel
    ==================================================================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
  
        <div class="item active">
          <!--<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">-->
          <img class="first-slide" src="library_panorama.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ecommerce.</h1>
              <p>One stop solution for all the top books in fiction and science categories.</p>
              <p><a class="btn btn-lg btn-primary" href="allProducts.php" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <!--<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">-->
          <img class="second-slide" src="hobbit.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Trending now</h1>
              <p>Check out the latest releases in all the categories</p>
              <p><a class="btn btn-lg btn-primary" href="allProducts.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <!--<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">-->
          <img class="third-slide" src="library_panorama3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ecommerce</h1>
              <p>Shop here to get the best deals on fiction and science books.</p>
              <p><a class="btn btn-lg btn-primary" href="allProducts.php" role="button">View all products</a></p>
            </div>
          </div>
        </div>



      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->  	
    <!-- ==================================================================================================== -->

    <div class="container-fluid">
    <div class="row">

   	  <div class="col-md-3">
   	  	<div class="col-md-12 hp1">
   	  		<h3>Welcome</h3>
   	  		<p>Sign in for the best experience</p>
   	  		<button type="button" class="btn btn-warning btn-block" disabled="disabled">Sign in securely</button>
   	  		<div class="hp11">
   	  		  <hr>
   	  		  <p>New to Ecommerce? <a href="allProducts.php?type=All Categories"> Start here</a></p>
   	  		</div>
   	  	</div>
   	  </div>

   	  <div class="col-md-3">
   	  	<div class="col-md-12 hp2">
   	  		<h4>Popular departments</h4>
   	  		<a href="allProducts.php?type=Fiction"><img class="img-circle" src="../images/fiction2.jpg" width="120" height="120"></a>
   	  		<a href="allProducts.php?type=Fiction">Fiction</a><br><br>
   	  		<a href="allProducts.php?type=Science"><img class="img-circle" src="../images/science.png" width="120" height="120"></a>
   	  		<a href="allProducts.php?type=Science">Science</a>
   	  		<div class="hp21">
   	  		  <hr>
   	  		  <a href="allProducts.php">Shop all departments</a>
   	  		</div>
   	  	</div>
   	  </div>

   	  <div class="col-md-3">
   	  	<div class="col-md-12 hp3">
   	  		<h3>Trending today</h3>
          <a href="bookDetail.php?isbn=5"><img class="img-thumbnail" src="tkmb.jpg" width="180" height="280"></a><br>
          <hr>
          <a href="bookDetail.php?isbn=5">To Kill A Mocking Bird</a>
   	  	</div>
   	  </div>

   	  <div class="col-md-3">
   	  	<div class="col-md-12 hp4">
   	  		<h3>Deals of the day</h3>
          <a href="bookDetail.php?isbn=7">A Brief History Of Time</a><br>
          <a href="bookDetail.php?isbn=7"><img class="img-thumbnail" src="bht.jpg" width="140" height="240"></a>
          <h5>$ 170.00 (30% off)</h5>
          <hr>
   	  		<div class="hp41">
   	  		  <a href="allProducts.php">Shop all deals</a>
   	  		</div>
   	  	</div>
   	  </div>

   	</div>
    </div>


<?php
	require_once 'header.php';
?>
