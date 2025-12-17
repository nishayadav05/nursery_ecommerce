<?php
session_start();
require_once("connect.php");
$p=$_REQUEST['p'];
$qq=mysqli_query($cn,"select * from tbl_product where pid=$p")or die ("QF");
$datapd=mysqli_fetch_array($qq);

//email
//insert
if(isset($_REQUEST['submit']))
{
  extract($_POST);	
  $u=$_SESSION['adm'];
  $r=rand(1000000,10000000);
  
  mysqli_query($cn, "insert into tbl_cart(pid,uid,price,qty,sub_total,discount,main_total,payment_mode,ref_no)values('$p','$u','$pr','$qu','$st','$d','$mt','$pm','$r')") or die ("QF");
  header("location:myorder.php");
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
                  <h1 class="display-1 mb-md-4" style=" color:#FF9933">Purchase</h1>
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
                
                <!-- Comment Form Start -->
                <div class="bg-primary p-5">
                    <h2 class="text-white mb-4">Purchase Product</h2>
                    <form name="form1" id="form1" method="post" action="" onSubmit="return f1();">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="pnm" name="pnm" class="form-control bg-white border-0" value="<?php echo $datapd['product_name'];?>" style="height: 55px;" readonly="">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="pr" name="pr" class="form-control bg-white border-0" value="<?php echo $datapd['sell_price'];?>" style="height: 55px;" readonly="">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="qu" name="qu" class="form-control bg-white border-0" placeholder="Enter Quantity" style="height: 55px;" onBlur="return f2();" autofocus>
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="st" name="st" class="form-control bg-white border-0" placeholder="Your s_total" style="height: 55px;"  readonly="">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="d" name="d" class="form-control bg-white border-0" value="10" style="height: 55px;">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="mt" name="mt" class="form-control bg-white border-0" placeholder="Your m_total" style="height: 55px;">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="unm" name="unm" class="form-control bg-white border-0" placeholder="Your user name" style="height: 55px;">
                            </div>
							<div class="col-12 col-sm-6">
                                <input type="text" id="mob" name="mob" class="form-control bg-white border-0" placeholder="Your mobileno" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;" name="em" id="em">
                            </div>
							<div class="col-12 col-sm-6">
							 <select name="pm" id="pm" class="form-control bg-white border-0" style="height: 55px;">
                             <option value="Select Payment Mode">Select Payment Mode</option>
                             <option value="G-Pay">G-Pay</option>
                             <option value="COD">COD</option>
                             <option value="RTGS">RTGS</option>
  </select>
                            </div>
                            
							
                            
                            <div class="col-12">
                              <input type="submit" name="submit" value="Buy"   class="btn btn-secondary w-100 py-3" onClick="return f1();">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-12">
              
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
               
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
function f1()
{
    if(form1.qu.value=="")
	{
		alert("Enter Quantity");
		form1.qu.focus();
		return false;
	}
	else if(form1.unm.value=="")
	{
		alert("Enter your name :");
		form1.unm.focus();
		return false;
	}
	else if(form1.mob.value=="")
	{
		alert("Enter your mobile no.");
		form1.mob.focus();
		return false;
	}
	else if(form1.em.value=="")
	{
		alert("Enter your email id");
		form1.em.focus();
		return false;
	}
	else if(form1.pm.value=="Select Payment Mode")
	{
		alert("Select Payment Mode");
		form1.pm.focus();
		return false;
	}
}
function f2()
{

	var p=Number(form1.pr.value);
	var q=Number(form1.qu.value);
	var st=(p*q);
	form1.st.value=st;
	var d=Number(form1.d.value);
	var d_rs=(st*d)/100;
	var m=(st-d_rs);
	form1.mt.value=m;
}
</script>