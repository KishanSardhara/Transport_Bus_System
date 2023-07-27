<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>

    <!-- Font Icon -->
    <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

<!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <!-- ==========================
    Header
  ============================-->
  <div class="sticky-wrapper" id="header-sticky-wrapper" style="124px">
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Tran<span>Sport</span></a></h1></span>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a width="100px"><img src="img/buslogo.jpeg" alt="logo" title="Travelling" /> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
          <li class="menu-active"><a href="../index.php">Home</a></li>
          <li><a href="login.php">login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  </div>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Admin</h2>
                     <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="psw" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="alogin" id="submit" class="form-submit submit" value="Log In"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>