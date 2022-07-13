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
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img style="height: 50px;width: 50px;margin-top: -20px;" src="plant_logo.jpg" alt="logo">
          <!-- <span style="color: green;font-size: 40px;"> 𝓘𝓷𝓭𝓸𝓸𝓻 𝓟𝓵𝓪𝓷𝓽𝓼</span> -->
          <span style="color: green;font-size: 40px;">ÏᑎᗪOOᖇ ᑭᒪᗩᑎTS </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#abt"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#plnt">Plants</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    We Sell The <br>
                    Best and Beautiful <br>
                    Indoor Plants
                  </h1>
                  <p>
                    We often don't think to buy plant online. But what if we tell you that you can now order the most beautiful plants right from home? We presents a broad range of Live Plants that can be bought online in India. 
                  </p>
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="plants\38in.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    We Sell The <br>
                    Best and Beautiful <br>
                    Indoor Plants
                  </h1>
                  <p>
                    We often don't think to buy plant online. But what if we tell you that you can now order the most beautiful plants right from home? We presents a broad range of Live Plants that can be bought online in India.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Read More
                    </a>
                    <a href="" class="btn-2">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="plants\35in.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    We Sell The <br>
                    Best and Beautiful <br>
                    Indoor Plants
                  </h1>
                  <p>
                    We often don't think to buy plant online. But what if we tell you that you can now order the most beautiful plants right from home? We presents a broad range of Live Plants that can be bought online in India. 
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Read More
                    </a>
                    <a href="" class="btn-2">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="plants\36in.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end slider section -->

  <!-- offer section -->

  <section class="offer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="plants\26in.png" alt="">
            
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="plants\29in.png" alt="">
            <!-- <div class="detail-box">             
            </div> -->
          </div>
          <div class="box offer-box3">
            <img src="plants\31in.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- product section -->

  <section class="product_section layout_padding" id="plnt">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Plants
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class="row">

        <?php

        $res=mysqli_query($con,"SELECT * FROM plant_table");
        while($row=mysqli_fetch_array($res))
        {
          echo'
        <div class="col-sm-6 col-lg-4" data-toggle="modal" data-target="#myModal'.$row[0].'">
          <div class="box">
            <div class="">
              <img src="admin/'.$row[7].'" style="height:320px;width:320px" class="img img-responsive" alt="">
            </div>
            <div class="detail-box">
              <span class="rating">
                <b>'.$row[1].'</b>
              </span>
              <a href="">
                '.$row[3].'
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>&#x20B9;</span> '.$row[5].'
                </h6>
              </div>
            </div>
          </div>
        </div>


<form action="index.php" method="POST">


  <div id="myModal'.$row[0].'" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


     
      <div class="modal-body">
                
      <div class="row">       
        <div class="col-sm-12 well" style="background-color: white">
        <form action="index.php" method="POST">

          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
              <label style="color:blue"><h3>Login</h3></label>
            </div>
          </div>

          <br>

          <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <input type="hidden" id="pname'.$row[0].'" name="pid" value='.$row[0].' class="form-control"  style="border-top: #0000;border-left: #0000;border-right: #0000; border-radius: 0px">
            </div>
          </div>

          <br>

          <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <input type="text" name="uname" class="form-control" placeholder="User Name" style="border-top: #0000;border-left: #0000;border-right: #0000; border-radius: 0px">
            </div>
          </div>

          <br>

          <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <input type="number" name="mob" class="form-control" placeholder="Mobile Number" style="border-top: #0000;border-left: #0000;border-right: #0000; border-radius: 0px">
            </div>
          </div>

          <br>

          <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" placeholder="Email" style="border-top: #0000;border-left: #0000;border-right: #0000; border-radius: 0px">
            </div>
          </div>

          <br>

          <div class="row" >
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <textarea name="address" class="form-control" placeholder="Address" style="border-top: #0000;border-left: #0000;border-right: #0000; border-radius: 0px"></textarea>
            </div>
          </div>
                    <br><br><br>

          
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="submit">Submit</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
                    
        </form>
        </div>
      </div>

      </div> 
 


         

      </div> 
      </div> 

  </div>  

</form>

        ';
 } 

?>
    
      </div>
    </div>
    <?php
    if(isset($_POST['submit'])) 
  {
    $uname = $_POST['uname'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $address = $_POST['address'];

      
        if(mysqli_query($con,"INSERT INTO enquiy VALUES('','".$uname."','".$mob."','".$email."','".$address."')"))
        {
          echo "
          <script>
          alert('Thank you!');
          window.location.href='index.php';
          </script>
          ";
        }
        else
        {
          echo "
          <script>
          alert('try again!');
          window.location.href='index.php';
          </script>
          ";
        }
  }
    ?>
  </section>


  <!-- end product section -->

  <!-- about section -->

  <section class="about_section layout_padding" id="abt">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="plants\ab4.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Indoor Plants is not only related with plants but also with feelings.<br>I am Maheshwari kanade Owner of Indoor plants.I have a team with 10 members.The Indoor Plant shop is located in Latur.<br>A very intersting story behind establishing the 'Indoor Plants Shop'.
              </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest From Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="plants\32in.png" alt="">
            </div>            
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="plants\15in.png" alt="">             
            </div>          
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <p>
          Even slightly believable.Reviews from verified buyers: 
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="plants\vaishnavi.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Vaishnavi Naikwade
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Beautiful plant! Looks fantastic in my space.
                        Excellent quality product and great service!<br>
                        Thank you!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="plants\shivendra2.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Shivendra Kanade
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        As always, plant is gorgeous and in great condition. The attached instruction sheets are invaluable in caring for my plants. I have bought multiple plants over the last 10 years from Indoor Plants and have not been disappointed. I finally learned how to care for my plants properly and they are thriving in my apartment.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Karuna Kamble
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        It was a great Christmas gift to my mother! The delivery service was incredibly punctual, and helpful. Thank you!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form action="">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Your Name" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Phone Number" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message" />
                </div>
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
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