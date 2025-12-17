<?php
session_start();
require_once("connect.php"); 
if(isset($_REQUEST['Submit']))
{
 extract($_POST);
 mysqli_query($cn,"insert into tbl_feedback(name,mobileno,emailid,message)values('$nm','$mob','$em','$m')")or die("QF");
}
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
.style1 {color: #FF8000}
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
                <h1 class="display-1 mb-md-4 " style=" color:#FF9933">Contact Us</h1>
                  <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
              <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact Us</a>                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Send your Feedback</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                        <form name="form1"  id="form1" method="post" action="" onSubmit="return f3();">
                            <div class="row g-3">
                                <div class="col-6">
                                  <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" name="nm" id="nm" style="height: 55px;" autofocus>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder=" Your Mobile NO." name="mob" id="mob" maxlength="10" pattern="[6-9]{1}[0-9]{9}" style="height: 55px;">
                                </div>
								 <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email ID" name="em" id="em" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Message" name="m" id="m"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="Submit"  value="Send" class="btn btn-secondary w-100 py-3" onClick="return f3();">
									 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Get In Touch</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Our Office</h5>
                                <span class="text-white">   3/b Narayan Society,150FT Ring Road, Bhavnagar-364001</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Email Us</h5>
                                <span class="text-white">gg23@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Call Us</h5>
                                <span class="text-white">+898 022 5856</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<p align="center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.8953283969836!2d72.16521455549888!3d21.74558326171175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a1709a1a1ab%3A0x6f9a6a342cb50b90!2sRing%20Rd!5e0!3m2!1sen!2sin!4v1712917021729!5m2!1sen!2sin" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p>
    <!-- Contact End -->

<!--MAP HERE-->
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
<script>
function f3()
{
	if(form1.nm.value=="")
	{
		alert("Enter name");
		form1.nm.focus();
		return false;
	}
	else if(form1.mob.value=="")
	{
		alert("Enter mobile no.");
		form1.mob.focus();
		return false;
	}
	else if(form1.em.value=="")
	{
		alert("Enter Email id");
		form1.em.focus();
		return false;
	}
	else if(form1.m.value=="")
	{
		alert("Enter your message");
		form1.m.focus();
		return false;
	}
}
</script>