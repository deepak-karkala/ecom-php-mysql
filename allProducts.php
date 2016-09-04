<?php
  require_once(__DIR__.'/header.php');
  require_once(__DIR__.'/functions.php');
?>

<div class="wrapper">

<link href="css/allProducts.css" rel="stylesheet">
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>Categories</li>
            <ul class="nav-sidebar-sidebar">
              <li><a href="?type=All Categories">All Categories</a></li>
              <li><a href="?type=Fiction">Fiction</a></li>
              <li><a href="?type=Science">Science</a></li>
            </ul>
          </ul>
          <!-- Get the Book type in PHP-->
          <?php
            $type = array('All Categories', 'Fiction', 'Science');
            $type = 'All Categories';
            if (isset($_GET['type'])) 
            {
              $type = $_GET['type'];
            }
          ?>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!-- =========== LIST OF BOOKS ================ -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Results for Books: <?php echo $type; ?></h3>
            </div>

            <div class="panel-body">
              <form method="post">
                <h4>
                <label for="sort-by">Sort By</label>
                <select name ="sort-options" id="sort-options" onchange="this.form.submit();">
                  <option value="Featured">Featured</option>
                  <option value="Price: Low to High">Price: Low to High</option>
                  <option value="Price: High to Low">Price: High to Low</option>
                  <option value="Customer-review">Customer Review</option>
                </select>
                </h4>
              </form>
            </div>

          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <?php
                  require_once(__DIR__.'/dispBookList.php');
                ?>
              </tbody>
            </table>
          </div> <!--table responsive-->
          <!-- =========== END LIST OF BOOKS ================ -->


          <!-- =========== BEST SELLERS ================ -->
          <h3 class="page-header">Best Sellers in All Categories</h3>
          <div class="row placeholders">
            <div class="col-xs-12 col-sm-4 placeholder">
              <a href="bookDetail.php?isbn=1"><img src="../images/lotr.gif" width="120" height="120" class="img-responsive">
              <h4>The Lord of the Rings</h4></a>
              <span class="text-muted">J R R Tolkien</span>
            </div>
            <div class="col-xs-12 col-sm-4 placeholder">
              <a href="bookDetail.php?isbn=3"><img src="ta.jpg" width="120" height="120" class="img-responsive">
              <h4>The Alchemist</h4></a>
              <span class="text-muted">Paulo Coelho</span>
            </div>
            <div class="col-xs-12 col-sm-4 placeholder">
              <a href="bookDetail.php?isbn=8"><img src="syaj.jpg" width="120" height="120" class="img-responsive">
              <h4>Surely you're joking, Mr. Feynman!</h4></a>
              <span class="text-muted">Richard P. Feynman</span>
            </div>
          </div>
          <!-- =========== END BEST SELLERS ================ -->


    </div>




  </div> <!--Row-->
</div> <!-- Container-fluid-->
</div> <!-- Wrapper -->

<?php
  require_once 'footer.php';
?>
