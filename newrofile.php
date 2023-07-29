<?php
  session_start();
  error_reporting(0);
  include("connection.php");
  $profile = $_SESSION['uid'];
  if($profile == true)
  {

  }
  else {
    header('location:login.php');
  }
  $query = "SELECT * FROM signup WHERE User_Id ='$profile'";
  $data =mysqli_query( $con,$query) ;
  $res = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include 'header.php';
     ?>
    <style media="screen">
        *{
           margin:0;
           padding:0;
         }
         .centre-div{
           position: absolute;
           top: 50%;
           left:50%;
           transform: translate(-50%,-50%);
          }
          .heading
           {
             width: 100%;
             line-height: 80px;
             font-size: 1.4rem;
             background: -webkit-linear-gradiant(left,#0072ff,#8811c5);
           }
    </style>
  </head>
  <body>
    <header>
      <div class="container centre-div">
            <div class="heading text-centre text-uppercase text-black ">name</div>
            <div class="container row">
                <div class="profile-form">
                    <form class="" action=" " method="post">
                        <div class="form-group">

                      <h3>Name : <?php echo $res['Name']; ?> </h3>
                       <h3>User Id : <?php echo $res['User_Id']; ?></h3>
                       <h3 class="text"> Mobile : <?php echo $res['mobile']; ?> </h3>
                       <h3 class="text">Email : <?php echo $res['email']; ?> </h3>
                       <h3 class="text">Password : <?php echo $res['password']; ?> </h3>
                       <h3 class="text">User Type : <?php echo $res['userType']; ?> </h3>
                       <h3 class="text">Address : <?php echo $res['address']; ?> </h3>
                     <br>
                </div>
              </form>
            </div>
        </div>
      </div>
    </header>

  </body>
  <?php
      include 'footer.php';
   ?>
</html>
