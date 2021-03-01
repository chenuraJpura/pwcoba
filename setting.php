<?php 
	session_start();
$pageName="Settings";?>
<!--head-->
<?php  include_once('inc/setting_head.php')?>
<body>
<div class="container"><?php
include("inc/selectNavbar.php");
		?>
		</div>
		<?php
$mid=$_SESSION['userID'];
include_once("inc/dbconnaction.php");
include_once('inc/us_setting.php');

$sql="select * from pwcobamem where mem_ID='$mid';";

$result=mysqli_query($conn,$sql);

$no=mysqli_num_rows($result);

$x=0;
while($row=mysqli_fetch_assoc($result)){	
	$x++;
	?>

	<div class="container f1">
	
	
		<form enctype="multipart/form-data" action="upload" method="post">
		<div class="form-group" style="text-align: center">
			
			<img id="login_pic" class="img-circle" src="uploads/<?php echo $us_img ;?>" />
			<div class="form-group">
			<input type="file" name="fileToUpload" id="fileToUpload"/>
			<input class="btn btn-primary btn-block" type="submit" value="Change Profile Picture" name="submit" style="background-color:rgb(255,0,199)"/>
	
		</div>
		
		</div>
			</form>
		<div class="row">
			<div class="col-md-6">
	<form action="inc/updateUser" method="post" style="background-color: transparent">	
		<input type="hidden" name="mem_ID" value="<?php echo $row['mem_ID'] ;?>"/>
	 <div class="form-group">
		 First Name
				<input class="form-control" type="text" name="mem_fName" value="<?php echo $row['mem_fName'] ;?>">
		</div>
        		<div class="form-group">
					Last Name
				<input class="form-control" type="text" name="mem_lName" value="<?php echo $row['mem_lName'] ;?>"></div>
         <div class="form-group">
			 Mobile No
				<input class="form-control" type="text" name="mem_4No" value="0<?php echo $row['mem_4No'] ;?>"></div> 
	  <div class="form-group">
		  Hometown
				<input class="form-control" type="text" name="mem_Town" value="<?php echo $row['mem_town'] ;?>"></div> 
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(255,0,199);" id="log-btn">Save &amp; Update</button></div>
	
	</form>
				</div><div class="col-md-6">
		<form action="inc/pass_reset" method="post" id="f1">
		<div class="form-group">
		Enter Your Old Password
		<input class="form-control" type="password" name="oldPw" required>	
		</div>
		<div class="form-group">
		Enter Your New Password
		<input class="form-control" id="pwd1" type="password" name="newPw" required>	
		</div>
		<div class="form-group">
		Re-enter Your New Password
		<input class="form-control" id="pwd2" type="password" name="newPw1" required>	
		</div>
			<div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(255,0,199);" id="log-btn" >Save &amp; Update</button></div>
		</form>
			
			</div>
			</div>
	</div>	  

	<?php } include('inc/scripts.php')?>
	<script>
	  $("#f1").submit(function() {
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
</body>

</html>