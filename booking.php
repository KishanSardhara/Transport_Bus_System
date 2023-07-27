<?php
session_start();
if(!isset($_SESSION['aname'])){
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Transport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/footer.css">

<style>
  footer{
    margin-top:50px;
  }
</style>

</head>

<body id="body">

<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Tran<span>Sport</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="admin.php">Home</a></li>
          <li><a href="bookingdetail.php">Journey Date</a></li>
          <li><a href="#"><?php echo $_SESSION['aname'];?></a></li>
          <li><a href="registration/logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


<div id="booking" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Bus  Detail</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="bid" placeholder="Enter Bus Id"/>    
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger booking">Submit</div>
          </div>
        </div>
      </div>
    </div>
  <div class="col-md-3"></div>
</div>


  <div class="container-fluid mt-5" id="booked">
    <div class="card" >
      <h2 class="text-center ">Booking Bus Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Bus Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Booked Seat </h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Vacent Seat</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">From</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">To</h3>
          </div>
           <div class="col-md-2">
            <h3 class="text-center text-white">Journey Date</h3>
          </div>

        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="bresult"></div>
      </div>
    </div>
  </div>
 

  
  <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Tran<span>Sport</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>	
					<a href="#">Blog</a>
					<a href="#">About</a>	
					<a href="#">Faq</a>	
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Transport © 2023</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9512437553</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">transport@travel.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main1.js"></script>

</body>
</html>