
<?php
  session_start();
  error_reporting(0);
  include("connection.php");
  $profile = $_SESSION['uid'];
  if(!$profile)
    header('location:login.php');
  $query = "SELECT * FROM signup WHERE User_Id ='$profile'";
  $data =mysqli_query( $con,$query) ;
  $res = mysqli_fetch_assoc($data);
  $query1 = "SELECT 'bid' FROM bookings WHERE User_Id ='$profile'";
  $data1 =mysqli_query( $con,$query1) ;
  $res1 = mysqli_fetch_assoc($data1);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>myBooking | Dream Travels.com</title>
    <?php include 'header.php'; ?>
  </head>

  <body>
    <div class="container row">

      <!-- booking options section starts-->


      <div class="col-md-2" style="border:#dfe4ea 2px solid; background:#dfe4ea;">
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\DT1.png" alt="" />Bus</a>
                </li>
              </ul>
              </div>
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\DT3.png" alt="" /> e-Rickshaw</a>
                </li>
              </ul>
              </div>
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\DT4.png" alt="" /> Auto</a>
                </li>
              </ul>
              </div>
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\DT5.png" alt="" /> Taxi</a>
                </li>
              </ul>
              </div>
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\Dt6.png" alt="" /> Cab</a>
                </li>
              </ul>
              </div>
              <div class="tourz-hom-ser" style="height:150px;">
              <ul>
                <li>
                    <a href="booking.php"
                        class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img
                            src="images\DT5.png" alt="" />Scorpio</a>
                </li>
              </ul>
              </div>
      </div>
  <!-- booking options section end -->

    <!-- About Contents -->

    <div class="col-md-10">
          <div class="" style="color:#c0392b" >
            <h1> Booking Details </h1>
          </div>

          <div class="" style="border:1px solid #dfe4ea; height:150px;">
                  <h4>User Id :  &nbsp  &nbsp  &nbsp  &nbsp<?php echo $res['User_Id']; ?></h4>
                  <h4>Booking Id :  &nbsp  &nbsp  &nbsp  &nbsp
                        <?php
                        while ($row=mysqli_fetch_array($res)) {
                          $w= $row[0];
                          echo $w;
                       }
                          //echo $res1['bid'];
                         ?></h4>
          </div>
    </div>



      <!-- Contents end -->

    </div>
  <?php include 'footer.php'; ?>
  </body>
</html>
