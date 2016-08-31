<?php
  require_once 'header.php';
  require_once 'functions.php';
?>

<div class="wrapper">

<link href="../css/allProducts.css" rel="stylesheet">
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
      <h3 class="page-header">Best Sellers in <?php echo $type; ?></h3>

          <!-- =========== BEST SELLERS ================ -->
          <div class="row placeholders">
            <div class="col-xs-12 col-sm-4 placeholder">
              <img src="../images/lotr.gif" width="100" height="100" class="img-responsive">
              <h4>The Lord of the Rings</h4>
              <span class="text-muted">J R R Tolkien</span>
            </div>
            <div class="col-xs-12 col-sm-4 placeholder">
              <img src="../images/lotr.gif" width="100" height="100" class="img-responsive">
              <h4>The Lord of the Rings</h4>
              <span class="text-muted">J R R Tolkien</span>
            </div>
            <div class="col-xs-12 col-sm-4 placeholder">
              <img src="../images/lotr.gif" width="100" height="100" class="img-responsive">
              <h4>The Lord of the Rings</h4>
              <span class="text-muted">J R R Tolkien</span>
            </div>
          </div>
          <!-- =========== END BEST SELLERS ================ -->



          <!-- =========== LIST OF BOOKS ================ -->
          <div class="panel panel-default">
            <div class="panel-heading">

              <h4>Results for Books: <?php echo $type; ?></h4>
            </div>
            <div class="panel-body">
              <form method="post">
              <label for="sort-by">Sort By</label>
              <select name ="sort-options" id="sort-options" onchange="this.form.submit();">
                <option value="Featured">Featured</option>
                <option value="Price: Low to High">Price: Low to High</option>
                <option value="Price: High to Low">Price: High to Low</option>
                <option value="Customer-review">Customer Review</option>
              </select>
            </form>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped">

              <tbody>
                
                <?php
                  require_once "dispBookList.php"
                ?>

              </tbody>

            </table>

          </div> <!--table responsive-->
          <!-- =========== END LIST OF BOOKS ================ -->

    </div>




  </div> <!--Row-->
</div> <!-- Container-fluid-->
</div> <!-- Wrapper -->

<?php
  require_once 'footer.php';
?>
