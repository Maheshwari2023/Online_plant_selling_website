<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Indoor Plants</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<?php
    $con=mysqli_connect("localhost","root","","indoor_db")or die("Database Error!!");
    ?>
  <!-- header section strats -->
  <?php
include('header.php');
  ?>

  

  <section class="contact_section layout_padding" style="margin-top: -100px;">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Log In</h2>
      </div>
      <div class="row">
        <div class="col-md-3 px-0"></div>
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form action="login.php" method="POST">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" name="uname" placeholder="Your Username" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" name="pass" placeholder="Passworrd" />
                </div>
              </div>
              
              <div class="btn_box">
                <button type="submit" name="save">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="info_contact ">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Latur
                    </span>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call 8080960065
                    </span>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      maheshwari007@gmail.com
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="info_logo">
          <a class="navbar-brand" href="index.html">
            <span>
              Indoor Plants
            </span>
          </a>
        </div>
        <div class="social-box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
 <?php
 include('footer.php');
 ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
<?php
if(isset($_POST['save']))
{
  
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $res=mysqli_query($con,"select * from admin where uname='".$uname."' && pass='".$pass."'");
    $row=mysqli_fetch_row($res);



   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['admin']=$row[0];
    echo'
    <script>
   window.location.href="admin/index.php";
    </script>
    ';
    }

   

    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login.php";
    </script>
    ';
    }
}
?>