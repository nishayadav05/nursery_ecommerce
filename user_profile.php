<?php
session_start();
require_once("connect.php");
$p=$_SESSION['adm'];
$qu=mysqli_query($cn,"select * from tbl_user where uid=$p")or die("QF");
$data=mysqli_fetch_array($qu);
?>
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
.style2 {color: #FF8000}
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
                    v<h1 class="display-1 mb-md-4" style="color:#FF9933">Profile</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                  <a href="" class="btn btn-secondary py-md-3 px-md-5">Profile</a></div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
          <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h1 class="display-5">PROFILE</h1>
            </div >
            <div class="row g-0" style="margin-left:250px;"><div class="col-lg-10" ><div class="bg-primary h-100 p-5"><form name="form1"  id="form1" method="post" action="" onSubmit="return f1();"><div class="row g-3">
			
              <div class="col-12">
			  <input name="nm" type="text" id="nm" value="<?php echo $data['name'];?>" class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px color:#000000; font-size:20px" readonly="" />
			  </div>
			  <div class="col-12">
                  <input name="add" type="text" id="add" value="<?php echo $data['address'];?>"class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px color:#000000; font-size:20px" readonly=""/>
              </div>
			  <div class="col-6">
			      <input name="ct" type="text" id="ct" value="<?php echo $data['city'];?>" class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px color:#000000; font-size:20px" readonly=""/>
			  </div>			
			  <div class="col-6">
                     <input name="pn" type="text" id="pn" value="<?php echo $data['pincode'];?>" class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px color:#000000; font-size:20px" readonly=""/>
			  </div>
			  <div class="col-12">
				   <input name="gen" type="text" id="gen" value="<?php echo $data['gender'];?>" class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px color:#000000; font-size:20px" readonly=""/>
			  </div>
              <div class="col-6">
                <input name="mob" type="text" id="mob" value="<?php echo $data['mobileno'];?>" class="form-control bg-light border-0 px-4" style="height: 55px; color:#000000; font-size:20px" readonly="" />             </div>
			   <div class="col-6">
                    <input name="em" type="text" id="em" value="<?php echo $data['emailid'];?>" class="form-control bg-light border-0 px-4" style="height: 55px; color:#000000; font-size:2opx;" readonly="" />
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
