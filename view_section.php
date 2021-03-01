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
	
<title>ADMIN UPDATE</title>
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
	 
    <link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/update.css"     >
</head>
	<body>
		<?php include("inc/nav_bar_admin.php"); ?>
<?php 
include_once("inc/dbconnaction.php");
?>
<div class="container">		
<button class="btn btn-success "><a href="update">Back Database</a></button>
</div>
	<?php
$batch=$_POST['batch_No'];
$club=$_POST['club'];
$sql="SELECT * FROM `pwcobamem` WHERE `mem_BatchN`='$batch' AND `mem_club`='$club'";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
	?>
		

		<form action="view_section" method="post">
			<div class="container">
<select id="batchNo" name="batch_No" class="form-control" style="width: 20%;float:left">
    <option value="2010 A/L" <?php if($batch== '2010 A/L'){ echo"selected" ;}?>>2010 A/L</option>
    <option value="2011 A/L" <?php if($batch== '2011 A/L'){ echo"selected" ;}?>>2011 A/L</option>
    <option value="2012 A/L" <?php if($batch== '2012 A/L'){ echo"selected" ;}?>>2012 A/L</option>
    <option value="2013 A/L" <?php if($batch== '2013 A/L'){ echo"selected" ;}?>>2013 A/L</option>
    <option value="2014 A/L" <?php if($batch== '2014 A/L'){ echo"selected" ;}?>>2014 A/L</option>
    <option value="2015 A/L" <?php if($batch== '2015 A/L'){ echo"selected" ;}?>>2015 A/L</option>
    <option value="2016 A/L" <?php if($batch== '2016 A/L'){ echo"selected" ;}?>>2016 A/L</option>
    <option value="2017 A/L" <?php if($batch== '2017 A/L'){ echo"selected" ;}?>>2017 A/L</option>
    <option value="2018 A/L" <?php if($batch== '2018 A/L'){ echo"selected" ;}?>>2018 A/L</option>
    <option value="2019 A/L" <?php if($batch== '2019 A/L'){ echo"selected" ;}?>>2019 A/L</option>
  </select>
		  <select id="club" name="club" class="form-control" style="width: 20%;float: left">
    <option value="Science/Maths Society" <?php if($club=='Science/Maths Society'){ echo"selected" ;}?>>Science/Maths Society</option>
    <option value="Commerce Society"  <?php if($club=='Commerce Society'){ echo"selected" ;}?>>Commerce Society</option>
    <option value="Art Society" <?php if($club=='Art Society'){ echo"selected" ;}?>>Art Society</option>
   </select>
			<button class="btn" type="submit" style="font-family: 'dis'">View</button>
			</div>
				</form>
		
<div class="table-responsive">
<table border="1" class="table" >
	<caption style="text-align: center">DATABASE VIEW</caption>
	
	<tr>
	<th >|Id_nO|</th>	
	<th>|First Name |</th>
	<th>|Last Name |</th>
	<th>|Age |</th>
	<th>|Contact No |</th>
	<th>|E-mail |</th>
	<th>|DOB |</th>
	<th>|Town |</th>
	<th>|BATCH |</th>
	<th>|Section |</th>
	<th>|Actions |</th>	
	</tr>

<?php
$x=0;
while($row=mysqli_fetch_assoc($result)){
	$x++;
	?>
	
	<tr>
    <td><?php echo $row['mem_ID'] ;?></td>
    <td><?php echo $row['mem_fName'] ;?></td>
	<td><?php echo $row['mem_lName'] ;?></td>
	<td><?php echo $row['mem_Age'];?></td>	
	<td>0<?php echo $row['mem_4No'];?></td>
	<td><?php echo $row['mem_eMail'];?></td>
	<td><?php echo $row['mem_DBA'];?></td>
	<td><?php echo $row['mem_town'];?></td>
	<td><?php echo $row['mem_BatchN'];?></td>
	<td><?php       
	$tx=$row['mem_club']; switch($tx){
			case  "Science/Maths Society"  :echo "SCI/MATH";break;
			case  "Commerce Society"	:echo "COMM";break;
			case  "Art Society"	:echo "ART";break;
			
	}?></td>
	<td>
		
	<button class="btn-xs btn-success visible-lg visible-md" style="margin-bottom: 4px;float: left" ><a href="updateForm?mem_ID=<?php echo $row['mem_ID'] ;?>" >Update</a>
	</button>
	<button class="btn-xs btn-success visible-xs visible-sm" style="margin-bottom: 4px;" ><a href="updateForm?mem_ID=<?php echo $row['mem_ID'] ;?>" >Update</a>
	</button>	
	<form action="update" method="post">
	<input type="hidden" name="sid" value="<?php echo $row['mem_ID'] ;?>" />	
	<button class="btn-xs btn-danger">Delete
	</button>
		</form>	</td>	
	</tr>
	
<?php	
	
}
	
	

?>
	</table>
		</div>

	
<?php	
}else{
echo "<h1 style='color:white;text-align:center'>No records</h1>";	
	
}




?>

<!--scripts-->	  
<?php include('inc/scripts.php')?>

</body>
</html>
