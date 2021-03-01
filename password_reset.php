<?php session_start();
$pageName="Login";?>
<!--head-->
<?php include_once('inc/login-head.php')?>
<body>
	<?php
	include_once("inc/nav_bar_login.php");
	?>
	
	<div class="container">
	
	<form action="inc/password_reset_sys" method="post">
		<div class="logo_form">
			<img id="login_pic" src="images/crest_black.png"/>
		</div>
        <div class="form-group">
			<input class="form-control" type="text" name="reMail" placeholder="Enter Your Email">
		</div>
        <div class="form-group">
			<button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(255,0,199);font-family: 'dis'" id="log-btn">Request a Password Reset</button>
		</div>
		</form>
	</div>
	<?php include('inc/scripts.php')?>
</body>
</html>