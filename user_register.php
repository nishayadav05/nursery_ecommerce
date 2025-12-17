<?php session_start();?>
<!DOCTYPE html>
<?php
require_once("connect.php");
if(isset($_REQUEST['Submit']))
{
	extract($_POST);
	mysqli_query($cn,"insert into tbl_user(name,address,city,pincode,gender,mobileno,emailid,password)values('$nm','$ad','$sc','$pn','$gen','$mob','$em','$pwd')")or die("QF");
	header("location:user_login.php");
}
?>
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
                <h1 class="display-1 mb-md-4" style="color:#FF9933">User Register </h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                  <a href="" class="btn btn-secondary py-md-3 px-md-5">User Register </a>                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
          <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h1 class="display-5">Register</h1>
            </div >
            <div class="row g-0" style="margin-left:250px;"><div class="col-lg-10" ><div class="bg-primary h-100 p-5"><form name="form1"  id="form1" method="post" action="" onSubmit="return f1();"><div class="row g-3">
              <div class="col-12">
			  <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" name="nm" id="nm" style="height: 55px;  color:#000000; font-size:20px" autofocus>
			  </div>
			  <div class="col-12">
                                    <textarea name="ad" id="ad" class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Address" style="height: 55px;  color:#000000; font-size:20px"></textarea>
              </div>
					<div class="col-6">
						<select name="sc" id="sc" class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px">
          					<option value="Select your city">Select your city</option>
   						    <option value="Bhavnagar">Bhavnagar</option>
    						<option value="Surat">Surat</option>
    						<option value="Ahmadabad">Ahmadabad</option>
    						<option value="Baroda">Baroda</option>
    						<option value="Jamnagar">Jamnagar</option>
   						    <option value="Aanand">Aanand</option>
    						<option value="Bharuch">Bharuch</option>
  					</select>
					</div>			
			  <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your pincode" name="pn" id="pn" style="height: 55px;  color:#000000; font-size:20px " onKeyPress="return (event.charCode >= 48 && 
	event.charCode <= 57  || event.charCode==13)">
              </div>
								<div class="col-12">
								  <span class="form-control bg-light border-0 px-4" style="height: 55px;  color:#000000; font-size:20px ">Select Your gender : <input name="gen" type="radio" value="Male" />Male <input name="gen" type="radio" value="Female" />Female
							  </span>
							  </div>
                                <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Mobile No." name="mob" id="mob" style="height: 55px;  color:#000000; font-size:20px"maxlength="10" pattern="[6-9]{1}[0-9]{9}" onKeyPress="return (event.charCode >= 48 && 
	event.charCode <= 57  || event.charCode==13)">
                                </div>
								 <div class="col-6">
                                    <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email ID"  name="em" id="em" style="height: 55px;  color:#000000; font-size:20px">
                                </div>
                                
								<div class="col-12">
                                    <input type="password" class="form-control bg-light border-0 px-4" placeholder="Password" name="pwd" id="pwd" style="height: 55px;  color:#000000; font-size:20px">
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="Submit"  value="REGISTER" onClick="return f1();" class="btn btn-secondary w-100 py-3">
									 
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
<script>
function f1()
{
	if(form1.nm.value=="")
	{
		alert("Enter Name");
		form1.nm.focus();
		return false;
	}
	else if(form1.ad.value=="")
	{
		alert("Enter Address");
		form1.ad.focus();
		return false;
	}
	else if(form1.sc.value=="Select your city")
	{
		alert("Select city");
		form1.sc.focus();
		return false;
	}
	else if(form1.pn.value=="")
	{
		alert("Enter pincode");
		form1.pn.focus();
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
		alert("Enter Email Id");
		form1.em.focus();
		return false;
	}
	else if(form1.pwd.value=="")
	{
		alert("Enter password");
		form1.pwd.focus();
		return false;
	}
}
</script>
