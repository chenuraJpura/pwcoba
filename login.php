<?php session_start();
$pageName="Login";?>
<!--head-->
<?php include_once('inc/login-head.php')?>
<body>
	<?php
	include_once("inc/nav_bar_login.php");
	?>
	<div class="container">
	<form action="inc/login_sys" method="post">
		<div class="logo_form">
			 <img id="login_pic" src="images/crest_black.png"/>
		</div>
        <div class="form-group">
				<input class="form-control" type="text" name="userName" placeholder="User Name or Email">
		</div>
        <div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password">
		</div>
        <div class="form-group">
			<button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(255,0,199);" id="log-btn">Log In</button>
		</div>
		<a href="password_reset" class="forgot" style="color:rgb(255,255,255);">Forgot your email or password?</a>
	</form>
	</div>
	<?php include('inc/scripts.php')?>
</body>
</html>