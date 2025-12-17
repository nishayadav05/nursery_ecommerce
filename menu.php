<div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>	
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
<div class="dropdown-menu m-0">
<?php
require_once("connect.php");
$q1=mysqli_query($cn,"select * from prod_cat")or die ("QF Cat");
while($data1=mysqli_fetch_array($q1))
{
?>
<a href="product.php?pnm=<?php echo $data1['cat_name'];?>" class="dropdown-item"><?php echo $data1['cat_name'];?></a>
<?php
}
?>
</div>
                </div>
               
<?php if(isset($_SESSION['adm'])=="") { ?>
<a href="user_register.php" class="nav-item nav-link">User Register</a>
<a href="user_login.php" class="nav-item nav-link">Login</a>
<?php } else { ?>
<a href="myorder.php" class="nav-item nav-link">MY Order</a>				
<a href="user_profile.php" class="nav-item nav-link">Profile</a>
<a href="change_password.php" class="nav-item nav-link">Change Password</a> 
<a href="user_logout.php" class="nav-item nav-link">Logout</a>
<?php } ?>
				<a href="contact.php" class="nav-item nav-link">Contact</a>
				
            </div>
        </div>