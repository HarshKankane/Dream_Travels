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
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Profile | Dream Travels.com</title>
            <?php
            include 'header.php';
         ?>
  </head>
  <body>
    <!--====== ABOUT CONTENT ==========-->
    <style>
          .tourz-search
          {

              position: relative;
              background-size: cover;
            background-image: url("bnr2.jpg"); no-repeat fixed center;
          }
    </style>
      <style>
      .v2-hom-search {
          background: url(../images/search/taxi.jpg) no-repeat;
          position: relative;
          padding: 100px 0px;
          background-size:cover;
      }
      .show{
      color:#e84118;
      font-size: 20px;
      }
      </style>
      <section >
        <form class="" action="index.html" method="post">
           <div class="rows inn-page-bg com-colo"style="background:#7f8fa6">
               <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title" style="background:-webkit-linear-gradient(left,#ffffff,#55E6C1)" >
	                  <div class="col-md-4 p2">
                       <div class="col-md-10 col-xs-12 b_packages" >
                         <div class="panel panel-default">
                           <div class="panel-body">
                         <div class="row homeform" >
                                    <ul style="list-style:none"> <li> <br> </li><li> <br> </li>
                                      <li><a href="myBooking.php" class="show"><i class="fa fa-drivers-license-o">&nbsp My Booking </i>  </a> </li>
                                     <li> <br> </li>
                                    <!--  <li><a href="booking.php" class="show"><i class="fa fa-edit">&nbsp Edit  Profile</i>  </a> </li> <li><br> </li> -->
                                      <li><a href="booking.php" class="show"><i class="fa fa-ticket ">&nbsp Book Your Ticket</i>  </a> </li> <li> <br> </li>
                                      <li><a href="logout.php" class="show"><i class="fa fa-sign-out ">&nbsp Log out</i>  </a> </li> <li> <br> </li>
                                      <li> <br> <br> </li><li> <br> <br>  </li>
                                    </ul>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>
                                <div class="col-md-8 col-sm-12">
                               <div class="panel panel-default" >
                                 <div class="panel-body" >
                                     <ul style="list-style:none"> <li>  </li>
                                       <h3 style="margin-left:150px"> Profile </h3>
                                       <!--<li style="color:green">
                                         <img src="" alt="" class="fa fa-user-circle" style="font-size:50px;" height="100px" width="150px" align="left" vspace='2'>
                              <br><br>   </li> -->
                              <div class="row">
                          <!--
                                   <div class="" style="">
                                           <img src="profilepic\up.png" alt="img not found" style="height: 100px; width:100px ;border-radius:5px;">
                                   </div> -->
                                   <div class="col-md-6" style="border:2px black solid;">

                                     <h4>Name :  &nbsp  &nbsp  &nbsp  &nbsp <?php echo $res['Name']; ?> </h4>
                                      <h4>User Id :  &nbsp  &nbsp  &nbsp  &nbsp<?php echo $res['User_Id']; ?></h4>
                                      <h4 class="text"> Mobile : &nbsp  &nbsp  &nbsp  &nbsp  <?php echo $res['mobile']; ?> </h4>
                                      <h4 class="text">Email :  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <?php echo $res['email']; ?> </h4>
                                      <h4 class="text">Password : &nbsp   <?php echo $res['password']; ?> </h4>
                                      <h4 class="text">User Type :  &nbsp  <?php echo $res['userType']; ?> </h4>
                                      <h4 class="text">Address : &nbsp  &nbsp&nbsp <?php echo $res['address']; ?> </h4>
                                            <li> <br> </li>  <br>
                                    <br>

                                   </div>
                                   <div class="col-md-4" style="border:2px black solid; margin-left:20px;">

                                      <img src="profilepic\up.png" alt="img not found" style="height: 200px; width:200px ;border-radius:5px;">
                                   </div>
                              </div>


                               </div>
                           </div>
                                <div class="pagination-container margin-top-20">
      <div class="dataTables_paginate paging_bootstrap pagination">
      </div>
      </div>
               </div>
           </div>

         </form>
       </section>
       <?php
        include 'footer.php';
        ?>
  </body>
</html>
