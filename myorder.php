
<?php
require_once("connect.php");
session_start();
?>
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
.style2 {color: #FF8000}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #000000}
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
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Garden</span>Gallery</h1>
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
                <h1 class="display-1 mb-md-4 " style=" color:#FF9933">Order</h1>
                    <span class="style2"></span><a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                  <a href="" class="btn btn-secondary py-md-3 px-md-5">my Order</a></div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div align="center">
          <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h1 class="display-5">My Order</h1>
            </div >
            <div class="row g-0" ><div class="col-lg-12" ><div class="bg-primary h-100 p-5"><form name="form1"  id="form1" method="post" action="" onSubmit="return f1();" autofocus><div class="row g-3">
			
			
              <div class="col-12">
                <table width="100%" align="center" class="bg-light">
                <tr style="color:#000040">
                  <td width="3%"><h5 align="center">No.</h5></td>
                  <td width="14%"><h5 align="center"><strong>Product name</strong></h5></td>
                  <td width="5%"><h5 align="center"><strong>Price</strong></h5></td>
                  <td width="8%"><h5 align="center"><strong>Quantity</strong></h5></td>
                  <td width="11%"><h5 align="center"><strong>Sub. Total</strong></h5></td>
                  <td width="13%"><h5 align="center"><strong>Discount</strong></h5></td>
                  <td width="17%"><h5 align="center"><strong>Main Total</strong></h5></td>
                  <td width="16%"><h5 align="center"><strong>Payment Mode</strong></h5></td>
                  <td width="11%"><h5 align="center"><strong>Action</strong></h5></td>
                </tr>
    <?php
	$no=1;
	extract($_POST);
	$u=$_SESSION['adm'];
	
	$q=mysqli_query($cn,"select * from tbl_cart where uid=$u")or die("QF");
	while($data=mysqli_fetch_array($q))
	{
		$p=$data['pid'];
		$qp=mysqli_query($cn,"select product_name from tbl_product where pid=$p")or die ("QF P");
		$datap=mysqli_fetch_array($qp); 
	?>
                <tr style="color:#000040">                  <td><div align="center"><?php echo $no;?></div></td>
                  <td><div align="center"><?php echo $datap['product_name'];?></div></td>
                  <td><div align="center"><?php echo $data['price'];?></div></td>
                  <td><div align="center"><?php echo $data['qty'];?></div></td>
                  <td><div align="center"><?php echo $data['sub_total'];?></div></td>
                  <td><div align="center"><?php echo $data['discount'];?></div></td>
                  <td><div align="center"><?php echo $data['main_total'];?></div></td>
                  <td><div align="center"><?php echo $data['payment_mode'];?></div></td>
                  <td><div align="center"><?php echo $data['status'];?>
                    </div></td>
                </tr>
                <?php
	$no++;
	}
	?>
              </table>
              </div>
			  </div>
                        </form>
                    </div>
                </div>
                 
            </div>
   
		</div>
    </div>
    <!-- Contact End -->


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
