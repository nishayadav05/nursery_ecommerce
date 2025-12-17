<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">3/b Narayan Society,150FT Ring Road, Bhavnagar-364001,Gujrat,India</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">gg23@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+898 022 5856</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="https://www.instagram.com/ssccm_college/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="about.php"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="contact.php"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                             
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="about.php"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="user_register.php"><i class="bi bi-arrow-right text-white me-2"></i>User_Register</a>
                                 
                            </div>
                        </div>
						<div class="col-lg-3 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Product Categories</h4>
                            <div class="d-flex mb-2">
                                
                                <p class="text-white mb-0"><?php
require_once("connect.php");
$q1=mysqli_query($cn,"select * from prod_cat")or die ("QF Cat");
while($data1=mysqli_fetch_array($q1))
{
?>
<a href="product.php?pnm=<?php echo $data1['cat_name'];?>" class="dropdown-item style1"><?php echo $data1['cat_name'];?></a>
<?php
}
?>
</div>
                </div>

		</p>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">GardenGallery</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="">Nirjala Vegad and Nisha Yadav</a></p>
        </div>
    </div>