<?php session_start();
	if($_SESSION['userRole']!="admin"){
	header("location:login");
	}	?>
<!doctype html>
<html>
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>News Insert</title>

	<!--Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#7a7a7a">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">
	 <!--Favicon End -->   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/contact.css">
    
	<style>.navbar{margin-bottom: 0px}
	
.navbar-default .navbar-nav>li>a {
	color: #fff}
    .navbar-default {border:none;}
	.navbar-default .navbar-brand {
    color: #fff!important;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
	color: #fff;}
.navbar-default .navbar-brand:hover{color: white;}
.navbar-inverse .navbar-nav > li > a,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav > .active > a{color:#ED008C}
.navbar-default {
    background-color:transparent;
    border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
}
.navbar-default{z-index: 2}
.navbar-nav .open .dropdown-menu{border-radius: none;}
.dropdown:hover{background-color:#e7e7e7}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a{color:#fff;font-family: "dis"; }
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{color:#fff ;background-color: #ED008C; border-radius: 15px;}
.navbar-default .navbar-toggle .icon-bar {
	background-color: #fff;}
.navbar-default .navbar-toggle{border:none;background-color:#ED008C !important }
.navbar-default .navbar-toggle:hover{background-color:#ED008C }
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus{background-color:#ED008C ;color:#fff !important}
.dropdown-menu {background-color:#ED008C ;}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
    color: #fff!important;
    background-color: #8F268D !important;
}
.navbar-nav .open .dropdown-menu{background-color:#000 ;}
.dropdown-menu > li > a,.dropdown-menu > li > a{color: #fff !important;}
/*Menu*/</style>
</head>
	<?php include_once("inc/dbconnaction.php");
	//delete section
if(isset($_POST['NID'])){
	
	$NID=$_POST['NID'];
	
$sql0="DELETE FROM `news` WHERE `news`.`n_id` =$NID";

$result0=mysqli_query($conn,$sql0) ;

if($result0){
	?>
	<script>alert("News Deleted!")</script>
		<?php
	$result0=NULL;
	$NID=NULL;
	header("news_insert");
}else{
	?>
	<script>alert("Something Wrong!")</script>
		<?php
	$result0=NULL;
	$NID=NULL;
	header("news_insert");
}
}		
	?>

<body style="background-color: #1e2833">
<?php include("inc/nav_bar_admin.php");?>
<div class="container">	
<div class="row">
	<div class="col-md-5" >
<div class="form-box" style="border: none;">
	<h1 style="border-radius: 30px" >Insert News</h1>
  
  <form action="inc/news_insert_section" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="n_h">News Heading</label>
      <input class="form-control" id="n_h" type="text"  name="n_h" maxlength="100" required autocomplete="off" >
    </div>
   <div class="form-group">
			<input type="file" name="fileToUpload" id="fileToUpload" style="color: white"/ autocomplete="off">
		</div>
    <div class="form-group">
      <label for="n_d">News description (Max 200 Words) </label>
      <textarea class="form-control" id="n_d" name="n_d" maxlength="600" required autocomplete="off" style="height: 300px"></textarea>
    </div>
	 <div class="form-group">
    <input class="btn btn-success" type="submit" value="Save The Post" name="submit" />
    </div>
  </form>
	
</div></div>
	<div class="col-md-7" style="<?php $n=$_POST['N']; if($n==1){
	echo "display: none";$n=1;
};  ?>">
	<?php 
	include_once("inc/dbconnaction.php");

	$sql="SELECT * FROM `news` ORDER BY n_id DESC";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
	?>
<h1 >News Update</h1>
<div class="table-responsive" wdith="100%" style="border-radius: 6px;font-family: 'dis'">
<table border="1" class="table" style="background-color: white;">
	<tr>
	<th>|News Heading|</th>
	<th>|News Description|</th>
	<th>|Actions|</th>
	</tr>
<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
	
	<tr>
    
    <td><?php $str= $row['n_h'] ;echo substr($str, 0, 20);echo 
		"....";?></td>
	<td><?php $str=$row['n_d'] ;echo substr($str, 0, 50);echo 
		"....";?></td>
	<td><form action="news_insert" method="post"><input type="hidden" name="NID" value="<?php echo $row['n_id'] ;?>" />	<button class="btn-xs btn-danger" type="submit">Delete</button></form>
		
		<form action="news_insert" method="post">
			<input type="hidden" name="UID" value="<?php echo $row['n_id'] ;?>" />	
			<input type="hidden" name="N" value="<?php echo $n=1;?>" />	
		<button class="btn-xs btn-success" type="submit" >Update</button>
		</form>	</td>
	</tr>
	
<?php	
}
?>
	</table>
		</div>
	
<?php	
}else{
echo "No records";	
}
?>
	</div>
		<div class="col-md-7" style="<?php if(isset($_POST['UID'])){
	
}else{echo "display: none";};  ?>">
	<?php 
	include_once("inc/dbconnaction.php");
$nid=$_POST['UID'];
	$sql="SELECT * FROM `news` where n_id='$nid'";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
	?>
<h1 >News Update</h1>
		
<div class="table-responsive" wdith="100%" style="border-radius: 6px">
<button class="btn btn-danger" style="font-family: 'dis'"><span class="glyphicon glyphicon glyphicon-arrow-left">&nbsp;</span>Back</button>	
	<table border="1" class="table" style="background-color: white;">
	<tr>
	
	<th>|News Editing|</th>
	
	</tr>

<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
	<form action="inc\updateNews" method="post" enctype="multipart/form-data">	<tr>
	<td>
		<img src="inc\uploads_news\<?php echo $row['n-img']?>" style="max-width: 300px;float: left" class="thumbnail">
		<input type="file" name="fileToUpload" id="fileToUpload" style="color: black"/ autocomplete="off">
	</td>	
	</tr>
	<tr>
    <td><textarea name="n_h_u" maxlength="100"><?php echo $row['n_h'] ;?></textarea></td>
	</tr>
	<tr>
	<td><textarea name="n_d_u" maxlength="600" style="height: 200px"><?php echo $row['n_d'] ;?></textarea></td>
	</tr>
	<tr>
	<td>
		<input type="hidden" name="UID" value="<?php echo $row['n_id'] ;?>" />	
		<button class="btn-lg btn-success" type="submit" style="float: left">Update</button>
	</td>
	</tr>
	</form>

<?php	
}
?>
	</table>
		</div>
	
<?php	
}else{
echo "No records";	
	
}
?>

	
	
	</div>
	</div>
	</div>
	
</body>
	<?php include('inc/scripts.php')?>
</html>
