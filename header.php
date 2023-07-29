<?php
  session_start();
  error_reporting(0);
?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
  <!--== META TAGS ==-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <base href="http://localhost/Dream Travels/">

  <!-- FAV ICON -->
  <link rel="shortcut icon" href="images\logo (4).png">
  <!-- GOOGLE FONTS -->
  <meta name="description" content="#" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Contact us | DreamTravels.com" />
  <meta property="og:description" content="#" />
  <meta property="og:url" content="contactUs.php" />

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

  	<!--== ALL CSS FILES ==-->

  <link rel="stylesheet" href="assets/style.css">

  <link rel="stylesheet" href="assets/bootstrap.css">
  <link rel="stylesheet" href="assets/mob.css">
  <link rel="stylesheet" href="assets/animate.css">
  <link rel="stylesheet" href="assets/date.css">
</head>
    <div id="wrapper">
        <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <script>var strings = "";</script>

    <!--      ====== MOBILE MENU ========== -->
         <section class="mob-top">
             <div class="mob-menu">
             <div class="mob-head-left"><a href="index.php"><img src="images\logo (4).png" alt="Logo"> </a> </div>
             <div class="mob-head-right"> <a href="#"><i class="fa fa-bars mob-menu-icon" aria-hidden="true"></i></a> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
             <div class="mob-menu-slide">
             <ul class='top-menu'>
               <li class="active"><a href="index"><i class="fa fa-home fa-2x"></i></a> </li>
               <li><a href="aboutUs.php">About us </a></li>
            </ul>
            <h4>Vehicles</h4>
            <ul class='top-menu'>
                 <li><a href="booking.php">Bus</a> </li>
                 <li><a href="booking.php">e-Rickshaw</a> </li>
                 <li><a href="booking.php">Taxi</a> </li>
                 <li><a href="booking.php">Cab</a> </li>
                 <li><a href="booking.php">Auto</a> </li>
            </ul>
            <ul class='top-menu'>
                <li><a href="corporate.php">Corporate</a> </li>
                <li><a href="contactUs.php">Contact Us</a> </li>
                <?php
                  if(isset($_SESSION['uid'])){ ?>
                    <li class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#"><?php echo $_SESSION['uid']; ?><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="profile.php">My Profile</a> </li>
                        <li><a href="logout.php">Logout </a> </li>
                      </ul>
                    </li>
                  <?php
                    } else {
                  ?>
                  <li class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#">My account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="login.php">Login </a> </li>
                      <li><a href="signUp.php"> Sign up </a> </li>
                    </ul>
                  </li>
                <?php } ?>

    						<!-- <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Accounts<span class="caret"></span></a>
    							<ul class="dropdown-menu">
    								<li><a href="login.php"></i> Login </a> </li>
    								<li><a href="signUp.php"> Sign up </a> </li>
    							</ul>
    						</li> -->
          </ul>
        </div>
      </div>
    </div>
    </section>

    <!--====== END MOBILE MENU ==========-->



    <!--====== TOP HEADER ==========-->
    <section>
          <div class="rows head affix-top affixok" data-spy="affix" data-offset-top="120">
          <div class="container">
          <div>
          <div class="col-md-6 col-sm-12 col-xs-12 head_right head_right_all">
            <ul>
              <li><a href="tel:+918409989897">Call us: &nbsp+918409989897</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 head_right2 head_right_all foot-social2 ">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                      </ul>
          </div>
          </div>
          </div>
          </div>
    </section>


    <!--====== NAVIGATION MENU ==========-->
    <section>
      <div class="rows main_menu " data-spy="affix" data-offset-top="120" >
        <div class="container res-menu">

          <nav class="navbar navbar-inverse" >
            <div>
              <!-- Brand and toggle get grouped for better mobile display(MOBILE MENU) -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img src="images\logo (4).png" alt="" class="mob_logo" /> </div>
              <!-- NAVIGATION MENU -->
              <div class="col-md-4 col-sm-12 col-xs-12 head_left">
              <a href="index.php"><img src="images\logo (4).png" alt="">
              </a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php"><i class="fa fa-home "></i></a> </li>

                  <li><a href="aboutUs.php">About us</a> </li>

                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="booking.php"><i class="fa fa-bus"></i> Bus </a> </li>
                      <li><a href="booking.php"><i class="fa fa-cab"></i> Cab </a> </li>

                      <li><a href="booking.php"> <i class="fa fa-bus"></i> e-Rickshaw </a> </li>
                      <li><a href="booking.php"><i class="fa fa-auto-rickshaw"></i> Auto</a> </li>
                      <li><a href="booking.php"><i class="fa fa-taxi"></i> Taxi</a> </li>
                      <li><a href="booking.php"><i class="fa fa-car"></i>Scorpio</a> </li>

                    </ul>
                  </li>

                  <li><a href="corporate.php">Corporate</a> </li>

                  <li><a href="contactUs.php">Contact Us</a> </li>
                  <?php
                    if(isset($_SESSION['uid'])){ ?>
                    	<li class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#"  style="font-size:22px; color:green"> <b class="fa fa-user">&nbsp<?php echo $_SESSION['uid']; ?></b> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="profile.php"><span class="fa fa-user">&nbsp</span>My Profile</a> </li>
                          <li><a href="logout.php"> <span class="fa fa-sign-out"></span> Logout </a> </li>
                        </ul>
                      </li>
                    <?php
                      } else {
                    ?>
    							<li class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#">My account <span class="caret"></span></a>
    								<ul class="dropdown-menu">
    									<li><a href="login.php">Login </a> </li>
    									<li><a href="signUp.php"> Sign up </a> </li>
    								</ul>
                  </li>
                    <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
