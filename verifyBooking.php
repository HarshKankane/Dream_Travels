<?php
  session_start();
  $con = mysqli_connect('localhost','root');
  $f=false; $p=false;
  if ($con) {
       mysqli_select_db($con,'dreamtravels');
        $source = $_POST["src"];
        $dest = $_POST["dest"];
        $a7 =  $_SESSION['uid'];
        $query = "INSERT INTO `bookings` (`src`, `dest`, `User_Id`) VALUES ('$source', '$dest', '$a7')";
            if(!mysqli_query($con,$query))
            {
              // echo $query;
              echo " not inserted";
            }
            else {
              $f=true;

            }
      }
      else {
        echo "DB connection not established";
      }
  mysqli_close($con);
  if($f)
    header("Location:confirmation.php");
  //  echo $src;
 ?>
