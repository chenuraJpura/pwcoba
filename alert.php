<?php session_start();
$pageName="Alert"; 
if(isset($_SESSION['message'])){
	
}else{
	header("location:index");
}
?>

<!--head-->
<?php include_once('inc/login-head.php')?>
<body>

	<?php include('inc/nav_bar.php');
	?>
	<div class="container">
		<form action="" method="post">
		<div class="form-group" style="font-family: 'dis';text-align: center">
<?php			$role="";
if(isset($_SESSION['message']) ){
	$message=$_SESSION['message'];
	
switch($message){
	case "mail":
		?>
			<span class="glyphicon glyphicon-ok-circle" style="font-size:xxx-large;color: chartreuse"></span>
			
			<div class="alert alert-success" role="alert">
			If your email in the server you will get password reset conformation code.please check the email</div>
		
			
		<?php	
		break;
	case "contact":
		?>
			<span class="glyphicon glyphicon-envelope" style="font-size:xxx-large;color: chartreuse"></span>
			
			<div class="alert alert-success" role="alert">
			Your Message Send Sucessfully!</div>
		
			<?php break;	
	case "contact-x":
		?>
		<span class="glyphicon glyphicon-envelope" style="font-size:xxx-large;color:red"></span>
			
		<div class="alert alert-danger" role="alert">
			Your Message Send unSucessfully!</div>
			
		<?php	
		break;
		case "pw_reset":
		?>
		<span class="glyphicon glyphicon-asterisk" style="font-size:xxx-large;color:greenyellow"></span>
			
		<div class="alert alert-success" role="alert">
			Your Password Changed Sucessfully!</div>
			
		<?php	
		break;
		case "pw_reset_x":
		?>
		<span class="glyphicon glyphicon-envelope" style="font-size:xxx-large;color:red"></span>
			
		<div class="alert alert-danger" role="alert">
			Your Password Changed unSucessfully!</div>
			
		<?php	
		break;
		case "code_x":
		?>
		<span class="glyphicon glyphicon glyphicon-remove" style="font-size:xxx-large;color:red"></span>
			
		<div class="alert alert-danger" role="alert">Conformation Code Is Wrong</div>
			
		<?php	
		break;
	default:break;
}
}

?>		
		</div>
		</form>
	</div>
	<?php include('inc/scripts.php'); session_destroy(); ?>
</body>
</html>