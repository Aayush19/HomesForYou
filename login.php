<?php include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>HomesForYou Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="site-wrap">

      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->

      <div class="site-navbar"style="background-color: grey;">
          <div class="container py-1">
            <div class="row align-items-center">
              <div class="col-8 col-md-8 col-lg-4">
                <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>HomesForYou</strong></a></h1>
              </div>
              <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active">
                      <a href="index.php">Home</a>
                    </li>
                    <li><a href="buy.php">Buy</a></li>
                    <li><a href="rent.php">Rent</a></li>
                  <!---  <a href="properties.php">Properties</a> --->
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;margin-top: 150px;">
	<h4 class="card-title mt-3 text-center">Secure Login</h4>
	<p class="text-center">Welcome to HomesForYou Login Page</p>
	<form action="auth.php" method="post">
    <select class="form-control">
			<option selected=""> Select Login type</option>
			<option>Customer</option>
			<option>Admin</option>
			<option>Seller</option>
		</select>
    <br>
	    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="uname" class="form-control" placeholder="Email address" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Enter password" type="password">
    </div> <!-- form-group// -->

    <div class="form-group">
        <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
    </div> <!-- form-group// -->
    <p class="text-center">Don't Have an account? <a href="registration.php">Sign Up</a> </p>
</form>

</article>
</div> <!-- card.// -->

</div>
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About HomesForYou</h3>
              </div>

          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="buy.php">Buy</a></li>
                  <li><a href="rent.php">Rent</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>
                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div>
        </div>
      </div>
    </footer>
<!--container end.//-->
</body>
</html>
