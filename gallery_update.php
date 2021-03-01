<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	  <!--Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7a7a7a">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">
<title>Gallery Update</title>
	<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/m_view.css">
	<style>
		.jumbotron{background-color: white}
	</style>
</head>
<body>
	<?php
	session_start();
include("inc/nav_bar_admin.php");
	?>
	<div class="container">
	<div class="jumbotron" style="font-family: 'dis'">
  <h2><span class="glyphicon glyphicon glyphicon-camera"></span>Upload &amp; Images&nbsp;
	  
	  <a href="/php/gallery" target="_blank"><button class="btn btn-lg btn-info">View Gallery</button></a>
		  
		  </h2>
  <form action="inc/gallery_insert_section" method="post" enctype="multipart/form-data">
	<div class="form-group" >
		<input type="file" name="fileToUpload" id="fileToUpload" style="color: black"/ autocomplete="off" required>
		Short Discription about picture:
		<input type="text" name="alt" maxlength="200" class="form-control" required>
	</div>
	  <div class="form-group">
	  <button class="btn btn-success" name="submit" type="submit" >Upload</button>
	  </div>
   </form>
		
  
</div>
</div>
	<?php
if($_SESSION['userRole']=="admin"){
	include("inc/dbconnaction.php");
	
//update section
if(isset($_POST['uid']) && isset($_POST['cap'])){
	$uid=$_POST['uid'];
	$alt=mysqli_real_escape_string($conn,$_POST['cap']);
	$sql="UPDATE `gallery` SET `pic_alt`='$alt' WHERE `pic_id`='$uid'";
	$result=mysqli_query($conn,$sql);
if($result){
	$result2=NULL;
	$uid=NULL;
	
	?>
	<script>
		alert("Updated!");
		window.location='gallery_update';
	</script>
	<?php
	
}else{
	?>
	<script>alert("Something Wrong!");</script>
		<?php
	$result2=NULL;
	$uid=NULL;
	header("location:gallery_update");
	}
}		

	
	
//delete section
if(isset($_POST['DEL'])){
	
	$pic_id=$_POST['DEL'];
	
$sql0="DELETE FROM `gallery` WHERE `gallery`.`pic_id` =$pic_id";

$result0=mysqli_query($conn,$sql0) ;

if($result0){
	?>
	<script>alert("Image Deleted!")</script>
		<?php
	$result=NULL;
	$pic_id=NULL;
	header("location:gallery_update");
}else{
	?>
	<script>alert("Something Wrong!")</script>
		<?php
	
	$result=NULL;
	$pic_id=NULL;
	header("location:gallery_update");
}}		

$sql="SELECT * FROM `gallery` ORDER by pic_id DESC";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
?>
<div class="container">
<div class="row">
	<?php
$x=1;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
 <!-- Large Desktop= 3 columns, Desktop&Tablet= 2 columns, Mobile= 1 column -->
	<div class="col-lg-4 col-sm-6">
	<div class="thumbnail">
		<form action="gallery_update" method="post" style="float:left" >
			<input type="hidden" value="<?php echo $row['pic_id']; ?>" name="DEL">
		<button class="btn btn-xs btn-danger" type="submit" style="font-family: 'dis'" >Delete<span class="glyphicon glyphicon glyphicon-trash"></span></button>
			</form>
		<img src="images/gallery/<?php echo $row['pic_src'];?>">
		<form action="gallery_update" method="post">
		<input type="hidden" name="uid" value="<?php echo $row['pic_id'];?>">	
		<input type="text" name="cap" style="float: left" class="form-control" value="<?php echo $row['pic_alt']; ?>" >	
		<button class="btn btn-xs btn-success" style="font-family: 'dis'" type="submit">Save&nbsp;<span class="glyphicon glyphicon glyphicon-floppy-disk"></span></button>
		</form></div></div>
	<?php	
}if($x%3==0){
		
		echo "</div>";
	}
?>
       
        </div>
<?php	
}else{
echo "No Messages Available";	
}
		}else{
		header("location:login");
	}
	?>
    </div>
	<!--scripts-->	  
<?php include('inc/scripts.php')?>
</body>
</html>