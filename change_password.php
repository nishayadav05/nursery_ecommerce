<?php
session_start();
if(isset($_REQUEST['Submit']))
{
	$a=$_SESSION['adm'];
	require_once("connect.php");
	extract($_POST);//auto variable
	$q=mysqli_query($cn,"select * from tbl_user where password='$cp' and uid=$a")or die("QF");
	if(mysqli_num_rows($q))
	{
		mysqli_query($cn,"update tbl_user set password='$np' where uid=$a")or die("QF2");
		header("location:user_logout.php");
	}
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
                <h1 class="display-1 mb-md-4 " style=" color:#FF9933">Change Password</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                  <a href="" class="btn btn-secondary py-md-3 px-md-5">Change_password </a>                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
          <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">&nbsp;</h6>
                <h1 class="display-5">Change Password </h1>
            </div >
            <div class="row g-0" style="margin-left:250px;"><div class="col-lg-10" ><div class="bg-primary h-100 p-5"><form name="form1"  id="form1" method="post" action="" onSubmit="return f1();"><div class="row g-3">
			    <div class="col-12">
                     <input type="password" class="form-control bg-light border-0 px-4" placeholder="Enter Current Password" name="cp" id="cp" style="height: 55px;" autofocus >
                </div>
				<div class="col-12">
                     <input type="password" class="form-control bg-light border-0 px-4" placeholder="Enter new Password" name="np" id="np" style="height: 55px;">
                </div>
      			<div class="col-12">
                     <input type="password" class="form-control bg-light border-0 px-4" placeholder="Re-enter new Pasword" name="rp" id="rp" style="height: 55px;"    onBlur="return f2();">
                </div>
                <div class="col-12">
                     <input type="submit" name="Submit"  value="CHANGE" class="btn btn-secondary w-100 py-3" onClick="return f1();">
									 
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

</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<script>
function f1()
{
	if(form1.cp.value=="")
	{
		alert("Enter current password");
		form1.cp.focus();
		return false;
	}
	else if(form1.np.value=="")
	{
		alert("Enter new password");
		form1.np.focus();
		return false;
	}
	else if(form1.rp.value=="")
	{
		alert("Enter re-enter new password");
		form1.rp.focus();
		return false;
	}
}
function f2()
{
	if(form1.np.value!=form1.rp.value)
	{
		alert("New passwerd and Re-enter password not match");
		form1.np.value='';
		form1.rp.value='';
		form1.np.focus;
		return false;
	}
}
</script>
</script>
<?php if(isset($_REQUEST['msg1'])=="1") { ?>
<script>
alert("Current Password Invalid");
</script>
<?php } ?>
