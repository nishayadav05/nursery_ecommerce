<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Titel here</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
<!--
.style2 {color: #000040}
-->
    </style>
</head>

<body>
    <!-- Topbar Start -->
         <?php require_once("header.php");?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">GARDEN</span>GALLERY</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>        </button>
        <?php require_once("menu.php");?>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                  <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">                  </div>
              </div>
                <div class="carousel-item">
                  <img src="img/carousel-1.jpg" alt="Image" class="w-100">
                  <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
     
    <!-- Banner Start -->


    <!-- About Start -->
	<div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img class="img-fluid mt-auto mx-auto" src="img/about.png">                    </div>
                </div>
              <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">We Produce Many Types of Gardening Products For Your Garden</h1>
                    </div>
                  <p class="mb-4 style2">It is a website that is use for online buy and purchase nursery products. Nurseries, the place that sell planets and garden supplies sometimes find it hard to manage order smoothly. </p>
                  <p class="mb-4 style2">People can able to view data as well as purchase many types of plants, accessories, pots, seeds etc. from this website.</p>
				  <p class="mb-4 style2">In this user can also see the product name and category and many other information about product. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
     
    <!-- Facts End -->
    

    <!-- Services Start -->
    
    <!-- Services End -->


    <!-- Features Start -->
     
    <!-- Features Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                 
                <h1 class="display-5">Our Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
               <?php
			   require_once("connect.php");
			   $qp=mysqli_query($cn,"select product_name,sell_price,image from tbl_product order by pid desc")or die ("QF");
			   while($datap=mysqli_fetch_array($qp))
			   {
			   ?>
			    <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                      <img class="img-fluid mb-4" src="admin/photos/<?php echo $datap['image'];?>" alt="">
                      <h6 class="mb-3"><?php echo $datap['product_name'];?></h6>
                        <h5 class="text-primary mb-0">Rs.<?php echo $datap['sell_price'];?>/-</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>                        </div>
                  </div>
                </div>
                 <?php
				}
				 ?>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Testimonial Start -->
     
    <!-- Testimonial End -->


    <!-- Team Start -->
     
    <!-- Team End -->


    <!-- Blog Start -->
     
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <?php require_once("footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>