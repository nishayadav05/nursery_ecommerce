<?php
session_start();
$_SESSION['adm']='';
session_destroy();
header("location:user_login.php");
?>