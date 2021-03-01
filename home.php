<?php 
session_start();
if (isset($_SESSION['userRole']) && isset($_SESSION['userID'])){
    
	include_once('inc/home_head.php');
    include("inc/selectNavbar.php");
	include("inc/selectBody.php");
    include("inc/scripts.php");
    include_once('inc/rest_home.php');

}else{
	header("location:login");

}
	?>
	
    
	
