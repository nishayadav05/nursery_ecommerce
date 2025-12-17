<?php
session_start();
require_once("connect.php");
$p=$_REQUEST['p'];
$qq=mysqli_query($cn,"select * from tbl_product where pid=$p")or die ("QF");
$datapd=mysqli_fetch_array($qq);
//email
?><?php session_start();?>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
<!--
.style1 {color: #FF8000}
.style2 {color: #004000}
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
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php require_once("menu.php");?>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
              <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 mb-md-4 " style=" color:#FF9933">Product Detail</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                  <a href="" class="btn btn-secondary py-md-3 px-md-5">Product Detail </a>                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
			     <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <div class="mb-5">
                    <div class="row g-5 mb-5">
                        <div class="autofocus" >
                            <img  class="img-fluid w-100" src="admin/photos/<?php echo $datapd['image'];?>" alt="" height="100%" width="100%" >
                        </div>
                    </div>
             </div>
             </div>
               
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-8">
                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4"><?php echo $datapd['product_name'];?></h2>
                    <div class="bg-primary  text-white" style="padding: 30px;">
                     <p><span class="style2">Rs.</span><?php echo $datapd['sell_price'];?> /-
					<br />
					<span class="style2">Discount:</span> 10%
					<br /><br /> 
					 <span class="style2">color : </span><?php echo $datapd['color'];?>
					<br />
					<span class="style2">Stock : </span><?php echo $datapd['quantity'];?>
					<br />
				    <span class="style2">Product : </span> <?php echo $datapd['availability'];?>
					<br />
					<br />
					<p><span class="style2">Description :</span> <?php echo $datapd['instruction'];?></p>
</p>
                      <a class="btn btn-secondary py-2 px-4" href="purchase.php?p=<?php echo $datapd['pid'];?>">Purchase</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
				                
                
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
             
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php require_once("footer.php");?>   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<script>
function f2()
{

	var p=Number(form1.p.value);
	var q=Number(form1.qu.value);
	var st=(p*q);
	form1.st.value=st;
	var d=Number(form1.d.value);
	var d_rs=(st*d)/100;
	var m=(st-d_rs);
	form1.mt.value=m;
}
</script>