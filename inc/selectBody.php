<?php
$ID='';
if(isset($_SESSION['userID'])){
	
			$ID=$_SESSION['userID'];
	       
}

	switch($ID){
	case "admin":include("inc/user_content.php");break;
	case "root":include("inc/user_content.php");break;	
	case "user":include("inc/user_content.php");break;
	default:include("inc/user_content.php");break;
}




?>