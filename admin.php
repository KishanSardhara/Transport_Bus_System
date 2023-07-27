<?php
session_start();
if(!isset($_SESSION['aname'])){
  header('location:registration/admin.php');
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
  <link href="img/bus3.jpg" rel="icon">
  <link href="img/bus3.jpg" rel="apple-touch-icon">

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
  <link rel="stylesheet" href="css/developers.css">

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
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="booking.php">Check Booking</a></li>
          <li><a href="bookingdetail.php">Journey Date</a></li>
          <li><a href="#"><?php echo $_SESSION['aname'];?></a></li>
          <li><a href="registration/logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Making <span>your Ride</span><br>happen!</h2>
      <div>
        <a href="registration/busdetail.php" class="btn-get-started scrollto">Add Bus Details</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/bus1.jpg');"></div>
      <div class="item" style="background-image: url('img/bus2.jpg');"></div>
      <div class="item" style="background-image: url('img/bus3.jpg');"></div>
      <div class="item" style="background-image: url('img/bus4.jpg');"></div>
      <div class="item" style="background-image: url('img/bus5.jpg');"></div>
      <div class="item" style="background-image: url('img/bus6.jpg');"></div>
      <div class="item" style="background-image: url('img/bus7.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
       <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>“The Impulse to Travel is one of the hopeful symptoms of life.”</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port1.jpg" class="portfolio-popup">
                <img src="img/port1.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port2.jpg" class="portfolio-popup">
                <img src="img/port2.jpg" alt="" style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port3.jpg" class="portfolio-popup">
                <img src="img/port3.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port4.jpg" class="portfolio-popup">
                <img src="img/port4.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port5.jpg" class="portfolio-popup">
                <img src="img/port5.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port6.jpg" class="portfolio-popup">
                <img src="img/port6.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port7.jpg" class="portfolio-popup">
                <img src="img/port7.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/port8.jpg" class="portfolio-popup">
                <img src="img/port8.jpg" alt=""style="height:350px;">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

     <section id="Partners" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Partners</h2>
          <p>With there Help and Corporation we make your travel full of Joy and Memorable</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/partner1.png" alt="">
          <img src="img/partners2.jpeg" alt="">
          <img src="img/partner3.jpg" alt="">
          <img src="img/partner4.jpg" alt="">
          <img src="img/partner5.png" alt="">
        </div>

      </div>
    </section>

    <!--==========================
      About Section
    ============================-->
    <!--==========================
     Developers
    ============================-->

    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Developers</h2>
          <p>Our team of experienced developers specializes in bulding websites using cutting-edge technologies and a customer-focused approach. With a proven track record of success, we prioritize customer feedback and continuously work to imrove the user experience. Our expertise in project management, design and quality assurance ensures that we deliver high quality websites that meet the needs of our clients. Trust us to build your next website and experience the difference our team can make.</p>
        </div>
      </div>


    <div class="circle-images">
      <div class="image">
        <img src="img/developers/kishan.png" alt="kishan" class="slide">
        <h3>Kishan Sardhara</h3>
        <p>Full-stack Web Developer</p>
      </div>
      <div class="image">
        <img src="img/developers/ridhdhi.jpg" alt="Ridhdhi" class="slide">
        <h3>Ridhdhi Sangani</h3>
        <p>Full-stack Web Developer</p>
      </div>
      <div class="image">
        <img src="img/developers/shubh.jpg" alt="Shubh" class="slide">
        <h3>Shubh Ranpara</h3>
        <p>Frontend Web Developer</p>
      </div>
      <div class="image">
        <img src="img/developers/tanvi.jpg" alt="Tanvi" class="slide">
        <h3>Tanvi Rathod</h3>
        <p>UX/UI Designer</p>
      </div>
      <div class="image">
        <img src="img/developers/ronak.jpg" alt="Ronak" class="slide">
        <h3>Ronak Siddhpura</h3>
        <p>Backend Web Developer</p>
      </div>
    </div>
    </section>
  
  </main>

  <!--==========================
    Footer
  ============================-->

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

</body>
</html>
