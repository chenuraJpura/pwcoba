<?php session_start();
	if($_SESSION['userRole']!="admin"){
	header("location:login");
	}	?>
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
		
		
<!--Favicon End --> 
<meta charset="utf-8">
<title>ADMIN PANNEL</title>
	<!-- Bootstrap -->
	 
    <link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/update.css"     >
	
	<style>button, input, optgroup, select, textarea{color: black}</style>	
	</head>

<body>

<?php
	include("inc/nav_bar_admin.php");
include_once("inc/dbconnaction.php");
$mid=$_GET['mem_ID'];
$sql="select * from pwcobamem where mem_ID='$mid';";
$result=mysqli_query($conn,$sql);	
$no=mysqli_num_rows($result);


if($no>0){

	?>
	<div class="table-responsive">
<form action="updateStudent" method="post">

<table border="1" class="table" width="100%">
	<tr>
	<th>|First Name |</th>
	<th>|Last Name |</th>
	<th>|Age|</th>
	<th>|Contact No|</th>
	<th>|DOB|</th>
	<th>|Town|</th>		
	<th>|BATCH|</th>		
	<th>|Action|</th>		
	</tr>

<?php

while($row=mysqli_fetch_assoc($result)){
	
	
	
	?>
	<input type="hidden" name="mem_ID" value="<?php echo $row['mem_ID'] ;?>"/>
	<tr>
	
	<td><input name="mem_fName" type="text" value="<?php echo $row['mem_fName'] ;?>" /></td>
	<td><input name='mem_lName' type="text" value="<?php echo $row['mem_lName'] ;?>" /></td>
	<td><input name="mem_Age" type="text" value="<?php echo $row['mem_Age'] ;?>" /></td>
	<td><input name="mem_4No" type="text" value="<?php echo $row['mem_4No'] ;?>" /></td>
	<td><input name="mem_DBA" type="text" value="<?php echo $row['mem_DBA'] ;?>" /></td>
	<td><input name="mem_Town" type="text" value="<?php echo $row['mem_town'] ;?>" /></td>	
	<td>
	<select class="form-control" id="batchNo" name="mem_batch" >
	<option value="2010 A/L" id="b1" <?php if($row['mem_BatchN'] == '2010 A/L'){ echo"selected" ;}?>>2010 A/L</option>
    <option value="2011 A/L" id="b2" <?php if($row['mem_BatchN'] == '2011 A/L'){ echo"selected" ;}?>>2011 A/L</option>
    <option value="2012 A/L" id="b3" <?php if($row['mem_BatchN'] == '2012 A/L'){ echo"selected" ;}?>>2012 A/L</option>
    <option value="2013 A/L" id="b4" <?php if($row['mem_BatchN'] == '2013 A/L'){ echo"selected" ;}?>>2013 A/L</option>
    <option value="2014 A/L" id="b5" <?php if($row['mem_BatchN'] == '2014 A/L'){ echo"selected" ;}?>>2014 A/L</option>
    <option value="2015 A/L" id="b6" <?php if($row['mem_BatchN'] == '2015 A/L'){ echo"selected" ;}?>>2015 A/L</option>
    <option value="2016 A/L" id="b7" <?php if($row['mem_BatchN'] == '2016 A/L'){ echo"selected" ;}?>>2016 A/L</option>
    <option value="2017 A/L" id="b8" <?php if($row['mem_BatchN'] == '2017 A/L'){ echo"selected" ;}?>>2017 A/L</option>
    <option value="2018 A/L" id="b9" <?php if($row['mem_BatchN'] == '2018 A/L'){ echo"selected" ;}?>>2018 A/L</option>
    <option value="2019 A/L" id="b10" <?php if($row['mem_BatchN'] == '2019 A/L'){ echo"selected" ;}?>>2019 A/L</option>
  </select>
		
	<td><button class="btn btn-primary" type="submit" >SAVE</button></td>	
		
		
		
	</tr>
	
<?php	
	
}
?>
	</table>
	<button class="btn btn-success"><a href="update">BACK DB VIEW</a></button>
	</form>
	</div>
	
<?php	
}else{echo "No records";}
?>

<!--footer-->
		<?php include('inc/footer.php');?>

<!--footer end-->	
<!--scripts-->	  
<?php include('inc/scripts.php')?>

</body>
</html>
