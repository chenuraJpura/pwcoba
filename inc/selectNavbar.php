<?php
$role="";
if(isset($_SESSION['userRole'])){
	
			$role=$_SESSION['userRole'];
	        
}

	switch($role){
	case "admin":include("inc/nav_bar_admin.php");break;
	case "root":include("inc/nav_bar_admin.php");break;	
	case "user":include("inc/user_navbar.php");break;
	default:include("inc/user_navbar.php");break;
}



?>