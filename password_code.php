<?php session_start();
$pageName="Login";?>
<!--head-->
<?php include_once('inc/login-head.php')?>
<body>
	<?php
	include_once("inc/nav_bar_login.php");
	?>
	
	<div class="container">
	
	<form action="inc/password_code_reset" method="post">
		<div class="logo_form">
			<img id="login_pic" src="images/crest_black.png"/>
		</div>
        <div class="form-group">
			<input class="form-control" type="text" name="code" placeholder="Enter Your Confirmation Code">
		</div>
         <div class="form-group">
			<input class="form-control" id="pwd1" type="password" name="pass1" placeholder="Enter New Password">
		</div>
       
         <div class="form-group">
			<input class="form-control" id="pwd2" type="password" name="pass2" placeholder="Re Enter Password">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(255,0,199);font-family: 'dis'" id="log-btn">Change the Password</button>
		</div>
		</form>
	</div>
	<script>
	  $("form").submit(function() {
  var _txt1 = $('#pwd1').val();
  var _txt2 = $('#pwd2').val();
  
  if (_txt1 == _txt2)
  {
     
     return true;
  }
  else
  {
    alert('Passwords Are Not matching! please try again!');
    return false;
  }
});
	  
	  </script>	  

	<?php include('inc/scripts.php')?>
	
</body>
</html>