<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ecommerce</title>

  <script type="text/javascript" src="../public/jquery/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>

	<link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
  </head>

  <body>

  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ecom Store</a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">


          <!-- ============================================== -->
           <!-- Dropdown, Input form and Search button-->
            <div class="navbar-form col-lg-6">
              <div class="input-group">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">Non Fiction</a></li>
                  </ul>
                </div><!-- /btn-group -->

                <input type="text" class="form-control" placeholder="Search">

                <span class="input-group-btn">
                  <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 
                  </button>
                </span>
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
           <!--END Dropdown, Input form and Search button-->
          <!-- ============================================== -->



          <form class="navbar-form navbar-right">
            <button type="submit" class="btn btn-success">Sign in</button>
            <button type="submit" class="btn btn-primary">Cart</button>
          </form>


        </div><!--/.navbar-collapse -->
      </div>
    </nav>


  </body>
</html>

