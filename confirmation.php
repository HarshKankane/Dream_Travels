
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Confirmation | Dream Travels.com</title>
  <?php include 'header.php';
  session_start();
  error_reporting(0);
  include("connection.php");
  $profile = $_SESSION['uid'];
  if(!$profile)
    header('location:login.php');
  $query = "SELECT * FROM bookings WHERE User_Id ='$profile'";
  $data =mysqli_query( $con,$query) ;
  $res = mysqli_fetch_assoc($data);
  ?>
</head>

<body>
  <!--====== ABOUT CONTENT ==========-->
<!-- Titlebar
================================================== -->
<section>
		<div class="form form-spac" style="background:#dff9fb">
			<div class="rows container">
				<div class="nf">Your booking has been confirmed</div>
				<div class="nf1 text-success"><i class="fa fa-check-circle"></i></div>
				<div class="links">
					<h4>Booking ID:<?php   echo $res['bid'];  ?> </h4>
          <h3 style="color:brown">Source:<?php  echo $res['src'];  ?> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp Destination: <?php  echo $res['dest'];  ?> </h3>
          <p>We would update you the status about this booking on your email and sms.</p>
          <p>If you have any query feel free to call us on: <strong> +918409989897</strong> </p>
				</div>
			</div>
		</div>
	</section>
  <?php include 'footer.php'; ?>
</body>
</html>
